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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view/{id}', 'HomeController@view')->name('view');
Route::get('/flowerdetail/{id}', 'HomeController@flowerdetail')->name('flowerdetail');
// ---flower
Route::get('/addflower', 'HomeController@add')->name('addflower')->middleware('auth', 'checkrole');
Route::get('/updateflower/{id}', 'HomeController@update')->name('updateflower')->middleware('auth', 'checkrole');

Route::post('/add', 'HomeController@addflower')->name('submitaddflower')->middleware('auth', 'checkrole');
Route::post('/update', 'HomeController@updateflower')->name('submitupdateflower')->middleware('auth', 'checkrole');
Route::post('/delete', 'HomeController@deleteflower')->name('deleteflower')->middleware('auth', 'checkrole');
// ---category
Route::get('/managecategory', 'HomeController@viewcategory')->name('managecategory')->middleware('auth', 'checkrole');
Route::get('/updatecategory/{id}', 'HomeController@updatecategory')->name('updatecategory')->middleware('auth', 'checkrole');

Route::post('/updatecategory', 'HomeController@submitupdatecategory')->name('submitupdatecategory')->middleware('auth', 'checkrole');
Route::post('/deletecategory', 'HomeController@deletecategory')->name('deletecategory')->middleware('auth', 'checkrole');
// ---user
Route::get('/changepassword', 'HomeController@changepassword')->name('changepassword')->middleware('auth');
Route::post('/updatepassword', 'HomeController@updatepassword')->name('updatepassword')->middleware('auth');