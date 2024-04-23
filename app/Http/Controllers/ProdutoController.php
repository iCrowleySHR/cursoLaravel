<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nome = 'gustavo';
        $idade = '<h1>17</h1>';
        $html = '<h1>HTMLL</h1>';

        //Pegamos essas variaveis é enviamos para a view!!! Veja o resto na view News
        // return view("news", [
        //     'nome'  => $nome,
        //     'idade' => $idade,
        //     'html'  => $html
        // ]);

        //OU

        return view('site.home', compact('nome','idade','html'));

        // $produtos acessa a model Produto e acessa tudo ou usa o use
        // $produtos = \App\Models\Produto::all();

        // $produtos = Produto:all();

        //dd e como se fosse o varDump, debuga
        // dd($produtos);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function parametros($nome = '')
    {

        //http://localhost/cursoLaravel/public/controller/produto/Gustavo!

        if (empty($nome)) {
            return "Parace que você não digitou nenhum nome na dURL!";
        } else {
            return "O seu nome segundo a URL é: " . $nome;
        }
    }
}
