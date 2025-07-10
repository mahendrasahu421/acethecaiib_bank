<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AuthController extends Controller
{
    // Step 1: Send OTP to mobile number
    public function sendOtp(Request $request)
    {
     
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|string|digits:10',  // adjust digits as per your mobile format
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $mobile = $request->mobile;

        // Generate 6 digit OTP
        $otp = rand(100000, 999999);

        // Save or update user with OTP and expiry (5 minutes)
        $user = User::updateOrCreate(
            ['mobile' => $mobile],
            [
                'otp' => $otp,
                'otp_expires_at' => Carbon::now()->addMinutes(5),
            ]
        );

        // TODO: Send OTP via SMS gateway here
        // For demo, we return OTP in response (remove in production)
        return response()->json([
            'message' => 'OTP sent successfully',
            'otp' => $otp,  // remove this line in real app
        ]);
    }

    // Step 2: Verify OTP
    public function verifyOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|string|digits:10',
            'otp' => 'required|digits:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $user = User::where('mobile', $request->mobile)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        if ($user->otp !== $request->otp) {
            return response()->json(['error' => 'Invalid OTP'], 401);
        }

        if (Carbon::now()->gt($user->otp_expires_at)) {
            return response()->json(['error' => 'OTP expired'], 401);
        }

        // OTP valid, clear otp and expiry
        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        // Generate API token for user (using Laravel Sanctum or any token method)
        // For example, using Laravel Sanctum:
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login successful',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ]);
    }
}

