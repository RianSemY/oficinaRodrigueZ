<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home - Oficina RodrigueZ</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="icon" type="image/png" sizes="32x32" href="img/icon.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
    <script src="./js/script.js"></script>
    <form method="post" action="controller/loginController.php">
        <div class="login-container">
            <div id="login">
                <div class="loginModal-container">
                    <div class="closeModal-container">
                        <span id="closeModalBtn" onclick="closeModal()">&times;</span>
                    </div>
                    <div class="logoLogin">
                        <img src="#" id="temp"alt="">
                    </div>
                    
                    <span class="material-symbols-outlined iconeInput">mail</span>
                    <label for="email">Email:</label>
                    <?php
                    if(isset($_COOKIE['usuario'])){
                        echo'<input type="text" id="email" name="email" placeholder="Insira seu email" value="'.$_COOKIE['usuario'].'">';
                    }else{
                        echo'<input type="text" id="email" name="email" placeholder="Insira seu email">';
                    }
                    ?>
                    
                    <span class="material-symbols-outlined iconeInput">lock</span>
                    <label for="password">Senha:</label>
                    <span class="material-symbols-outlined" onclick="verSenha()" id="verSenha">visibility_off</span>
                    <input type="password" id="password" name="senha" placeholder="Insira sua senha">

                    <p class="criarConta">Não tem uma conta?<a href="registroCliente.php"> Crie uma!</a></p>
                    <input type="submit" id="loginBtn" value="Confirmar" name="submit">

                    <?php
                    @$cod = $_REQUEST['cod'];
                    @$admin = $_REQUEST['admin'];
                    if (isset($cod)) {
                        if ($cod == '171') {
                            echo ('<br><div class="incorrect">');
                            echo ('Verifique usuário ou senha.');
                            echo ('</div>');
                            echo('<script>abrirModal();</script>');
                        } else if ($cod == '172') {
                            echo ('<br><div class="sessaoExpirada">');
                            echo ('Sua sessão expirou. Realize o login novamente.');
                            echo ('</div>');
                            echo('<script>abrirModal();</script>');
                        }
                        else if ($cod == '170') {
                            echo ('<script>loginEfetuado();</script>');
                        }
                    }
                    if (isset($admin) && $admin == 'admin' ){
                        echo ('<script>loginEfetuado();</script>');
                    }
                    ?>
                </div>
            </div>
        </div>
</form>
        <header class="header">
            <div class="logo-container">
                <img src="img/logo.png" alt="logo" class="logo">
            </div>

            <button class="fazerLogin" onclick="abrirModal()">ENTRAR</button>
            <div class="nav-bar">
                <a href="./index.php?<?php if(isset($cod)){echo "cod=$cod";} if($admin == 'admin'){echo '&&admin=admin';}?>" class="nav-item">PÁGINA INICIAL</a>
                <a href="./portifolios.php?<?php if(isset($cod)){echo "cod=$cod";} if($admin == 'admin'){echo '&&admin=admin';}?>" class="nav-item">PORTIFÓLIOS</a>
                <a href="./servicos.php?<?php if(isset($cod)){echo "cod=$cod";} if($admin == 'admin'){echo '&&admin=admin';}?>" class="nav-item">SERVIÇOS</a>
                <?php
                if ($cod == '170' && $admin == 'admin'){
                    echo "<a href='./registrarCarro.php?cod=$cod&&admin=admin' class='nav-item'>MEU CARRO</a>";                    
                }else if($cod == '170'){
                    echo "<a href='./registrarCarro.php?cod=$cod' class='nav-item'>MEU CARRO</a>";                    
                }
                if($admin != 'admin'){
                    echo '<a href="#" class="nav-item">FALE CONOSCO</a>';
                    echo '<a href="#" class="nav-item">ABOUT US</a>';
                } else{
                    echo '<a href="gerenciarPessoas.php?admin=admin" class="nav-item">GERENCIAR PESSOAS</a>';
                }
                    ?>
            </div>
        </header>
        <div class="header-not-absolute"></div>