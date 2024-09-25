<?php
ob_start();
require ('./sheep_core/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThaiStore - Developer Girl</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php

    $cart = new Ler();
    $cart->Leitura('carrinho');

    ?>



    <div class="header">
        <p class="logo">Developer Girl Store</p>
        <div class="cart">
            <i class="fa fa-shopping-cart"></i>
            <p>
                <?= $cart->getContaLinhas() > 0 ? $cart->getContaLinhas() : 0 ?>
            </p>
        </div>
    </div>

    <div class="container">

        <div class="linha-produto">
            <?php
            $ler = new Ler();
            $ler->Leitura('produtos', 'ORDER BY data DESC');
            if ($ler->getResultado()) {
                foreach ($ler->getResultado() as $produto) {
                    $produto = (object) $produto;
                    ?>

                    <form action="filtros/criar.php" method="post">
                        <div class="corpo-produto">
                            <div class="img-produto">
                                <img src="<?= HOME ?>/uploads/<?= $produto->capa ?>" alt="<?= $produto->nome ?>"
                                    class="produtoMiniatura">
                            </div>
                            <div class="titulo">
                                <p><?= $produto->nome ?></p>
                                <h2>R$ <?= $produto->valor ?></h2>
                                <input type="hidden" name="id_produto" value="<?= $produto->id ?>">
                                <input type="hidden" name="valor" value="<?= $produto->valor ?>">
                                <button onclick="" type="submit" class="button" name="addCarrinho">Também quero!</button>
                            </div>

                        </div>
                    </form>
                    <?php
                }
            }
            ?>

        </div>


        <div class="barra-lateral">
            <div class="topo-do-carrinho">
                <p>Lista de Desejos</p>
            </div>

            <?php

            if ($cart->getContaLinhas() > 0) {
                foreach ($cart->getResultado() as $item) {
                    $ler = new Ler();
                    $ler->Leitura('produtos', "WHERE id = :id ", "id={$item['id_produto']}");
                    if ($ler->getResultado()) {
                        foreach ($ler->getResultado() as $produto) {
                            $produto = (object) $produto;

                            ?>
                            <div class="item-carrinho">
                                <div class="linha-da-imagem">
                                    <img src="<?= HOME ?>/uploads/<?= $produto->capa ?>" alt="" class="img-carrinho">
                                </div>
                                <p><?= $produto->nome ?></p>
                                <h2>R$<?= $produto->valor ?></h2>
                                <form action="filtros/excluir.php">
                                    <input type="hidden" name="id-produto" value="<?= $produto->id ?>">
                                    <button type="submit" style="border: none; cursor: pointer;">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </form>
                            </div>

                            <?php
                        }
                    }
                }
            } else {
                ?>
                <?php 
                $ler = new Ler
                ?>
                <div class="carrinho-vazio">
                    <p>Seu carrinho está vazio!</p>
                </div>
                <?php
            }
            ?>


        </div>

</body>

</html>