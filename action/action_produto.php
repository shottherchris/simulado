<?php

use App\Produto;
require('../vendor/autoload.php');
$action = $_GET['action'];
$produto = new Produto();
switch($action){
    case 'cadastrar':
        $produto->nome = $_POST['nome'];
        $produto->descricao = $_POST['descricao'];
        $produto->preco = $_POST['preco'];
        $produto->quantidade = $_POST['quantidade'];
        $produto->categoria = $_POST['categoria'];
        $produto->cadastrar();
        
        header('location: /produto/view/produto/listar.php');
    break;    
    case 'alterar':
        $produto = Produto::buscarPorId($_GET['id']);
        $produto->nome = $_POST['nome'];
        $produto->descricao = $_POST['descricao'];
        $produto->preco = $_POST['preco'];
        $produto->quantidade = $_POST['quantidade'];
        $produto->categoria = $_POST['categoria'];
        $produto->alterar();
        header('location: /produto/view/produto/listar.php');
        break;
    case 'excluir':
        $produto->id = $_GET['id'];
        $produto->excluir();
        header('location: /produto/view/produto/listar.php');
        break;
}
