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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/policy', 'PagesController@policy');
Route::get('/gallary', 'PagesController@gallary');
Route::get('/contact', 'PagesController@contact');


Route::get('/admin', 'ManageController@index');
Route::get('/adminhome/dashboard', 'ManageController@dashboard');
Route::get('/adminhome/usermanage', 'ManageController@usermanage');
Route::get('/adminhome/gallary', 'GallaryController@gallary');
Route::get('/adminhome/content', 'ContentController@index');






Route::get('/adminhome', function(){
	return view('admin.adminhome');
});
Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

