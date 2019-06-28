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
Route::get('/admin/dashboard', 'ManageController@dashboard');
Route::get('/admin/usermanage', 'ManageController@usermanage');
Route::get('/admin/gallary', 'GallaryController@gallary');
// Route::get('/admin/content', 'ContentController@index');






Route::get('/adminhome', function(){
	return view('admin.adminhome');
});
Route::resource('posts', 'PostsController');
Route::resource('admin/content', 'ContentController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

