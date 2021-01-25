<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Pages Controller Section
Route::get('/', 'PageController@index')->name('home');
Route::get('about', 'PageController@about')->name('about');
// Route::get('blog', 'PageController@blog')->name('blog');
Route::get('contact', 'PageController@contact')->name('contact');
Route::get('gallery', 'PageController@gallery')->name('gallery');
Route::get('achievements', 'PageController@achievements')->name('achievements');
Route::get('team', 'PageController@team')->name('team');
Route::get('units', 'PageController@units')->name('units');
Route::get('seminars', 'PageController@seminars')->name('seminars');
Route::get('internship', 'PageController@internship')->name('internship');
Route::get('trainings', 'PageController@trainings')->name('trainings');

// Units Controller Section
Route::get('powerTech', 'UnitsController@powerTech')->name('powerTech');
Route::get('Elearning', 'UnitsController@Elearning')->name('Elearning');
Route::get('autotronics', 'UnitsController@autotronics')->name('autotronics');
Route::get('webDev', 'UnitsController@webDev')->name('webDev');
Route::get('awp', 'UnitsController@awp')->name('awp');
Route::get('precision_agric', 'UnitsController@precision_agric')->name('precision_agric');
Route::get('uav', 'UnitsController@uav')->name('uav');