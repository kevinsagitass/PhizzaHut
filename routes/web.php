<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/Login', function () {
    return view('login');
});

Route::group(['middleware' => ['web']], function () {

    Route::get('/Home', 'HomeController@dashboard');

    Route::get('/Register', function () {
        return view('register');
    });

    Route::post('/Register', 'RegisterController@register');

    Route::post('/Login', 'LoginController@login');
});
