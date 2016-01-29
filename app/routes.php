<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	#return View::make('hello');
// 	return 'hello world';
// });
Route::get('user/{id}/{name}', function($id, $name)
{
    //
		return $id.' '.$name;
})
->where(array('id' => '[0-9]+', 'name' => '[a-z]+'));

Route::any("/",[
	"as"=>"site/index",
	"uses"=>"SiteController@indexAction"
]);
