<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        return "Você está vendo a função index da controller ProdutoController";
    }
    public function parametros($nome = ''){

        //http://localhost/cursoLaravel/public/controller/produto/Gustavo!
        
        if(empty($nome)){
            return "Parace que você não digitou nenhum nome na URL!";
        }else{
            return "O seu nome segundo a URL é: ". $nome;
        }
        
    }
}
