<?php

use App\Produto;
include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");
$produtos = Produto::listar();
?>
<main class="container">
    <h2 class="text-center">Lista de Produtos</h2>
    <a href='/produto/view/produto/cadastrar.php'>
    <button class='btn btn-success'>Novo Produto</button></a>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <?php
        foreach ($produtos as $produto) {
        ?>
            <tr>
            <td><?= $produto->id ?></td>
            <td><?= htmlspecialchars($produto->nome) ?></td>
            <td><?= htmlspecialchars($produto->descricao) ?></td>
            <td>R$ <?= number_format($produto->preco, 2, ',', '.') ?></td>
            <td><?= $produto->quantidade ?></td>
            <td><?= htmlspecialchars($produto->categoria) ?></td>
            <td><a href='/produto/view/produto/editar.php?id=<?= $produto->id ?>'>
            <button class='btn btn-primary'>Editar</button></a>
            <a href='/produto/action/action_produto.php?action=excluir&id=<?= $produto->id ?>'>
            <button class="btn btn-danger" 
            onclick="return confirm('Deseja realmente excluir esse Produto?');">Excluir</button></a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</main>
<?php include("../includes/rodape.php"); ?>
