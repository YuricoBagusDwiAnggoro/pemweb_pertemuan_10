<?php

use Illuminate\Support\Facades\Route;
//s

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    return 'Apa kabar dunia';
});

Route::get('/belajar', function (){
    echo '<h1>apa kab dunia</h1>';
    echo 'tetep asik....';
});

Route::get('/belajar/laravel', function () {
    echo '<h1> apa kabar dunia laravel</h1>';
    echo '<belajar laravel tetep asikkk.....';
});
Route::get('/biodata/{namadepan}/{namabelakang}', function($namadepan, $namabelakang){
    return "<h1>Apa Kabar dunia laravel</h1>
        selamat belajar $namadepan $namabelakang";
});