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
Route::view('/','dashboard')->name('dashboard');

Route::view('/search','search')->name('search');

Route::view('/profile','profile')->name('profile');

Route::view('/add/videos','addvideos')->name('addvideos');

Route::view('/add/article','addarticle')->name('addarticle');

Route::view('/video','video')->name('video');

Auth::routes();


Route::view('/login','login')->name('login');