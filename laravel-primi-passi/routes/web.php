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
    return view('index');
})->name('homepage');

Route::get('/secondapagina', function () {
    $welcome = 'Pagina 2';
    return view('secondapagina',compact('welcome'));
})->name('secondapagina');

Route::get('/terzapagina', function () {
    $welcome = 'Pagina 3';
    return view('terzapagina',compact('welcome'));
})->name('terzapagina');
