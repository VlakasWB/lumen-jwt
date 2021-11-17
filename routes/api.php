<?php

/** @var \Laravel\Lumen\Routing\Router $router */

// use App\Http\Controllers\API\UserController;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;

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

// $router->get('/key', function () {
//     return \Illuminate\Support\Str::random(32);
// });

// $router->group(['prefix' => 'api'], function () use ($router) {
//     $router->post('login', 'API\UserController@login');
//     $router->post('register', 'API\UserController@register');
//     $router->post('logout', 'API\UserController@logout');
//     $router->get('user', 'API\UserController@fetch');
// });

// Route::post('login', [UserController::class, 'login']);
