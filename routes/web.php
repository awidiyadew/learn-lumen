<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('foo', function () {
    return '
                {
                    "success"   : true,
                    "data"      : 1
                }
            ';
});

$router->get('bar/{id}', function ($id) {
    return 'bar '.$id;
});

$router->get('kucing/{id}/{sound}', 'KucingController@show');

$router->get('kucing2/{id}/{sound}', 'KucingController@showJson');

$router->get('user', function(){
    return \App\User::all();
});

$router->get('user/{id}', function($id){
    return \App\User::where('id', $id)->get();
});