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
        'invitati' => [
            [
                'nome' => 'nome-uno',
                'cognome' => 'cognome-uno',
                'numero' => '12345678'
            ],
            [
                'nome' => 'nome-due',
                'cognome' => 'cognome-due',
                'numero' => '1234'
            ],
            [
                'nome' => 'nome-tre',
                'cognome' => 'cognome-tre',
                'numero' => '12345678'
            ],
            [
                'nome' => 'nome-quattro',
                'cognome' => 'cognome-quattro',
                'numero' => '1234'
            ],
        ]
    ];
    return view('welcome', $data);
});

Route::get('/dadi', function(){
    return view('dadi');
});
