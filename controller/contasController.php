<?php

if ($_POST) {
    @$email = $_POST['email'];
    @$senha = $_POST['password'];
    @$fone = $_POST['fone'];
    @$endereco = $_POST['endereco'];
    @$nome = $_POST['nome'];
    
    if (isset($email) and isset($senha) and isset($fone) and isset($endereco) and isset($nome)) {
        require_once '../model/contasModel.php';
        
        $conta = new clientesModel();
        $conta->setEmail($email);
        $conta->setFone($fone);
        $conta->setSenha($senha);
        $conta->setNome($nome);
        $conta->setEndereco($endereco);
        
        $conta->insert();
        header('location:../index.php?cod=170');
    }else{
        header('location:../index.php?cod=172');
    }
} else {
    header('location:../index.php?cod=172');
}