<?php
include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");
?>
<main class="container">
    <h2 class="text-center">Cadastrar Produto</h2>
    <form method="POST" action="/produto/action/action_produto.php?action=cadastrar">
        Nome * : <input name="nome" type="text" class="form-control" required>
        Descrição : <input name="descricao" type="text" class="form-control">
        Preço * : <input name="preco" type="number" step="0.01" min="0" class="form-control" required>
        Quantidade * : <input name="quantidade" type="number" min="0" class="form-control" required>
        Categoria : <input name="categoria" type="text" class="form-control">
        <input type="submit" value="Cadastrar" class="btn btn-primary mt-2"> 
    </form>
</main>
<?php include("../includes/rodape.php"); ?>
