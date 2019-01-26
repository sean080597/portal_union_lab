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

Auth::routes();
Route::get('/user-info', function(){
  dd(auth()->user());
});
// Route::group(['middleware' => ['auth']], function () {
//   //handle hashbang in VueJS
//   Route::get('{path}', function() {
//     return view('layouts.app');
//   })->where('path', '.*');
// });
Route::get('{path}', "HomeController@index")->where( 'path', '([A-z\d-\/_.]+)?' );