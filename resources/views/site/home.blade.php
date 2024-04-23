<!--Para herdamos a página layout--->
@extends('layout.layout')

<!--Para acessarmos o yield title e qual valores enviamos-->
@section('title','Página Home')

<!--Acessamos a yield conteudo e colocamos esse valor--->
@section("conteudo")
<center>
    Tudo que está sendo carregado aqui, herdamos do layout
</center>
@endsection