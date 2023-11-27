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

                    <p class="criarConta">Não tem uma conta?<a href="registro.php"> Crie uma!</a></p>
                    <input type="submit" id="loginBtn" value="Confirmar" name="submit">

                    <?php
                    @$cod = $_REQUEST['cod'];
                    if (isset($cod)) {
                        if ($cod == '171') {
                            echo ('<br><div class="incorrect">');
                            echo ('Verifique usuário ou senha.');
                            echo ('</div>');
                            echo('<script>abrirModal();</script>');
                        } else if ($cod == '172') {
                            echo ('<br><div class="alert alert-warning">');
                            echo ('Sua sessão expirou. Realize o login novamente.');
                            echo ('</div>');
                            echo('<script>abrirModal();</script>');
                        }
                        else if ($cod == '170') {
                            echo ('<script>loginEfetuado();</script>');
                        }

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
                <a href="./index.php" class="nav-item">PÁGINA INICIAL</a>
                <a href="./portifolios.php" class="nav-item">PORTIFÓLIOS</a>
                <a href="./servicos.php" class="nav-item">SERVIÇOS</a>
                <a href="#" class="nav-item">FALE CONOSCO</a>
                <a href="#" class="nav-item">ABOUT US</a>
            </div>
        </header>
        <div class="header-not-fixed"></div>