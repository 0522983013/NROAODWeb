<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Client', 'as' => 'client.'], function () {
    Route::get('/test/{id}', 'viewController@test');

    Route::get('/', 'viewController@index')->name('index');
    Route::get('/tintuc', 'viewController@tintuc')->name('tintuc');
    Route::get('/baiviet', 'viewController@baiviet')->name('baiviet');

    Route::resource('users', 'usersController');
    Route::post('dang-nhap', 'usersController@login')->name('users.CheckLogin');
    Route::get('dang-xuat', 'usersController@logout')->name('users.logout');
    Route::get('dang-nhap',  function(){ 
        if(\Auth::check()){
            return redirect()->route('client.index');
        }
        return view('client.users.login'); 
    } )->name('users.login');
});

// Route ADMIN
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

    route::post('/login', 'users@userLogin')->name('Checklogin');

    route::get('/login', function(){ return view('admin.login'); })->name('login');

    Route::group(['middleware' => ['auth']], function () {

        Route::get('/', function () { return view('admin.index'); });

        Route::resource('category', 'CategoryController');

        Route::resource('tags', 'TagsController');

        Route::resource('users', 'users');
    });
});



