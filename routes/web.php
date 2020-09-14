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
/*
<<<<<<< HEAD
/*<<<<<<< HEAD
=======
// <<<<<<< HEAD
>>>>>>> cf1ee818be0b48c9d2db217eefce0f422aee8285
/*Route::get('/', function () {
<<<<<<< HEAD
   // return view('welcome');
    return 'Hello Laravel';
=======
    return view('welcome');
<<<<<<< HEAD
    // return 'Hello Laravel';
=======
    //return 'Hello Laravel';
>>>>>>> 769644c757295a36e3a765f930e5bc187c8f0e2e
=======
Route::get('/', function () {
  return 'By Pauk';
>>>>>>> 690b4986fbd3612b8efe7757eaaf8727f761339a
});

Route::get('/testing',function ($value=''){
	return 'Thhis is a testing page!';
<<<<<<< HEAD
>>>>>>> f308780851173f68fa6a53743d6e5ce1bbcb84f4
});*/


Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

Route::resource('donors','DonorController');

Route::resource('blogs','BlogController');

// backend


  Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

// Frontend

Route::get('/','PageController@home')->name('homepage');

Route::get('about','PageController@about')->name('aboutpage');

Route::get('contact','PageController@contact')->name('contactpage');

Route::get('blog','PageController@blog')->name('blogpage');

Route::get('loginform','PageController@login')->name('loginpage');

Route::get('registerform','PageController@register')->name('registerpage');

//   Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');
// });

Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');


Route::get('/', function () {
  
	return 'bloodbank';
});


  return 'welcome';
});

