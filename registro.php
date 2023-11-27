<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar - Oficina Rodriguez</title>
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
    <div class="darkBG">
        <div class="containerReg">
            <p>Registrar: </p>
            <form method="post" action="controller/contasController.php">
                <span class="material-symbols-outlined">person</span>
                <label for="nome">Nome:</label>
                <input id="nome" name="nome" type="text" required placeholder="Insira seu nome de usuário"/>

                <span class="material-symbols-outlined">mail</span>
                <label for="email">Email:</label>
                <input id="email" name="email" type="email" required placeholder="Insira seu email"/>

                <span class="material-symbols-outlined">lock</span>
                <label for="password">Password:</label>
                <span class="material-symbols-outlined eye" onclick="verSenha();">visibility_off</span>
                <input id="password" name="password" type="password" required placeholder="Insira uma senha"/>

                <span class="material-symbols-outlined">home</span>
                <label for="endereco">Endereco:</label>
                <input id="endereco" name="endereco" type="text" required placeholder="Insira seu endereço"/>

                <span class="material-symbols-outlined">call</span>
                <label for="fone">Telefone:</label>
                <input id="fone" name="fone" type="text" oninput="formatarTelefone(this)"  required placeholder="Insira seu numero de telefone"/>

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
    function formatarTelefone(input) {
      // Remove qualquer caractere que não seja número
      let numeroLimpo = input.value.replace(/\D/g, '');

      // Adiciona a máscara (xx) x xxxx-xxxx
      let formattedNumber = `(${numeroLimpo.substring(0, 2)})`;

      if (numeroLimpo.length > 2) {
        formattedNumber += ` ${numeroLimpo.substring(2, 3)}`;
      }

      if (numeroLimpo.length > 3) {
        formattedNumber += ` ${numeroLimpo.substring(3, 7)}`;
      }

      if (numeroLimpo.length > 7) {
        formattedNumber += `-${numeroLimpo.substring(7, 11)}`;
      }

      input.value = formattedNumber;
    }
    </script>
</body>
</html>