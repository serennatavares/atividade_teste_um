# Sistema de Login Simples 

Esse site teve como objetivo aprender a programação back-end e ensiner o funcionamento do PHP e do MySQL, 
demonstrando o seu funcionamento e conexão com o banco de dados, além de demonstrar como fazer um cadastro 
e login corretos, utilizando o banco de dados.  O projeto permite que usuários realizem login utilizando 
credenciais armazenadas em um banco de dados, e realizem o cadastro de novos usuários.

## Update e Delete como a funcionalidade poderia ser implementada

A funcionalidade de UPDATE pode ser implementada utilizando UPDATE SET.

Para fazer isso é necessário criar um arquivo chamado update.php onde colocamos o comando.

## Arquivos que modificamos:

Alteramos o arquivo table.php para que a tabela também tivesse botões de "Editar" e "Excluir".
Fizemos o botão "Editar" da página table levar a outra tela que permite que o usuário escreva qual ID ele quer alterar e para quais informações

## Lógica necessária para realizar a exclusão

1. Pensamos no que usar tendo em mente as aulas de banco de dados com a professora Thalita.
2. Utilizamos outros métodos com páginas novas e novas funções.
3. Utilizamos o comando GET

## Pesquisas, testes e tentativas realizadas

Tivemos que fazer pesquisas da ideia por trás de CRUD e ver vídeos de pessoas ensinando, encontramos formas diferentes de editar que não estamos acostumados, porém conseguimos identificar os nomes que já utilizamos em outras aulas e entender um pouco como as coisas deveriam funcionar. 

Modificamos para que alterasse as informações do ID selecionado pelo usuário e não apenas do ID 1

Utilizamos GET

# Atividade Crud

## Objetivo CRUD

CRUD é um acrônimo para as operações fundamentais em qualquer sistema que interage com um banco de dados: Create (Criar), Read (Ler), Update (Atualizar) e Delete (Apagar). O objetivo do nosso sistema é criar ele, fazer o login de usuários, armazenar eles em um banco de dados e ter as funções de atualização e exclusão dos cadastrados. 

## Tecnologias utilizadas

XAMPP
phpMyAdmin
VS code 

## Estrutura das pastas 

Pasta Public
index.php: página inicial do sistema.
home.php: tela principal onde os usuários cadastrados são exibidos.
update.php: responsável pela edição dos dados de um usuário.
confirmar_excluir.php: exibe uma tela de confirmação antes de excluir um usuário.
excluir.php: realiza a exclusão do usuário após a confirmação.
logout.php: encerra a sessão do usuário.

Pasta components guarda partes do sistema que são reutilizadas em várias páginas.

start.php: contém configurações iniciais compartilhadas.
table.php: gera a tabela com os usuários cadastrados.

Pasta infra contém arquivos relacionados à infraestrutura do sistema e ao banco de dados.

connect.php: realiza a conexão com o banco de dados.
script.sql: contém os comandos SQL utilizados para criar a estrutura do banco.

## Explicação funcionalidades

Create (Criar): permite cadastrar novos usuários no sistema e armazená-los no banco de dados.
Read (Ler): exibe os usuários cadastrados em uma tabela.
Update (Atualizar): permite alterar as informações de um usuário já cadastrado.
Delete (Excluir): permite remover um usuário do banco de dados.
Login: verifica se o usuário existe no banco de dados para permitir o acesso ao sistema.
Logout: encerra a sessão do usuário.

## Instruções para execução do sistema

Iniciar o XAMPP e ligar os serviços Apache e MySQL.
Abrir o phpMyAdmin.

## Melhorias implementadas

Adicionamos a funcionalidade de edição de usuários utilizando UPDATE.
Modificamos a edição para permitir alterar qualquer usuário através do ID informado.
Adicionamos botões de "Editar" e "Excluir" na tabela de usuários.
Colocamos confirmação antes de excluir.
Organizamos o projeto.

## Como a funcionalidade poderia ser implementada

A funcionalidade de UPDATE pode ser implementada utilizando UPDATE SET.

Para fazer isso é necessário criar um arquivo chamado update.php onde colocamos o comando.

## Arquivos que modificamos:

Alteramos o arquivo table.php para que a tabela também tivesse botões de "Editar" e "Excluir".
Fizemos o botão "Editar" da página table levar a outra tela que permite que o usuário escreva qual ID ele quer alterar e para quais informações

## Lógica necessária para realizar a exclusão

1. Pensamos no que usar tendo em mente as aulas de banco de dados com a professora Thalita.
2. Utilizamos outros métodos com páginas novas e novas funções.
3. Utilizamos o comando GET

## Pesquisas, testes e tentativas realizadas

Tivemos que fazer pesquisas da ideia por trás de CRUD e ver vídeos de pessoas ensinando, encontramos formas diferentes de editar que não estamos acostumados, porém conseguimos identificar os nomes que já utilizamos em outras aulas e entender um pouco como as coisas deveriam funcionar. 

Modificamos para que alterasse as informações do ID selecionado pelo usuário e não apenas do ID 1

Utilizamos GET

