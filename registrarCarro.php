    <?php
require './shared/header.php';

?>

    <div class="container-regcarro">
        <form method="POST" action="controller/carrosController.php">
            <div class="insertCar">
            <?php
                if ($_REQUEST) {
                    $cod = $_REQUEST['cod'];
                    if($cod == 'success'){
                        echo '<p class="sucess">Carro enviado com sucesso</p>';
                    } else if($cod == 'sucess'){
                        echo '<p class="error">Erro ao enviar carro</p>';
                    }else if ($cod == 'error') {
                        echo '<div class="alert alert-danger">';
                        echo '<span>Erro:</spam>Ocorreu um erro. Tente mais tarde.';
                        echo '</div>';
                    } else if ($cod == 'edit') {
                        require_once './controller/carrosController.php';
                        $id = $_REQUEST['id'];
                        echo $id;
                        $carroObject = loadById($id);
                    }
                }
                ?>
                <input type="hidden" name="id" value="<?php echo @(isset($carroObject)? $carroObject->getId():'') ?>">

                <span id="Iplaca" class="material-symbols-outlined regCarIcon">web_asset</span>
                <label for="placa">Placa:</label>
                <input id="placa" name="placa" value="<?php echo @(isset($carroObject)? $carroObject->getPlaca():'') ?>" type="text" placeholder="Insira a placa do seu carro">
                <br>

                <span id="Iano" class="material-symbols-outlined regCarIcon">calendar_month</span>
                <label for="ano">Ano:</label>
                <input id="ano" name="ano" value="<?php echo @(isset($carroObject)? $carroObject->getAno():'') ?>" type="text" placeholder="Insira a ano do seu carro">
                <br>
            
                <span id="Imarca" class="material-symbols-outlined regCarIcon">sell</span>
                <label for="marca">Marca:</label>
                <input id="marca" name="marca" value="<?php echo @(isset($carroObject)? $carroObject->getMarca():'') ?>" type="text" placeholder="Insira a marca do seu carro">
                <br>

                <span id="Imodelo" class="material-symbols-outlined regCarIcon">directions_car</span>
                <label for="modelo">Modelo:</label>
                <input id="modelo" name="modelo" value="<?php echo @(isset($carroObject)? $carroObject->getModelo():'') ?>" type="year" placeholder="Insira a modelo do seu carro">
                <br>

                <span id="Icor" class="material-symbols-outlined regCarIcon">brush</span>
                <label for="cor">Cor:</label>
                <input id="cor" name="cor" value="<?php echo @(isset($carroObject)? $carroObject->getCor():'') ?>" type="text" placeholder="Insira a cor do seu carro">
                
            </div>
            <div class="submitCar">
                <input type="submit" value="Enviar carro">
                <a id="editar" href="#">Editar carro</a>

                <?php
                
                
                
                ?>
            </div>
        </form>
    </div>
</body>
</html>
