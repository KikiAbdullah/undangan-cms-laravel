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

Route::get('/', 'Dashboard\C_dashboard@index');

//form
Route::get('/form', 'Form\C_form@index');
Route::post('/form/store', 'Form\C_form@store');

//get_undangan
Route::get('/{slug_undangan}', 'Undangan\C_undangan@get_undangan');

//send_ucapan
Route::post('/send_ucapan', 'Undangan\C_undangan@send_ucapan');
