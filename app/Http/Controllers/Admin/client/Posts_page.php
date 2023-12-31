<?php

namespace App\Http\Controllers\Admin\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;

class Posts_page extends Controller
{
    
    public function index()
    {
        $post = post::whereType('1')->orderBy("id", "desc")->paginate(10);
        return view('admin.client.Post_Page', ['post' => $post]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
