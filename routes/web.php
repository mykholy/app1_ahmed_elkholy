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

use Illuminate\Support\Facades\Route;

Route::get('/', 'appController@welcome')->name('welcome');

Route::get('/blog', 'blogController@index')->name('blog');
Route::get('/blog/{post}', 'blogController@show')->name('blog.show');

Route::get('customers', 'appController@customers')->name('customers');

Route::get('contact_us', 'appController@contact_us')->name('contact_us');

Route::get('about_us', 'appController@about_us')->name('about_us');

Route::get('profile/{name}','appController@profile')->name('profile');

