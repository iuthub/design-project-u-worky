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

Route::get('/', function () {
    return view('dashboard/index');
})->name('home');


Route::group([
    'prefix' => 'admin'], function () {
        Route::get('jobs', [
            'uses' => 'AdminController@getJobsIndex',
            'as' => 'admin.addnewjob'
        ]);

        Route::post('jobs', [
            'uses' => 'AdminController@postAddJob',
            'as' => 'admin.addnewjob'
        ]);

        Route::get('', [
            'uses' => 'AdminController@getIndex',
            'as' => 'admin.main'
        ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index');



