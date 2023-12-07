<?php
require './shared/header.php';
?>
<?php
session_start(); 
$carrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : array();
?>
            <div class="loja">
                <div class="containerCat">

                <?php   
                require_once './controller/pecasController.php';
                $pecasList = loadAll();
                foreach ($pecasList as $peca){
                    echo '<div class="pecas-container">';
                    echo '<div class="shadow-box"></div>';
                        echo '<form action="carrinho.php" method="post">';
                        if($admin != 'admin'){
                            echo '<button type="submit" class="addMarket"><span class="material-symbols-outlined">shopping_cart</span></button>';
                        } else{
                            echo '<a href="./controller/pecasController.php?cod=del&&id='.$peca['id'].'" class="delete"><span class="material-symbols-outlined">delete</span></a>';
                            echo '<a href="#" class="edit"><span class="material-symbols-outlined">edit</span></a>';
                        }
                            echo '<div class="img-container">';
                                echo '<img class="image-peca" src="img/bk/'.$peca['imagem'].'" alt="'.$peca['nome'].'"/>';
                            echo '</div>';
                            
                            echo '<h2 class="name-peca">'.$peca['nome'].'</h2>';
                            echo '<h3 class="preco-peca">R$'.$peca['preco'].'</h2>';
                            echo '<p class="desc-peca">'.$peca['descricao'].'</p>';

                            echo '<input type="hidden" name="idPeca[]" value="'.$peca['id'].'">';
                            echo '<input type="hidden" name="nomePeca[]" value="'.$peca['nome'].'">';
                            echo '<input type="hidden" name="precoPeca[]" value="'.$peca['preco'].'">';
                            echo '<input type="hidden" name="imagemPeca[]" value="'.$peca['imagem'].'">';
                        echo '</form>';
                    echo '</div>';
                }
                ?>
                </form>
                    <div id="carrinho">
                        <div class="headerCarrinho">Meu carrinho</div>
                        
                        <?php
                        $temItens = false;
                        $total = 0;
                        foreach ($carrinho as $item){
                            
                            echo '<div class="itemCarrinho">';
                                echo '<div class="carrinhoImg">';
                                    echo'<img src="img/bk/'.$item['imagem'].'.jpg" alt="">';
                                echo'</div>';
                                echo'<p>'.$item['nome'].'</p>';
                                echo'<h2>R$ '.$item['preco'].'</h2>';
                                echo'<form action="remCarrinho.php" method="post">';
                                    echo'<input type="hidden" name="id" value="'.$item['id'].'">';
                                    echo'<button class="trash" type="submit"><span class="material-symbols-outlined">delete</span></button>';
                                echo'</form>';
                            echo '</div>';
                            $temItens = true;
                            $total += $item['preco'];
                            }
                            if(!$temItens){
                            echo'<div class="carrinhoVazio">Seu carrinho está vazio!</div>';
                            }
                                echo'<br>';
                                echo'<div class="footerCarrinho">';
                                echo'<h3>Total: </h3>';
                                echo '<h2>R$ ' . number_format($total, 2, ',', '.') . '</h2>';
                            echo '</div>';
                            echo '<div class="btnCarrinhoContainer">';
                                echo '<button type="submit">Finalizar compra</button>';
                            echo '</div>';
                        ?>
                    </div>
                </div>
            </div>
            <script>
            window.addEventListener('scroll', function () {
                var scrollY = window.scrollY || window.pageYOffset;

                var meuElemento = document.getElementById('carrinho');
                if (scrollY > 120) {
                    meuElemento.style.marginTop = "30px";
                    meuElemento.style.position = "fixed";
                } else{
                    meuElemento.style.marginTop = "200px";
                    meuElemento.style.position = "absolute";
                }
            });
            </script>
    </body>
</html>
