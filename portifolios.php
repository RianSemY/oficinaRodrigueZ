<?php
require './shared/header.php';
?>
    <div class="container">
        <?php   
            require_once './controller/portifoliosController.php';
            $portifoliosList = loadAll();
            foreach ($portifoliosList as $portifolio){
            
                echo '<div class="container-port">';
                    if($admin == 'admin'){
                        echo '<a href="./controller/portifoliosController.php?cod=del&&id='.$portifolio['id'].'" class="delete"><span class="material-symbols-outlined">delete</span></a>';
                        echo'<a class="edit"><span class="material-symbols-outlined">edit</span></a>';
                    }
                    echo '<img src="img/portifolios/'.$portifolio['imagem'].'" alt="'.$portifolio['nome'].'"/>';
                    echo '<h1>'.$portifolio['nome'].'</h1>';
                    echo '<p class="desc-port">'.$portifolio['descricao'].'</p>';
                echo '</div>';
            }
        ?>
        <?php
        if($admin == 'admin'){
            echo '<a href="gerenciarPortifolio.php" style="text-decoration:none;">';
                echo '<div class="container-port" style="background-color: lightgray;">';
                echo '<img src="img/add.png" alt="add" style="width: 500px;margin-top: 30px;"/>';
                echo '<p style="color: black;font-size: 40px;font-weight: bold;margin-top:80px;">Adicionar novo portifolio</p>';
                echo '</div>';
            echo '</a>';
        }
            ?>
    </div>
    
</body>
</html> 