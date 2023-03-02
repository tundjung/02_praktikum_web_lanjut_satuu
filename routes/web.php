<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    echo"Selamat Datang";
});

Route::get('/about', function (){
    echo"NAMA : Mellyana Tundjung <br>";
    echo"NIM : 2141720061";
});

Route::get('/articles/{id}', function ($id){
    return('Halaman artikel dengan ID '.$id);
});