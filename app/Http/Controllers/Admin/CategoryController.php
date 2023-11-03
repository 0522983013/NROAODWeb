<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
use DB;
use Storage;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $data_category = DB::table("categories")->orderBy("id", "desc")->paginate(10);
        return view("admin.category.index", ['data_category' => $data_category]);
    }

    public function create()
    {
        return view("admin.category.create");
    }
    public function edit($id)
    {
        $data = DB::table('categories')->where('id', "=", $id)->first();
        if (empty($data)) {
            return redirect()->route('admin.category.index');
        } else {
            return view('admin.category.edit', ['category_data' => $data]);
        }
    }
    public function update(request $request, Category $category)
    {
        $CategoryData = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'describe' => $request->describe,
            'updated_at' => now(),
        ];
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('');
            $CategoryData['image'] = $path;
            $file = $category->image;
            if (Storage::exists($file)) {
                Storage::delete($file);
            }
        }

        if ($category->update($CategoryData)) {
            return redirect()->route('admin.category.index');
        }


    }

    public function store(request $request, Category $category)
    {
        $categoryData = [
            'name' => $request->name,
            'describe' =>$request->describe,
            'slug' => Str::slug($request->name),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        // dd($category, $request->hasFile('image'));
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('');
            $categoryData['image'] = $path;
        }

        $category->insert($categoryData);

        return redirect()->route('admin.category.index');
    }
    public function destroy(request $request)
    {
        DB::table("categories")->delete($request->id);
        return redirect()->route("admin.category.index");
    }
}