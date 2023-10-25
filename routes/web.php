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

Route::get('admin/category/create', 'Admin\CategoryController@createview');
Route::post('admin/category/create', 'Admin\CategoryController@create');
Route::post('admin/category/delete', 'Admin\CategoryController@delete');
Route::get('admin/category/', 'Admin\CategoryController@index');

Route::get('admin/users/','Admin\users@index');
Route::get('admin/users/create', 'Admin\users@createview');
Route::post('admin/users/create', 'Admin\users@create');
Route::post('admin/users/delete', 'Admin\users@delete');


