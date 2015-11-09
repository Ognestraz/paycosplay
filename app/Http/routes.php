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

//$app->group(['namespace' => 'Admin\Http\Controllers'], function () use ($app) {
//    $app->get('image/{variant}/{path:[a-zA-Z0-9_\-\/\.]*}', array('uses' => 'ImageController@image'));
//});

$app->group(['namespace' => 'Admin\Http\Controllers'], function () use ($app) {

    if (isset($_SERVER['SERVER_NAME']) && 'image.' . $_SERVER['SERVER_NAME'] === $_SERVER['HTTP_HOST']) {
        $app->get('{variant}/{path:[a-zA-Z0-9_\-\/\.]*}', array('uses' => 'ImageController@image'));
    }
    
});

$app->group(['namespace' => 'App\Http\Controllers'], function () use ($app) {

    $app->get('{path:[a-zA-Z0-9_\-\/]*}', array('uses' => 'SiteController@show'));

});
