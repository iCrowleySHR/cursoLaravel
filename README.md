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
33Colocamos nomes na rotas e quando criamos redirecionamentos, chamamos pelo nome,
se no futuro a rotas mudar, o seu nome não precisa mudar assim não
influenciando nos seus redirecionamentos

## 13 Grupo de Rotas
Aprendemos a colocar um pre nome antes do nome real em varios de uma vex ex: admin.pagina
e aprendemos a colocar um nome antes da url em varias urls de uma vez ex:admin/pagina

## 14 Controllers
Foi criado uma rota e um controller, usamos a pasta routes/web.php e app/Http/Controllers
Para criar uma nova controller, você deve usar o código no terminal:
php artisan make:controller {Nome do arquivo/classe}

Na criação de controller sempre usar letras MAIUSCULAS: ProdutoController

## 15 Parametros com a Controller
Passamos parametros veja no exemplo da routes/web e app/http/controllers


## 16 Resource
Para criar um controller com funções já preparada para montar, usamos esse comando no terminal

Ele cria funções vazias já configuradas 
php artisan make:controller {NomedaController} --resource

Quando você usa o comando
php artisan route:list

Ele lista todas as rotas e métodos, exemplo, com o resource ele gera funções configuradas,
que já tem URLS configuradas para dar delete no banco ou inserir, esse comando so mostra
as rotas. Lista todas as rotas da aplicação

## 17 Route list, clear e cache
os comandos, o cara não recomendo usar em produção
php artisan route:cache     // Cria um arquivo de routas cache para deixar mais rapido as requisições
php artisan route:clear     // Tira o arquivo criado acima do cache

## 18 Banco de dados
Use o 
php artisan migrate
para rodar, as migrate já existentes no banco, assim alteramos depois

## 19 Entendendo as migrates

php artisan migrate:rollback // Reverte a ultima migração!
php artisan migrate:status   // Mostra os status das migrates, se o arquivo já foi rodado

## 20 Criado um mirgrate

Assim como o controller, para criar um migration usamos esse comando
php artisan make:migration {Nome da Migrate}

para deixar o migration pre configurado você precisa seguir esse padrão no nome!:
create_{nomeTabela}_table
ou 
php artisan make:migration {nomeArquivo} --create={nomeTabela}

## 21 Excluindo e editando tabelas (migration)
Para atualizar a tabela produtos que criamos, criaremos uma nova migrate
chamada alterar_nome_tabela_produtos, nela usaremos a função rename e rodaremos
a migrate

Editaremos uma tabela e Excluiremos uma tabela
usando o migration!

        //Excluir a tabela Produto
        //Schema::drop('produto');
        //ou
        //Excluir se existir a tabela produto
        Schema::dropIfExists('produto');

        //Nela usaremos a função rename para alterar o nome da tabela que criamos no terminal
        //              Nome TB   Novo Nome
        Schema::rename('produtos','produto');

## 22 Reset, Refresh e Fresh

php artisan migrate:reset     // Apaga todas as migrations rodadas
php artisan migrate:refresh   // Apaga todas as tabelas e roda as migrations de novo
php artisan migrate::fresh     // Apaga as tabelas e roda novamente

## 23 Modificando Colunas
Para modificar uma coluna, consute a migration alteração banco, aonde alteramos
o noma da coluna e apagamos uma colunas

## 24 Entendendo os Models
é uma representação de uma entidade do banco de dados

php artisan make:model {Nome da model}
fica em app/models/

para retornar um array com dados no banco no controller
consulte os arquivos: ProdutoController e models/Produto

## 25 Criando tabelas Users, Categorias e Produtos
Para criar um model e criar ao mesmo tempo uma migration, basta usar
php artisan make:model nomeArquivo --migration

para criar tambem o controller
php artisan make:model nomeArquivo --migration --controller --resource
ou 
php artisan make:model nomeArquivo -m
ou
php artisan make:model nomeArquivo -mcr //completao

o migration roda em modo sequencial, para enviar isso em migration, basta mudar a numeração para
mudar a posição da migration

## 26 Seeder
Seeder e como se fosse uma arquivo de inserção, aonde rodamos e inserimos dados no banco
veja o arquivo User da Model

para criar uma seeder:
php artisan make:seeder nomeDaSeeder

Depois de criada, para rodar esse comando
php artisan db:seed

## 27 Factory (Inserção de dados no banco em massa)
O comando para gerar um arquivo factory é:
php artisan make:factory nome

Depois de configurar o arquivo de factory você deve criar uma seeder para
rodar

php artisan make:seeder nomeArquivo

devemos configurar a DatabaseSeeder e a CategoriasSeeder

## 28 mfscr
Para criar todos os arquivos de uma vez:
migration, factory, seed, controller resource

so usar o:
php artisan make:model -mfscr nome
ao inves do 
php artisan make model --migration --factory --seed --controller --resource

## 29 Factory Produtos e StrSlug
Nessa aula criaremos uma factory para a tabela produto, e inserimos dados em tabelas com chaves
estrageira!

Veja tudo que usamos em
ProdutosSeeder e ProdutoFactory!

## 30 Relacionamento
Criação da tabela regras e contatos tendo os seus relacionamentos
REGRAS E CONTATO

## 31 Introdução as views