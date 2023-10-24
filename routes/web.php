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
    return view('welcome');
});
Route::get('admin/', function () {
    return view('admin.index');
});

Route::get('admin/category/create', 'Admin\CategoryController@create');
Route::post('admin/category/create', 'Admin\CategoryController@store');
Route::get('admin/category/', 'Admin\CategoryController@index');
