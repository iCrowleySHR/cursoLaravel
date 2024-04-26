<!--Para herdamos a página layout--->
@extends('layout.layout')

<!--Para acessarmos o yield title e qual valores enviamos-->
@section('title','Página Home')

<!--Acessamos a yield conteudo e colocamos esse valor--->
@section("conteudo")
        <div>
                {{$nome}}
        </div> 
        
        <div>
                {{isset($nome) ?  'A variavel nome chegou' : 'A variavel nome não chegou'}}
        </div>
        
    
        {{--Caso esteja vazio "padrão sera o valor padrao"--}}
        <div>
                {{$teste ?? "padrão"}}
        </div>
        
        <div>
                Tudo que está sendo carregado aqui, herdamos do layout
        </div>
        
        <div>
                {{--If e else--}}
                @if ($nome == 'gustavo')
                        Nome é igual Gustavo
                @else
                        Nome não é igual Gustavo
                @endif
        </div>

        {{--Unless = Oposto do if, se não for igual--}}
        <div>
                @unless ($nome == 'gustavo')
                        Nome não é igual Gustavo
                @else
                        Nome é igual a Gustavo
                @endunless
        </div>

        {{-- Switch e Case--}}
        <div>
                @switch($idade)
                        @case(17)
                                Você tem 17 anos
                                @break
                        @case(18)
                                Você tem 18 anos
                                @break
                        @default
                        Valor default   
                @endswitch
        </div>
        
        {{--Isset e empty--}}
        <div>
                @isset($nome)
                        A variavel está setada
                @else
                        A variavl não esta setada
                @endisset
        </div>
        

        <div>
                @empty($variavelVazia)
                        A variavel está vazia 
                @endempty
        </div>

        {{--Auth, verifica se o usuario esta autenticado--}}
        <div>
                @auth
                        O usuario está autenticado
                @endauth
        </div>

        {{--Guesss Verifica se o usuario não está autenticado--}}
        <div>
                @guest
                        O usuario não está autenticado
                @endguest
        </div>
        
        

@endsection

{{-- Isso é um comentário --}}