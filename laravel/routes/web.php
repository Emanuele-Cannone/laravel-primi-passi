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
                'nome' => 'giacomo',
                'cognome' => 'cognome-uno',
                'numero' => '12345678'
            ],
            [
                'nome' => 'alfonso',
                'cognome' => 'cognome-due',
                'numero' => '1234'
            ],
            [
                'nome' => 'ruggero',
                'cognome' => 'cognome-tre',
                'numero' => '12345678'
            ],
            [
                'nome' => 'achille',
                'cognome' => 'cognome-quattro',
                'numero' => '1234'
            ],
        ],
        'message' => 'non puoi entrare',
        'nominativo' => $_GET['name'],
        'ciao' => 'ciao'
    ];
    return view('welcome', $data);
});
