<?php
/*
if($_POST){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $lembrar = $_POST['lembrar'];
    
    $dados = array('email'=>'nego@gmail.com','senha'=>'asasas');
    if($email == $dados['email'] && $senha == $dados['senha']){
        session_start();
        $_SESSION['login'] = $email;
        if($lembrar == true){
            setcookie("usuario", $email, time()+4000, "/", "", false, true);
            header('location:../portifolios.php');
        } else{
            header('location:../portifolios.php');
        }
    } else{
        header('location:../index.php?cod=171');
    }
} else{
    header('location:../index.php?cod=172');
}*/
?>
<?php

if($_POST){
    @$email = $_POST['email'];
    @$senha = $_POST['senha'];
    @$cookie = $_POST['cookie'];
    
    if(isset($email) and isset($senha)){
        require_once'../model/contasModel.php';
        
        $conta = new clientesModel;
        $conta->setEmail($email);
        $conta->setSenha($senha);
        
        $total = $conta->verificarlogin();
        
        if($total == 1){
            $cont = $conta->takeId();
            foreach ($cont as $con){
                $id = $con['id'];
            }
            session_start();
            $_SESSION['login'] = $id;

            if($cookie == true){
                setcookie("Netflix",$email,time()+3600,"/");
            }

            header ('location:../index.php?cod=170');

        }else{
            header ('location:../index.php?cod=171');
        }    
    }else{
        header ('location:../index.php?cod=171');
    }  
    
}else{
    header ('location:../index.php?cod=172');
}
