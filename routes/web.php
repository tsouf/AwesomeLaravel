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


/*Route::get('about',function(){
    return view('pages.about');
}); */

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
