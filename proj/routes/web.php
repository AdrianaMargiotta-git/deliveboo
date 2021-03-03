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

// rotta per pagina Welcome
Route::get('/', function () {
    return view('welcome');
});

//Ricerca avanzata
Route::get('/live_search', 'LiveSearch@index') -> name('live_search');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@getRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


//// HOME CONTROLLER USER REGISTRATO ///////////

// rotta per tornare alla home
Route::get('/home', 'HomeController@index')->name('home');

// rotta per lista piatti
Route::get('/dish/index','HomeController@dishIndex')->name('dish-index');

// rotta per visulizzare il piatto selezionato
Route::get('/dish/show/{id}','HomeController@dishShow')->name('dish-show');

// rotta per creare e storare il piatto creato
Route::get('/dish/create','HomeController@dishCreate')->name('dish-create');
Route::post('/dish/store/','HomeController@dishStore')->name('dish-store');

// rotta per modificare e fare l'update del piatto
Route::get('/dish/edit/{id}' ,'HomeController@dishEdit')->name('dish-edit');
Route::post('/dish/update/{id}', 'HomeController@dishUpdate')->name('dish-update');

// rotta per eliminare il piatto
Route::get('/dish/delete/{id}','HomeController@dishDelete')->name('dish-delete');

// rotta mostrare tutti gli ordini dell'utente registrato
Route::get('/order/index', 'HomeController@orderIndex')->name('order-index');

///////// TYPOLOGY CONTROLLER USER NON REGISTRATO ///////////

Route::get('/typologies','TypologyController@typologyIndex')->name('typologies-index');
Route::get('/typology/{id}', 'TypologyController@typologyShow')->name('typology-show');

///////////////////////

Route::get('/user/{id}','UserController@show')->name('user-show');
