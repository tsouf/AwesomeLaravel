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

/*Route::get('/', function () {
    return view('welcome');
   // return 'Hello';
});*/

Route::get('/', 'PagesController@index' );



//Automatically map routes to the functions
Route::resource('posts','PostController');
Route::resource('foods','FoodController');


/*Route::get('about',function(){
    return view('pages.about');
}); */

Auth::routes();

Route::post('foods/{id}', [
    'uses' => 'FoodController@addDelFavourite'
  ]);

Route::get('/dashboard', 'DashboardController@index');
