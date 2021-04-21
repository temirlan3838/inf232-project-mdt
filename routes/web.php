<?php

use Illuminate\Support\Facades\Route;

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

Route::get('mdt/{lang}','App\Http\Controllers\LocalizationController@index');



Route::get('/mdt', function () {
    return view('frontV.main');
});

Route::get('/mdt/test', function () {
    return view('test');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});
Route::get('logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::post('mdt/login', 'App\Http\Controllers\UserController@login')->name('add-log');
Route::post('mdt/register', 'App\Http\Controllers\UserController@register')->name('add-reg');

Route::post('/mdt/send', 'App\Http\Controllers\SendMailController@send')->name('add-mess');

Route::post('/mdt/create', 'App\Http\Controllers\ProductController@create')->name('add-product');

Route::get('mdt/detail/{id}', 'App\Http\Controllers\ProductController@detail');

Route::post('addToCart', 'App\Http\Controllers\ProductController@addCart');

Route::get('cartlist', 'App\Http\Controllers\ProductController@cartlist');

Route::get('removecart/{id}', 'App\Http\Controllers\ProductController@removecart');
Route::get('ordernow', 'App\Http\Controllers\ProductController@ordernow');

Route::post('orderplace', 'App\Http\Controllers\ProductController@orderplace')->name('order-place');

Route::get('myorders', 'App\Http\Controllers\ProductController@myorders');