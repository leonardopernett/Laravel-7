<?php

use Illuminate\Support\Facades\App;
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

App::setLocale('en');//cambiar lenguaje dinamicamente

Route::view('/','home')->name('home');
Route::view('/quienes-somos','about')->name('about');


Route::get('/portafolio','ProjectController@index')->name('project.index');
Route::get('/portafolio/{id}','ProjectController@show')->name('project.show');

Route::view('/contactos','contact')->name('contact');
Route::post('/contactos','ConctactController@store')->name('contact');
