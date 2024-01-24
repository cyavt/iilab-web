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
    return view('home');
});

Route::get('/manage', function () {
    return view('manage');
});

Route::get('/doc', function () {
    return view('doc');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/software', function () {
    return view('software');
});

Route::get('/apidev', function () {
    return view('apidev');
});