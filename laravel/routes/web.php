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
    $data = [
        'emanuele',
        'davide',
        'giacomo',
        'niccolo',
        'simone',
        'yuri',
        'alessio',
        'gesualdo'
    ];
    return view('welcome', $data);
});

Route::get('/dadi', function(){
    return view('dadi');
});
