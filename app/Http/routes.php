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
Route::get('programmes', 'PageController@programmes')->name('programmes');
Route::get('contact', 'PageController@contact')->name('contact');
Route::post('contact', 'PageController@postContact');

// Route::get('projects', 'PageController@projects')->name('projects');
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

// Programmes Controller Section
Route::group(['prefix' => 'programmes' ], function () {
    Route::get('/programme1', 'ProgrammesController@programme1')->name('programme1');
});

// Projects Controller Section

Route::group(['prefix' => 'projects' ], function () {
    Route::get('/projects_18_20', 'ProjectsController@project_18_20')->name('project18');
    Route::get('/projects_15_17', 'ProjectsController@project_15_17')->name('project15');
    Route::get('/projects_12_14', 'ProjectsController@project_12_14')->name('project12');
    Route::get('/projects_09_11', 'ProjectsController@project_09_11')->name('project09');
});

// Gallery Controller Section
Route::group(['prefix' => 'gallery' ], function () {
    Route::get('/ai4ce_events', 'GalleryController@ai4ce_events')->name('ai4ce_events');
    Route::get('/exhibition_room', 'GalleryController@exhibition_room')->name('exhibition_room');
    Route::get('/aeirg_retreat', 'GalleryController@aeirg_retreat')->name('aeirg_retreat');
});