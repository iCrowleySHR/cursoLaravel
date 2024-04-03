<?php

use Illuminate\Support\Facades\Route;

/*
Temos os métodos: get, post, put, delete, patch, options
*/

// Nas aspas colocamos o endereço
Route::get('/', function () {
    return view('welcome');
});

// Acessa url empresa pelo meio get
// Route::get('/empresa', function(){
//     // Retorna o arquivo home.blade.php da resources/views/site/empresa
//     return view('site/empresa');
// });

Route::any('/any', function(){
    return "Permite todo tipo de acesso http (put, delete, get, post)";
});

Route::match(['get','post'],'/match',function(){
    return "Permite apenas acessos definidos, no que foi colocado na array foi get e post";
});

// Paramentro por URL
// Caso os parametros da URL estejam vazia vai dar erro 404, para o parametro não ser obrigatorio, basta fazer igual o cat
// ? e $cat = ''
Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
    return 'O ID enviado pela URL do produto é: '. $id . '<br>' . 'E a categoria é: ' . $cat ;
    // URL: http://cursolaravel.test/produto/123/limpeza
});

//Acessar /sobre te levará para /empresa
//               URL      Para onde vai redirecionar
Route::redirect('/sobre', 'empresa');

//Uma maneira mas facil de fazer rotas
//          URL           Aonde está o arquivo
Route::view('/empresa' , 'site/empresa');

