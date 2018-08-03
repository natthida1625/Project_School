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
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('video', function () {
    return view('video');
});

Route::get('createvideo', function () {
    return view('createvideo');
});

Route::get('editvideo', function () {
    return view('editvideo');
});

Route::get('testjs', function () {
    $videos = [
                'v1' => 'test',
                'v2' => 'test2'
            ];
    return view('testjs')->with('videos', $videos);
    //return view('testjs')->with('videos', 'test');
});