<?php
ob_start();
require ('./sheep_core/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThaiStore</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="header">
        <p class="logo">Developer Girl Store</p>
        <div class="cart">
            <i class="fa fa-shopping-cart"></i>
            <p>
                0
            </p>
        </div>
    </div>

    <div class="container">

        <div class="linha-produto">

            <form action="filtros/criar.php" method="post">
                <div class="corpo-produto">
                    <div class="img-produto">
                        <img src="assets/img/teclado.jpg" alt="" class="produtoMiniatura">
                    </div>
                    <div class="titulo">
                        <p>Teclado</p>
                        <h2>R$100,00</h2>
                        <input type="hidden" name="id_produto" value="">
                        <input type="hidden" name="valor" value="">
                        <button onclick="" type="submit" class="button" name="addCarrinho">Adicionar ao
                            carrinho</button>
                    </div>

                </div>
            </form>


            <form action="filtros/criar.php" method="post">
                <div class="corpo-produto">
                    <div class="img-produto">
                        <img src="assets/img/teclado1..jpg" alt="" class="produtoMiniatura">
                    </div>
                    <div class="titulo">
                        <p>Teclado</p>
                        <h2>R$100,00</h2>
                        <input type="hidden" name="id_produto" value="">
                        <input type="hidden" name="valor" value="">
                        <button type="submit" class="button" name="addCarrinho">Adicionar ao carrinho</button>
                    </div>

                </div>
            </form>


            <form action="filtros/criar.php" method="post">
                <div class="corpo-produto">
                    <div class="img-produto">
                        <img src="assets/img/teclado2.jpg" alt="" class="produtoMiniatura">
                    </div>
                    <div class="titulo">
                        <p>Teclado</p>
                        <h2>R$100,00</h2>
                        <input type="hidden" name="id_produto" value="">
                        <input type="hidden" name="valor" value="">
                        <button type="submit" class="button" name="addCarrinho">Adicionar ao carrinho</button>
                    </div>

                </div>
            </form>


            <form action="filtros/criar.php" method="post">
                <div class="corpo-produto">
                    <div class="img-produto">
                        <img src="assets/img/teclado3.jpg" alt="" class="produtoMiniatura">
                    </div>
                    <div class="titulo">
                        <p>Teclado</p>
                        <h2>R$100,00</h2>
                        <input type="hidden" name="id_produto" value="">
                        <input type="hidden" name="valor" value="">
                        <button type="submit" class="button" name="addCarrinho">Adicionar ao carrinho</button>
                    </div>

                </div>
            </form>
        </div>


        <div class="barra-lateral">
            <div class="topo-do-carrinho">
                <p>Meu carrinho</p>
            </div>
            <div class="item-carrinho">
                <div class="linha-da-imagem">
                    <img src="assets/img/teclado.jpg" alt="" class="img-carrinho">
                </div>
                <p>Teclado</p>
                <h2>R$100,00</h2>
                <form action="filtros/excluir.php">
                    <input type="hidden" name="id-produto" value="">
                    <button type="submit" style="border: none; cursor: pointer;">
                        <i class="fa fa-trash-o"></i>
                    </button>
                </form>
            </div>

            <div class="carrinho-vazio">
                <p>Seu carrinho está vazio!</p>
            </div>

            <div class="rodape">
                <h3>Total</h3>
                <h2>R$100,00</h2>
            </div>
        </div>

    </div>

</body>

</html>