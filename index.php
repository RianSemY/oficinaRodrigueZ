<?php
require './shared/header.php';
?>

            <div class="container">
            <?php
            for($i = 0; $i < 20 ; $i++){
                echo '<div class="pecas-container">';
                    echo '<div class="img-container">';
                        echo '<img class="image-peca" src="img/bk/bk-Uno.jpg" alt="bodykit-uno"/>';
                    echo '</div>';
                    echo '<h2 class="name-peca">Kit Completo Uno</h2>';
                    echo '<h3 class="preco-peca">R$ 199,90</h2>';
                    echo '<p class="desc-peca">Um kit essencial para pessoas que têm um uninho simples na garagem e quer turbiná-lo como toda a velocidade da Oficina RodrigueZ</p>';
                echo '</div>';
            }
                
            ?>
            </div>
        <script src="./js/script.js"></script>
    </body>
</html>
