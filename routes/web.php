<?php

use Illuminate\Support\Facades\Route;

/*
Temos os métodos: get, post, put, delete, patch, options
*/



// Nas aspas colocamos o endereço
Route::get('/', function () {
    return view('welcome');
});

// Acessa a home pelo meio get
Route::get('/empresa', function(){
    // Retorna o arquivo home.blade.php da resources/views
    return view('site/empresa');
});

