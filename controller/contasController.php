<?php

if ($_POST) {
    @$email = $_POST['email'];
    @$senha = $_POST['password'];
    @$fone = $_POST['fone'];
    @$endereco = $_POST['endereco'];
    @$nome = $_POST['nome'];
    if (isset($email) and isset($senha) and isset($fone) and isset($endereco) and isset($nome)) {
        require_once '../model/contasModel.php';
        
        $clientes = new clientesModel();
        $clientes->setEmail($email);
        $clientes->setFone($fone);
        $clientes->setSenha($senha);
        $clientes->setNome($nome);
        $clientes->setEndereco($endereco);
        
        $clientes->insert();
        header('location:../index.php?cod=170');
    }else{
        header('location:../index.php?cod=172');
    }
} else {
        
}

function loadAll() {
    require_once './model/contasModel.php';
    $clientes = new clientesModel();
    $clientesList = $clientes->loadAll();

    return $clientesList;
}