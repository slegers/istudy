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

Route::get('/','Auth\LoginController@index');

Route::get('/course/add', function (){
    return view('enroll');
})->name('add_course');;

Route::get('/studymoment/add',function(){
    return view('studymoment');
})->name('add_studymoment');
Route::get('/profile', 'UserController@index')->name('profile');


Route::post('/profile', function(){
    return view('enroll');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

