<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar funcionário - Oficina Rodriguez</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oxanium:wght@300;400;500;600;700;800&display=swap');
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            outline: none;
            font-family: 'Oxanium', cursive;
        }
        body{
            width: 100%;
            height: 100vh;
            background: url('./img/bgRegister.jpg') center no-repeat;
            background-size: cover;
        }
        body div{
            background-color: white;
            width: 600px;
            height: 100vh;
            display: flex;
            align-items: center;
            padding: 20px;
        }
        body div input{
            flex-direction: column; 
            width: 100%;
            height: 50px;
            border: none;
            transition: border 0.1s;
            padding-left: 35px;  
            font-size: 15px;
            margin-bottom: 20px;
        }
        body div input:focus{
            border-bottom: solid red 3px; 
        }
        body div input[type="submit"]{
            background-color: red;
            color: white;
            width: 300px;
            border-radius: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
            margin: auto;
            margin-top: 30px;
            transition: 1s;
            font-size: 18px;
            font-weight: bold;
            padding: 0;
        }
        body div input[type="submit"]:hover{
            cursor: pointer;
            border: 2px solid black;
            transition: 0.2s;
        }
        body div input[type="submit"]:active{
            background-color: darkred;
        }
        .material-symbols-outlined{
            position: absolute;
            margin-top: 31px;
            margin-left: 3px;
        }
        p{
            position: absolute;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 600px;
        }
        .darkBG{
            background-color: rgba(0,0,0,0.6);
            z-index: 0;
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .eye{
            position: absolute;
            margin-top: 15px;
            margin-left: 525px;
            cursor: pointer;
            display: flex;
        }
    </style>
</head>
<body>
    <?php
    @$admin = $_REQUEST['admin'];
    if($admin != 'admin'){
        header('location:index.php?cod=172');
    }
    ?>
    <div class="darkBG">
        <div class="containerReg">
            <p>Registrar funcionário: </p>
            <form method="post" action="controller/funcionariosController.php">
                <span class="material-symbols-outlined">person</span>
                <label for="nome">Nome:</label>
                <input id="nome" name="nome" type="text" required placeholder="Insira o nome de usuário do seu funcionário"/>

                <span class="material-symbols-outlined">mail</span>
                <label for="email">Email:</label>
                <input id="email" name="email" type="email" required placeholder="Insira o email do seu funcionário"/>

                <span class="material-symbols-outlined">lock</span>
                <label for="password">Password:</label>
                <span class="material-symbols-outlined eye" onclick="verSenha();">visibility_off</span>
                <input id="password" name="password" type="password" required placeholder="Insira a senha do seu funcionário"/>

                <span class="material-symbols-outlined">psychology</span>
                <label for="funcao">Função do funcionário:</label>
                <input id="funcao" name="funcao" type="text" required placeholder="Insira o endereço do seu funcionário"/>

                <span class="material-symbols-outlined">call</span>
                <label for="fone">Telefone:</label>
                <input id="fone" name="fone" type="text"  required placeholder="Insira o numero de telefone do seu funcionário"/>

                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <script>
        function verSenha(){
        let visibleOrNot = document.querySelector('.eye');
        let inputSenha = document.getElementById('password');

        if(visibleOrNot.innerHTML.trim().toLowerCase() === "visibility_off"){
            visibleOrNot.innerHTML = "visibility";            
            inputSenha.type = 'text';
        }
        else if(visibleOrNot.innerHTML.trim().toLowerCase() === "visibility"){
            visibleOrNot.innerHTML = "visibility_off";            
            inputSenha.type = 'password';
        }
    }

    </script>
</body>
</html>