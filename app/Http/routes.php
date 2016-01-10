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

$app->get('/', ['as' => 'index', 'uses' => 'PagesController@index']);

$app->get('/motivational', ['as' => 'motivational', 'uses' => 'PagesController@motivationPage']);

$app->get('/demotivational', ['as' => 'demotivational', 'uses' => 'PagesController@demotivationPage']);
