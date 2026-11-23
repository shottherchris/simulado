<?php

use App\Produto;
include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");
$id = $_GET['id'];
$produto = Produto::buscarPorId($id);
?>
<main class="container">
    <h2 class="text-center">Editar Produto</h2>
    <form method="POST" action="/produto/action/action_produto.php?action=alterar&id=<?= $id ?>">
        Nome * : <input name="nome" type="text" value="<?= htmlspecialchars($produto->nome) ?>" class="form-control" required>
        Descrição : <input name="descricao" type="text" value="<?= htmlspecialchars($produto->descricao) ?>" class="form-control">
        Preço * : <input name="preco" type="number" step="0.01" min="0" value="<?= $produto->preco ?>" class="form-control" required>
        Quantidade * : <input name="quantidade" type="number" min="0" value="<?= $produto->quantidade ?>" class="form-control" required>
        Categoria : <input name="categoria" type="text" value="<?= htmlspecialchars($produto->categoria) ?>" class="form-control">
        <input type="submit" value="Alterar" class="btn btn-primary mt-2"> 
    </form>
</main>
<?php include("../includes/rodape.php"); ?>
