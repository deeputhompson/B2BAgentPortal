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
    return view('search');
});*/

//Route::resource('organisation','organisationcontroller');

//Route::resource('location','locationcontroller');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>'auth'],function(){
	

	Route::get('/', function () {
    return view('search');
	});

		
	Route::resource('organisation','organisationcontroller');

	Route::resource('location','locationcontroller');

});
