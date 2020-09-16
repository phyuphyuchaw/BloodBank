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



<<<<<<< HEAD


=======
// Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

Route::resource('donors','DonorController');

Route::resource('blogs','BlogController');
Route::resource('bloodgroups','BloodgroupController');


// backend


  // Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');
>>>>>>> 18d676b4a10c6c6278c66866e71f388de138acdb

// Frontend

Route::get('/','PageController@home')->name('homepage');

Route::get('about','PageController@about')->name('aboutpage');

Route::get('contact','PageController@contact')->name('contactpage');

Route::get('blog','PageController@blog')->name('blogpage');

<<<<<<< HEAD
=======

>>>>>>> 18d676b4a10c6c6278c66866e71f388de138acdb
Route::get('detail','PageController@detail')->name('detailpage');

Route::get('search','PageController@search')->name('searchpage');

/*Route::get('loginform','PageController@login')->name('loginpage');
*/

/*Route::middleware('role:Admin')->group(function()
{
  Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');
});

/*Auth::routes();
*/
Route::get('loginform','PageController@login')->name('loginpage');
<<<<<<< HEAD
=======

>>>>>>> 18d676b4a10c6c6278c66866e71f388de138acdb

Route::get('/home', 'HomeController@index')->name('home');
  

Route::get('registerform','PageController@register')->name('registerpage');


// backend
Route::middleware('role:Admin')->group(function()
{

Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

Route::resource('donors','DonorController');

Route::resource('blogs','BlogController');

Route::resource('bloodgroups','BloodgroupController');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
=======
  

Route::get('registerform','PageController@register')->name('registerpage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 18d676b4a10c6c6278c66866e71f388de138acdb
