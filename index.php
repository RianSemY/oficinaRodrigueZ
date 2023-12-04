<?php
require './shared/header.php';
?>

            <div class="container">
            <?php   
            require_once './controller/pecasController.php';
            $pecasList = loadAll();
            foreach ($pecasList as $peca){
                echo '<div class="pecas-container">';
                echo '<div class="shadow-box"></div>';
                    echo '<div class="img-container">';
                        echo '<img class="image-peca" src="'.$peca['imagem'].'" alt="'.$peca['nome'].'"/>';
                    echo '</div>';
                    echo '<h2 class="name-peca">'.$peca['nome'].'</h2>';
                    echo '<h3 class="preco-peca">R$'.$peca['preco'].'</h2>';
                    echo '<p class="desc-peca">'.$peca['descricao'].'</p>';
                echo '</div>';
            }
                
            ?>
            </div>
    </body>
</html>
