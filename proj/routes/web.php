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
    return view('welcome');
});


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


//// HOME CONTROLLER USER REGISTRATO ///////////

Route::get('/dish/index','HomeController@dishIndex')->name('dish-index');
Route::get('/dish/show/{id}','HomeController@dishShow')->name('dish-show');

/////////////////

Route::get('/home', 'HomeController@index')->name('home');

/////////////////

Route::get('/dish/create','HomeController@dishCreate')->name('dish-create');
Route::post('/dish/store/','HomeController@dishStore')->name('dish-store');

/////////////////

Route::get('/dish/edit/{id}' ,'HomeController@dishEdit')->name('dish-edit');
Route::post('/dish/update/{id}', 'HomeController@dishUpdate')->name('dish-update');

/////////////////

Route::get('/dish/delete/{id}','HomeController@dishDelete')->name('dish-delete');

/////////////////

Route::get('/typologies/add','HomeController@typologyAdd')->name('typology-add');
Route::post('/typologies/store/','HomeController@typologyStore')->name('typology-store');

///////// TYPOLOGY CONTROLLER USER NON REGISTRATO ///////////

Route::get('/typologies','TypologyController@typologyIndex')->name('typologies-index');
Route::get('/typology/{id}', 'TypologyController@typologyShow')->name('typology-show');

////////////////////////

Route::get('/user/{id}','UserController@show')->name('user-show');

Route::get('/test', 'UserController@index')->name('index');
