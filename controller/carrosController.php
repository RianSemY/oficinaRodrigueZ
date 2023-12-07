<?php

if ($_POST) {
    @$placa = $_POST["placa"];
    @$modelo = $_POST["modelo"];
    @$ano = $_POST["ano"];
    @$marca = $_POST["marca"];
    @$cor = $_POST["cor"];

    session_start();
        $idcliente = $_SESSION["login"];
    if (isset($placa) and isset($modelo) and isset($ano) and isset($marca) and isset($cor)) {
        require_once '../model/carrosModel.php';
        $carro = new carrosModel();
        $carro->setPlaca($placa);
        $carro->setModelo($modelo); 
        $carro->setAno($ano);
        $carro->setCor($cor);
        $carro->setMarca($marca);
        session_start();
        $idcliente = $_SESSION["login"];
        $carro->setIdcliente($idcliente);

        $carro->insert();
        header('location:../registrarCarro.php?cod=170');
    } else{
        header('location:../registrarCarro.php?cod=170');
    }
}
else if ($_REQUEST) {
    if (isset($_REQUEST['cod']) && $_REQUEST['cod'] == 'del') {
        require_once '../model/carrosModel.php';
        $carro = new carrosModel();
        if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
            $carro->setId($_REQUEST['id']);
            $total = $carro->delete();
            if ($total == 1) {
                header('location:../registrarCarro.php?cod=170');
            }
        }
    }
} else {
    loadAll();
}
    /*

    if (empty($carro->getId())) {
        $total = $carro->insert();
    } else {
        $total = $carro->update();
    }

    if ($total == 1) {
        if (empty($carro->getId())) {
            header('location:../registrarCarro.php?cod=170');
        } else {
                header('location:../registrarCarro.php?cod=170');
        }
    } else {
        header('location:../registrarCarro.php?cod=error');
    }
} 
else if ($_REQUEST) {
    if (isset($_REQUEST['cod']) && $_REQUEST['cod'] == 'del') {
        require_once '../model/carrosModel.php';
        $carro = new carrosModel();
        if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
                $carro->setId($_REQUEST['id']);
                $total = $carro->delete();
            if ($total == 1) {
                header('location:../registrarCarro.php?cod=170');
            }
        }
    }
} else { loadAll(); }
*/

function loadAllCarros() {
    require_once './model/carrosModel.php';
    $carros = new carrosModel();
    $carrosList = $carros->loadAll();
    return $carrosList;
}
function loadDono(){
    
    require_once './model/carrosModel.php';
    $carros = new carrosModel();
    
    $donosList = $carros->loadDono($idDono);
    return $donosList;
}
function loadById($id) {
    require_once './model/carrosModel.php';
    $carros = new carrosModel();
    $carros->loadById($id);
    return $carros;
}
