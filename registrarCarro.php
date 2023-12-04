<?php
require './shared/header.php';
?>

    <div class="container-regcarro">
        <form method="POST" action="controller/carrosController.php">
            <div class="insertCar">
                <span id="Iplaca" class="material-symbols-outlined regCarIcon">web_asset</span>
                <label for="placa">Placa:</label>
                <input id="placa" name="placa" type="text" placeholder="Insira a placa do seu carro">
                <br>

                <span id="Iano" class="material-symbols-outlined regCarIcon">calendar_month</span>
                <label for="ano">Ano:</label>
                <input id="ano" name="ano" type="text" placeholder="Insira a ano do seu carro">
                <br>
            
                <span id="Imarca" class="material-symbols-outlined regCarIcon">sell</span>
                <label for="marca">Marca:</label>
                <input id="marca" name="marca" type="text" placeholder="Insira a marca do seu carro">
                <br>

                <span id="Imodelo" class="material-symbols-outlined regCarIcon">directions_car</span>
                <label for="modelo">Modelo:</label>
                <input id="modelo" name="modelo" type="year" placeholder="Insira a modelo do seu carro">
                <br>

                <span id="Icor" class="material-symbols-outlined regCarIcon">brush</span>
                <label for="cor">Cor:</label>
                <input id="cor" name="cor" type="text" placeholder="Insira a cor do seu carro">
            </div>
            <div class="submitCar">
                <input type="submit" value="Enviar carro">
                <a id="editar" href="#">Editar carro</a>
                <a id="remover" href="#">Remover carro</a>
            </div>
        </form>
    </div>
</body>
</html>
