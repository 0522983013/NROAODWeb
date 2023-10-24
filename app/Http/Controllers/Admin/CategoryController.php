<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
use DB;

class CategoryController extends Controller
{
    public function create(){
        return view("admin.category.create");
    }
    public function store(request $request){
        $category['name'] = $request->name;
        $category['slug'] = Str::slug($request->name);
        $category['image'] = "name.php";
        $category['describe'] = "";
        $category['created_at'] = now();
        $category['updated_at'] = now();

        DB::table("categories")->insert($category);
        
        dd($category);
    }

    public function index(){
        return view("admin.category.index");
    }
}
