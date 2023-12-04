<?php

if ($_POST) {
    @$email = $_POST['email'];
    @$senha = $_POST['password'];
    @$fone = $_POST['fone'];
    @$nome = $_POST['nome'];
    @$funcao = $_POST['funcao'];
    
    
    if (isset($email) and isset($senha) and isset($fone) and isset($nome) and isset($funcao)) {
        require_once '../model/funcionariosModel.php';
        
        $funcionario = new funcionariosModel();
        $funcionario->setEmail($email);
        $funcionario->setFone($fone);
        $funcionario->setSenha($senha);
        $funcionario->setNome($nome);
        $funcionario->setFuncao($funcao);
        
        $funcionario->insert();
        header('location:../index.php?cod=170');
    }else{
        header('location:../index.php?cod=172');
    }
} else {
    header('location:../index.php?cod=172');
}