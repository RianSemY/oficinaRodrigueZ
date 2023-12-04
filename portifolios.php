<?php
require './shared/header.php';
?>
    <style>.header{position: absolute;}</style>
    <div class="container">
        <?php   
            require_once './controller/portifoliosController.php';
            $portifoliosList = loadAll();
            foreach ($portifoliosList as $portifolio){
                echo
                '<div class="container-port">
                    <img src="'.$portifolio['imagem'].'" alt="'.$portifolio['nome'].'"/>
                    <h1>'.$portifolio['nome'].'</h1>
                    <p class="desc-port">'.$portifolio['descricao'].'</p>
                </div>';
            }

        ?>
        
       
    </div>
    
</body>
</html> 