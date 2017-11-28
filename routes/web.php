<?php

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

Route::get('/','IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('question')->group(function(){
  Route::get('/index','QuestionController@index')->name('index');

  Route::get('/editor','QuestionController@editor')->name('editor');

  Route::get('/push','QuestionController@push')->name('push');
});
