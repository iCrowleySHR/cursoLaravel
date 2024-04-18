
<?php 

/*
Temos os métodos: get, post, put, delete, patch, options
*/

// Nas aspas colocamos o endereço
Route::get('/', function () {
    return view('welcome');
});

// Acessa url empresa pelo meio get
Route::get('/firma', function(){
    // Retorna o arquivo empresa.blade.php da resources/views/site/empresa
    return view('site/firma');
});

// ============================================================================================================

Route::any('/any', function(){
    return "Permite todo tipo de acesso http (put, delete, get, post)";
});

Route::match(['get','post'],'/match',function(){
    return "Permite apenas acessos definidos, no que foi colocado na array foi get e post";
});

// ============================================================================================================

// Paramentro por URL
// Caso os parametros da URL estejam vazia vai dar erro 404, para o parametro não ser obrigatorio, basta fazer igual o cat
// ? e $cat = ''
Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
    return 'O ID enviado pela URL do produto é: '. $id . '<br>' . 'E a categoria é: ' . $cat ;
    // URL: http://cursolaravel.test/produto/123/limpeza
});

// ============================================================================================================

//Redirect e View 
//Acessar /sobre te levará para /empresa
//               URL      Para onde vai redirecionar
Route::redirect('/sobre', 'empresa');

//Uma maneira mas facil de fazer rotas
//           URL          Aonde está o arquivo
Route::view('/empresa' , 'site/empresa');

// ============================================================================================================

//Rotas Nomeadas
Route::get('/news', function(){
    return view('news');
})->name('noticias');
// Nomeamos a rota news com o nome noticias

Route::get('/novidades', function(){
    // Na /novidades redirectiona para a /news usando seu Nome (noticias)
    return redirect()->route('noticias');
});
// A rota pode mudar, porem se o nome continuar o redirecionamento não falhará

// ============================================================================================================

// GRUPO DE ROTAS

// PREFIX
// Usando PREFIX agora tudo que está nessa função precisa ter admin/
// EX: admin/dashboard
Route::prefix('admin')->group(function(){
    Route::get('dashboard', function(){
        return 'ADMIN/DASHBOARD';
    });
    Route::get('users', function(){
        return 'ADMIN/USERS';
    });
    Route::get('clientes', function(){
        return 'ADMIN/CLIENTES';
    });
});

// NAMEGROUP
// Agora automaticamente todo os nomes começaram com noadmin.
Route::name('noadmin.')->group(function(){
    Route::get('noadmin/dashboard' , function(){
        return 'noadmin/dashboard <br>' . 'Name é: ' . route('noadmin.dashboard');
    })->name('dashboard');

    Route::get('noadmin/users' , function(){
        return 'noadmin/users <br>' . 'Name é: ' . route('noadmin.users');
    })->name('users');

    Route::get('noadmin/clientes' , function(){
        return 'noadmin/clientes <br>' . 'Name é: ' . route('noadmin.clientes');
    })->name('clientes');
});

// NAMEGROUP COM PREFIX
Route::group([
    'prefix' => 'dono', // PREFIX ANTES DA ROTA VAI TER DONO/{E A ROTA}
    'as' => 'dono.'     // ANTES DO NAME ESCOLHIDO VAI TER DONO.{E O NOME ESCOLHIDO}
    // EX: http://localhost/cursoLaravel/public/dono/clientes
], function(){  
    Route::get('/dashboard',function(){
        return 'DASHBOARD DO DONO';
    })->name('dashboard');

    Route::get('/users', function(){
        return 'USUARIOS DO DONO';
    })->name('users');

    Route::get('/clientes', function(){
        return 'CLIENTES DO DONO';
    })->name('clientes');
});

Route::get('/dono', function(){
    return redirect()->route('dono.dashboard');
});

// ============================================================================================================

//QUANDO TRABALHAMOS COM CONTROLLER, USAMOS NAMESPACE
use App\Http\Controllers\ProdutoController;


// Controller
Route::group([
    'prefix' => 'controller',
    'as'     => 'controller.'
], function(){

//         Rota  Arquivo Controller          Qual funçao rodar quando carregar
Route::get('/', [ProdutoController::class , 'index'])->name('index');

// http://localhost/cursoLaravel/public/controller/produto/Gustavo!
// Pegando parametros com a Controller
Route::get('/nome/{nome?}' , [ProdutoController::class , 'parametros'])->name('nome');

});

// ============================================================================================================

// 16 RESOURCE
// Incluir o ResourceController
use App\Http\Controllers\ResourceController;

// Já está configurada para rodar a função index, graças ao resource
//               URL        Classe Controller
Route::resource('resource', ResourceController::class);