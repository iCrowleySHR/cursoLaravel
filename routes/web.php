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

Route::any('/any', function(){
    return "Permite todo tipo de acesso http (put, delete, get, post)";
});

Route::match(['get','post'],'/match',function(){
    return "Permite apenas acessos definidos, no que foi colocado na array foi get e post";
});

