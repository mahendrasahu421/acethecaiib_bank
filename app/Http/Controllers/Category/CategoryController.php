<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['parentCategories'] = Categories::whereNull('parent_category')->get();

        return view('admin.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $rules = [
                'name' => 'required|string|max:255',
                'status' => 'required',
                'parent_category' => 'nullable|integer|exists:categories,id',
            ];

            $messages = [
                'name.required' => 'Category name is required.',
                'status.required' => 'Status is required.',
            ];

            $request->validate($rules, $messages);

            Categories::create([
                'name' => $request->name,
                'status' => $request->status,
                'parent_category' => $request->parent_category ?: "0",
            ]);

            return redirect('admin/categories')->with('success', 'Category saved successfully!');

        } catch (Exception $e) {

            return redirect()->back()->with('error', 'Somthing Went Wrong!');
        }
    }


    /**
     * Display the specified resource.
     */
    public function list(Request $request)
    {
        $search = $request->input('search')['value'] ?? null;
        $limit = $request->input('length', 10);
        $start = $request->input('start', 0);

        // Initialize query
        $categoriesQuery = Categories::query();



        // Apply search filter
        if ($search) {
            $categoriesQuery->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', "%$search%");
            });
        }

        // Total count before pagination
        $totalRecords = $categoriesQuery->count();

        // Fetch paginated data
        $categories = $categoriesQuery->skip($start)->take($limit)->get();

        // Format data for DataTables
        $rows = [];
        foreach ($categories as $index => $category) {
            $row = [];
            $row['sn'] = $start + $index + 1;
            $row['name'] = e($category->name);
            $row['status'] = $category->status === 'Active'
                ? '<span class="badge bg-success">Active</span>'
                : '<span class="badge bg-danger">Inactive</span>';

            $row['created_at'] = $category->created_at ? $category->created_at->format('d-m-Y') : '';

            // Example actions (edit/delete buttons)
            $row['action'] = '<a href="' . route('admin.categories.edit', $category->id) . '" class="btn btn-sm btn-primary">Edit</a>
                          <a href="javascript:void(0);" data-id="' . $category->id . '" class="btn btn-sm btn-danger delete-category">Delete</a>';

            $rows[] = $row;
        }

        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalRecords,
            'data' => $rows,
        ]);
    }

    public function show()
    {
        return view('admin.category.list');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['title'] = 'Edit Category';
        $data['parentCategories'] = Categories::all();
        $data['catogary'] = Categories::findOrFail($id);
        return view('admin.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // Validate input
            $request->validate([
                'name' => 'required',
                'status' => 'required|in:Active,Inactive',
                'parent_category' => 'nullable|integer|exists:categories,id',
            ]);

            // Find category
            $category = Categories::findOrFail($id);

            // Update fields
            $category->update([
                'name' => $request->name,
                'status' => $request->status,
                'parent_category' => $request->parent_category ?: "0",
            ]);

            // Success response
            return redirect()->route('admin.categories')->with('success', 'Category updated successfully!');

        } catch (\Exception $e) {
            // Optional: log the error
            \Log::error("Category update failed: " . $e->getMessage());

            // Redirect back with error message
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
