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



// Route::get('/', function () {
//     return view('dashboard/index');
// })->name('home');


// Route::get('/employers', function () {
//     return view('dashboard/employers');
// })->name('employers');

Route::group([
    'prefix' => '/'], function () {

    Route::get('', [
        'uses' => 'MainController@getIndex',
        'as' => 'home'
    ]);


    Route::get('employers',  [
        'uses' => 'MainController@getEmployers',
        'as' => 'employers'
    ]);

    Route::get('candidates',  [
        'uses' => 'MainController@getCandidates',
        'as' => 'candidates'
    ]);

    Route::get('jobs',  [
        'uses' => 'MainController@getJobs',
        'as' => 'jobs'
    ]);

    Route::post('jobs',  [
        'uses' => 'MainController@postJobs',
        'as' => 'jobs'
    ]);

    Route::get('job/{id}',  [
        'uses' => 'MainController@getJob',
        'as' => 'jobDetails']);

    Route::get('jobs/{id}',  [
        'uses' => 'MainController@jobsByCategory',
        'as' => 'jobsByCategory'
    ]);
});


Route::group([
    'prefix' => 'admin', 'middleware' => ['auth']], function () {
        Route::get('jobs', [
            'uses' => 'AdminController@getJobsIndex',
            'as' => 'admin.addnewjob'
        ]);

        Route::post('jobs', [
            'uses' => 'AdminController@postAddJob',
            'as' => 'admin.addnewjob'
        ]);

        Route::get('edit', [
            'uses' => 'AdminController@getEdit',
            'as' => 'admin.edit'
        ]);

        Route::get('alljobs', [
            'uses' => 'AdminController@getAllJobs',
            'as' => 'admin.alljobs'
        ]);

        Route::get('', [
            'uses' => 'AdminController@getIndex',
            'as' => 'admin.main'
        ]);
});

Auth::routes();

