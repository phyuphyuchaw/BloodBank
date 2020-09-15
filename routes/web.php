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



Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

Route::resource('donors','DonorController');

Route::resource('blogs','BlogController');

// backend



  

// Frontend

Route::get('/','PageController@home')->name('homepage');

Route::get('about','PageController@about')->name('aboutpage');

Route::get('contact','PageController@contact')->name('contactpage');

Route::get('blog','PageController@blog')->name('blogpage');

Route::get('detail','PageController@detail')->name('detailpage');

Route::get('search','PageController@search')->name('searchpage');

Route::get('loginform','PageController@login')->name('loginpage');

Route::get('registerform','PageController@register')->name('registerpage');


