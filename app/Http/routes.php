<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function() {
    Route::auth();
	Route::get('/', function () {
	    return view('welcome');
	});
});

Route::group(['prefix' => 'auth'], function()
{
    Route::post('authenticate', 'JWTController@authenticate');
});

Route::group(['middleware' => ['web', 'auth']], function() {
    Route::get('/home', 'HomeController@index');
	Route::post('/formato_capacitacion', "EventosController@redirectToDownload");
    Route::get('/formato_capacitacion/download', "EventosController@generateDocument");
    Route::get('/formato_capacitacion',function() {    	
    	return view('formato_capacitacion');
    });
});

Route::group(['middleware'=> ['jwt.auth']], function() {
    Route::resource('viajes', 'ViajeController');
    Route::resource('conceptos', 'ConceptoController');
    Route::resource('viajes/{viajes}/viaticos', 'ViaticoController');
});