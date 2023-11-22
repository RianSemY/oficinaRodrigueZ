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
        <div class="login-container">
            <div id="login">
                <div class="loginModal-container">
                    <div class="closeModal-container">
                        <span id="closeModalBtn">&times;</span>
                    </div>
                    <div class="logoLogin">
                        <img src="#" id="temp"alt="">
                    </div>
                    <span class="material-symbols-outlined iconeInput">lock</span>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" placeholder="Insira seu email">
                    
                    <span class="material-symbols-outlined iconeInput">mail</span>
                    <label for="password">Senha:</label>
                    <span class="material-symbols-outlined" onclick="verSenha()" id="verSenha">visibility_off</span>
                    <input type="password" id="password" name="password" placeholder="Insira sua senha">

                    <input type="submit-login" id="loginBtn" value="Confirmar" name="submit">
                </div>
            </div>
        </div>
        <header class="header">
            <div class="logo-container">
                <img src="img/logo.png" alt="logo" class="logo">
            </div>

            <button class="fazerLogin" onclick="abrirModal()">FAZER LOGIN</button>
            <div class="nav-bar">
                <a href="./index.php" class="nav-item">PÁGINA INICIAL</a>
                <a href="./portifolios.php" class="nav-item">PORTIFÓLIOS</a>
                <a href="./servicos.php" class="nav-item">SERVIÇOS</a>
                <a href="#" class="nav-item">FALE CONOSCO</a>
                <a href="#" class="nav-item">ABOUT US</a>
            </div>
        </header>
        <div class="header-not-fixed"></div>