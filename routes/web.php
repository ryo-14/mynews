<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//【2.【応用】現在はログインしてない状態で /admin/profile/create にアクセスしてもProfileController の add Action に割り当てるように設定されています。 
//こちらをログインしていない状態で /admin/profile/create にアクセスした場合はログイン画面にリダイレクトされるように設定しましょう
//【3.応用】現在はログインしてない状態で /admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定されています。 
//こちらをログインしていない状態で /admin/profile/edit にアクセスした場合にログイン画面にリダイレクトされるように設定しましょう
Route::group(['prefix' => 'admin',"middleware"=>'auth'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::get('news/create','Admin\NewsController@add');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
