<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.categories.category_index', compact('categories'));
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
        $data = $request->validate([
            'category_title' => 'required',
            'category_description' => 'nullable',
        ]);
        $data['category_created_user_id'] = Auth::user()->id;
        Category::create($data);
        return to_route('admin-categories.index')->with('success', 'Created Successfully!');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        if (!$category) {
            return to_route('admin-categories.index')->with('error', 'Category not Found');
        }
        return view('partial_view.admin.categories.category_edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'category_title' => 'required',
            'category_description' => 'nullable'
        ]);
        $category = Category::find($id);
        if (!$category) {
            return to_route('admin-categories.index')->with('error', 'Category not Found');
        }
        $category->update($data);
        return to_route('admin-categories.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
