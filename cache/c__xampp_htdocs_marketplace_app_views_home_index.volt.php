<!DOCTYPE html>
<html>
<head>
    <title>MarketPLace Phalcon</title>
</head>
<body>
<div class="container">
    <h1>Lista de produtos</h1>
    <?php foreach ($produtos as $produto) { ?>
        <hr>
        <h4>Nome: <?= $produto->nome ?></h4>
        <h4>Preço:<bold>R$</bold><?= $produto->preco ?></h4>
        <a href="<?= $this->url->get('produto/ver/') ?><?= $produto->id ?>"><button class="btn btn-danger">Visualizar</button></a>
    <?php } ?>
    <h2>Inserir produtos</h2>

</div>

</body>
</html>
