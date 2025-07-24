<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Categories;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{
    public function index()
    {
        $data['catogery'] = Categories::all();
        return view('admin.courses.index', $data);
    }
    public function show()
    {
        return view('admin.courses.list');
    }


    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'slug' => 'nullable|string|unique:courses,slug',
                'price' => 'nullable|numeric',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'category_id' => 'required|exists:categories,id',
                'description' => 'nullable|string',
                'status' => 'required|in:Active,Inactive'
            ]);

            $imagePath = null;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();

                $resizedImage = Image::make($image)
                    ->resize(800, 600, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->encode($image->getClientOriginalExtension(), 60);

                Storage::disk('public')->put("courses/{$filename}", $resizedImage);

                $imagePath = "courses/{$filename}";
            }

            $slug = $request->slug ?: Str::slug($request->title);

            Course::create([
                'title' => $request->title,
                'slug' => $slug,
                'price' => $request->price,
                'image' => $imagePath,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'status' => $request->status,
            ]);

            return redirect()->back()->with('success', 'Course created successfully!');

        } catch (Exception $e) {
            // Log error (optional)
            \Log::error('Course store error: ' . $e->getMessage());

            // Redirect back with error message
            return redirect()->back()->withInput()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

}
