<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminPassword = "caiib@123#";
        $users = [
            'first_name' => "Admin",
            'last_name' => 'admin',
            'email ' => 'caiibadmin@gmail.com',
            'password' => $adminPassword,
            'email_verified_at' => now(),
            'mobile_verified_at' => now(),
            'mobile' => 88876033315,
            'user_type' => 'admin',
            'identity' => $adminPassword,
            'password' => Hash::make($adminPassword),
            'user_status' => 'active',
            'term_and_condition' => 1,
            'is_signed' => 1,
            'remember_token' => 222221,


        ];
        foreach ($users as $user) {
            $user = User::updateOrCreate(['email' => $user['email']], $user);
        }
    }
}
