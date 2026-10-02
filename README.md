# Sistema de Gestão de Estoque

## Objetivo

Sistema desenvolvido em PHP e MySQL para controlar os produtos
disponíveis no estoque de um mercado.

## Funcionalidades

- Cadastrar produtos
- Listar produtos
- Editar produtos
- Excluir produtos
- Validar dados
- Utilizar Prepared Statements
- Controlar quantidade em estoque
- Informar data de validade

## Tecnologias

- PHP
- MySQL
- MySQLi
- HTML
- CSS
- Git
- GitHub

## Requisitos

- XAMPP
- PHP
- MySQL
- Navegador
- Git

## Banco de dados

O banco utilizado pelo sistema é:

estoque_mercado

A tabela principal é:

produtos

## Como executar

1. Instalar o XAMPP.
2. Iniciar Apache e MySQL.
3. Colocar o projeto dentro da pasta htdocs.
4. Abrir o phpMyAdmin.
5. Executar o arquivo database/banco.sql.
6. Conferir a conexão em infra/conexao.php.
7. Acessar o sistema pelo navegador.

## CRUD

O sistema possui as operações:

- Create
- Read
- Update
- Delete

## Segurança

As operações com o banco de dados utilizam Prepared Statements,
evitando a concatenação direta de dados recebidos do usuário.