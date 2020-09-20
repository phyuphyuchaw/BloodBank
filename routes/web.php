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

Route::get('/','PageController@home')->name('homepage');
 
Route::get('about','PageController@about')->name('aboutpage');

Route::get('contact','PageController@contact')->name('contactpage');

Route::get('blog','PageController@blog')->name('blogpage');

Route::get('detail','PageController@detail')->name('detailpage');

Route::get('donorinfo','PageController@donorinfo')->name('donorinfopage');

Route::get('donorlist/{id}','PageController@donorlist')->name('donorlistpage');



Route::post('donor_unavailable','DonorController@donor_unavailable')->name('donor_unavailable');

Route::post('donor_available','DonorController@donor_available')->name('donor_available');

// backend

Route::middleware('auth')->group(function()
{
Route::resource('donors','DonorController');
});

Route::middleware('role:Admin')->group(function()
{

Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');


Route::resource('blogs','BlogController');

Route::resource('bloodgroups','BloodgroupController');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
  
