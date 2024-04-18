<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;
// Tudo que foi aprendido sobre rotas, estará no arquivo routes-exemples

Route::get('produtos', [ProdutoController::class, 'index']);
