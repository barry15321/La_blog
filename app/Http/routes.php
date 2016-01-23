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
Route::get('/', function () {
	//throw new Exception("Tracy works now.");
    return view('welcome');
});
*/

Route::get('post/{id?}', ['as'=>'posts.show',function($id='85797'){
	return view('welcome');
	//return 'Hello from the other siiiiiiide.'.$id;
}]);

Route::group(['prefix' => '/'] , function(){

	Route::get('La1', function(){
		return "HAlo";
	});


	Route::get('LaLa', function(){
		return "wang~";
	});
});

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

Route::group(['middleware' => ['web']], function () {
    //
});
