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
    return view('admin.welcome');
});


Route::get('/job-list', 'App\Http\Controllers\jobController@joblist')->name("job-list");
Route::get('/new-job', 'App\Http\Controllers\jobController@addjob')->name("new-job");
Route::get('/jobs-page', 'App\Http\Controllers\jobController@jobspage')->name("jobs-page");
Route::get('/job-view', 'App\Http\Controllers\jobController@jobview')->name("job-view");
Route::get('/job-application', 'App\Http\Controllers\jobController@jobapplication')->name("job-application");
Route::get('/apply-job', 'App\Http\Controllers\jobController@applyjob')->name("apply-job");
Route::get('/new-job', 'App\Http\Controllers\jobController@newjob')->name("new-job");
Route::get('/user-profile', 'App\Http\Controllers\jobController@userprofile')->name("user-profile");






