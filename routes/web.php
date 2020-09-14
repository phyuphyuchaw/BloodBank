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
});

Route::get('/testing',function ($value=''){
	return 'Thhis is a testing page!';
>>>>>>> f308780851173f68fa6a53743d6e5ce1bbcb84f4
});*/


  Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

