<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Course;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;


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
                'duration' => 'nullable|numeric',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'category_id' => 'required|exists:categories,id',
                'description' => 'nullable|string',
                'status' => 'required|in:Active,Inactive'
            ]);

            $imagePath = null;

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('course', 'public');
            }

            $slug = $request->slug ?: Str::slug($request->title);
            $count = Course::where('slug', 'LIKE', "$slug%")->count();

            if ($count) {
                $slug .= '-' . ($count + 1);
            }
            Course::create([
                'title' => $request->title,
                'slug' => $slug,
                'price' => $request->price,
                'duration' => $request->duration,
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


    public function list(Request $request)
    {
        $search = $request->input('search')['value'] ?? null;
        $limit = $request->input('length', 10);
        $start = $request->input('start', 0);

        // Initialize query
        $CoursesQuery = Course::with('category');




        // Apply search filter
        if ($search) {
            $CoursesQuery->where(function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%")
                    ->orWhere('slug', 'LIKE', "%$search%");
            });
        }


        // Total count before pagination
        $totalRecords = $CoursesQuery->count();

        // Fetch paginated data
        $courses = $CoursesQuery->skip($start)->take($limit)->get();

        // Format data for DataTables
        $rows = [];
        foreach ($courses as $index => $course) {

            $row['sn'] = $start + $index + 1;
            $row['category'] = $course->category ? e($course->category->name) : 'N/A';

            $row['title'] = e($course->title);
            $row['duration'] = e($course->duration);

            // ✅ Image thumbnail
            $row['image'] = $course->image
                ? '<img src="' . asset('storage/' . $course->image) . '" alt="Image" width="100" height="80">'
                : 'No Image';

            // ✅ Status
            $row['status'] = $course->status === 'Active'
                ? '<span class="badge bg-success">Active</span>'
                : '<span class="badge bg-danger">Inactive</span>';

            $row['created_at'] = $course->created_at ? $course->created_at->format('d-m-Y') : '';
            $row['price'] = $course->price;

            // ✅ Action buttons
            $row['action'] = '<a href="' . route('admin.courses.edit', $course->id) . '" class="btn btn-sm btn-primary">Edit</a>
                      <a href="javascript:void(0);" data-id="' . $course->id . '" class="btn btn-sm btn-danger delete-category">Delete</a>';

            $rows[] = $row;
        }


        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalRecords,
            'data' => $rows,
        ]);
    }


    public function edit(string $id)
    {

    }


}
