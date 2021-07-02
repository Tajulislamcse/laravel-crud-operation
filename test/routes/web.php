<?php


use App\Notifications\TestNotification;
use App\User;
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

//Route::resource('photos', 'PhotoController');
Route::resource('/books','BookController');
////Route::get('user/profile', 'UserProfileController@show')->name('profile');
Route::get('/create','UserController@create');
Route::post('/store','UserController@store');
Route::get('/index','UserController@index');
