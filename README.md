## 05 ENV E ARTISAN
Atraves do .env configuramos todo o sistema, como nome do banco e etc
Artisan: Atraves desse arquivo rodamos codigos no terminal para rodar migrate, live server e etc
Routes: nela fica o arquivo de rotas do projeto
Resources: nela fica os arquivos visuais do arquivo V do MVC

## 06 Artisan
Nela rodamos codigos atraves do terminal

php artisan migrate // Roda o migrate da aplicação
php -v              // Mostra a versão do PHP
php teste.php       // Roda um arquivo PHP através do terminal
php artisan list    // Lista todos os comandos disponiveis do artisan
clear               // Limpa a tela
php artisan serve   // Roda um servidor para o projeto através do artisan no localhost
php artisan down    // Coloca a aplicação em modo de manutenção, deixa a aplicação não rodavel
php artisan up      // Coloca a aplicação no ar
php artisan help migrate{comando que você está com duvida} // Ele mostra tudo que dá pra rodar com o comando, tira duvida

## 07 MVC (Model, View, Controller)
O navegador acessa o controller, que o controller acessa o model e depois retorna a view para usuario

## 08 Introdução a Rotas
Trabalharemos com requisições http na pasta ROUTES 
usando get, post e etc
e Views na resources/views

## 09 Any e Match
Acesse o arquivo routes/web para ver a aula

## 10 Passagem de Parâmetros
Veja no arquivo routes/web.php
Passamos parametros atraves das functions e entre chaves{}

## 11 Redirect e View
Uma maneira mais facil de fazer rotas e como fazer redirecionamento de página
tudo em routes/web.php

## 12 Rotas nomeadas
Colocamos nomes na rotas e quando criamos redirecionamentos, chamamos pelo nome,
se no futuro a rotas mudar, o seu nome não precisa mudar assim não
influenciando nos seus redirecionamentos

