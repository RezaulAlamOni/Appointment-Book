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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/', function () { return view('index'); })->name('index');
Route::get('/service', function () { return view('service'); })->name('service');
Route::get('/doctors', function () { return view('doctors'); })->name('doctors');
Route::get('/route=login', function () { return view('login'); })->name('login1');
Route::get('/route=registration', function () { return view('register'); })->name('registration');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::get('/forge=pass', function () { return view('forget_pass'); })->name('forget.pass');
Route::get('/route=gallery', function () { return view('gallery'); })->name('gallery');
Route::get('/user=admin', function () { return view('gallery'); })->name('admin');
Route::get('/user=admin', function () { return view('admin.index'); })->name('admin');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
