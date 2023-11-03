<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Str;
use \DB;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_tags = DB::table("tags")->orderBy("id","desc")->paginate(10);
        return view("admin.tags.index", ['data_tags' => $data_tags]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.tags.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $tags['name'] = $request->name;
        $tags['created_at'] = now();
        $tags['updated_at'] = now();

        DB::table("tags")->insert($tags);

        return redirect()->route('admin.tags.index');
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
        $data = DB::table('tags')->where('id', "=", $id)->first();
        if (empty($data)) {
            return redirect()->route('admin.tags.index');
        } else {
            return view('admin.tags.edit', ['tags_data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $tags['name'] = $request->name;
        $tags['updated_at'] = now();

        DB::table("tags")->where('id', '=', $id)->update($tags);

        return redirect()->route('admin.tags.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("tags")->delete($id);
        return redirect()->route("admin.tags.index");
    }
}
