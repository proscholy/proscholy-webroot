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
    return redirect('https://zpevnik.proscholy.cz');
});

Route::get('/app-download', function () {
    return view('app-download');
});

Route::get('/join', function () {
    return redirect('https://join.slack.com/t/proscholy/shared_invite/zt-kffcuuwj-Xd4FTtv7Dp2~W9hGWu_2xQ');
});

Route::get('/public', function () {
   return view('index');
});


