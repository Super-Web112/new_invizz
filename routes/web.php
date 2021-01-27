<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'WelcomeController@index');
Route::post('/search', 'SearchController@SearchByLocation');
Route::post('/all_view', 'SearchController@AllView');
Route::post('/filterbytype', 'SearchController@FilterByType');
Route::post('/profiledialog', 'SearchController@profileDialog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Profile setting
Route::post('/image-upload/{id}', 'ProfileController@imageUploadPost')->name('image.upload.post');
Route::post('/profile-add-type', 'ProfileController@addArtistType')->name('profile.addtype');
Route::get('/profile/{id}', 'ProfileController@edit');
Route::resource('profile','ProfileController');