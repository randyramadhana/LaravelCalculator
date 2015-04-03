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

Route::get('/', ['
	as' => 'blank', 'uses' => 'NumberController@blank'
]);

Route::get('/{output}/calc/{num}', ['
	as' => 'calc', 'uses' => 'NumberController@calc'
]);

Route::get('/{output}/op/{operator}', [
	'as' => 'op', 'uses' => 'NumberController@operate'
]);
