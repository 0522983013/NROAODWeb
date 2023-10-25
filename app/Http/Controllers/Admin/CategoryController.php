<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
use DB;

class CategoryController extends Controller
{
    public function createview(){
        return view("admin.category.create");
    }
    public function delete(request $request){
        DB::table("categories")->delete($request->id);
        return redirect('admin/category');
    }

    public function create(request $request){
        $category['name'] = $request->name;
        $category['slug'] = Str::slug($request->name);
        $category['image'] = "https://image-us.24h.com.vn/upload/3-2022/images/2022-07-11/21-1657535366-24-width650height650.jpg";
        $category['describe'] = $request->describe;
        $category['created_at'] = now();
        $category['updated_at'] = now();

        DB::table("categories")->insert($category);

        return redirect('admin/category');
    }

    public function index(){
        $data_category = DB::table("categories")->get();
        return view("admin.category.index", ['data_category' => $data_category]);
    }
}
