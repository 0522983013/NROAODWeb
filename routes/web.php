<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('client.index');
});
Route::get('admin/', function () {
    return view('admin.index');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as'=>'admin.'], function () {
    Route::resource('category', 'CategoryController');

    Route::resource('tags', 'TagsController');

    Route::resource('users', 'users');
    
});



