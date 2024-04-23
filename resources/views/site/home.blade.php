<!--Para herdamos a página layout--->
@extends('layout.layout')

<!--Para acessarmos o yield title e qual valores enviamos-->
@section('title','Página Home')

<!--Acessamos a yield conteudo e colocamos esse valor--->
@section("conteudo")
<div class="my-5">
    <center>     
        {{$nome}}

<br>
        {{isset($nome) ?  'A variavel nome chegou' : 'A variavel nome não chegou'}}
<br>    
        {{--Caso esteja vazio "padrão sera o valor padrao"--}}
        {{$teste ?? "padrão"}}
<br>
        Tudo que está sendo carregado aqui, herdamos do layout
    </center>
</div>

@endsection

{{-- Isso é um comentário --}}