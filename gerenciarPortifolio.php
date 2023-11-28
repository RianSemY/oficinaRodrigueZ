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
        input[type="text"]{
            border-bottom: solid gray 3px; 
            transition: .3s;
        }
        input[type="text"]:focus{
            border-bottom: solid red 3px; 
        }
        input[type="file"]{
            cursor: pointer;

            
            margin-top: 32px;
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
        
    </style>
</head>

<?php
    if(isset($_FILES['upload'])){
        var_dump($_FILES['upload']);
        echo "arquivo adicionado";
    }
?>
<body>
    <div class="darkBG">
        <div class="containerReg">
            <p>Inserir  portifólio: </p>
            <form method="post" action="controller/portifoliosController.php">
                <span class="material-symbols-outlined">directions_car</span>
                <labeL for="nome">Insira o nome do portifólio: </label>
                <input type="text" name="nome" id="nome">
                
                <span class="material-symbols-outlined">description</span>
                <labeL for="nome">Insira a descrição do portifólio: </label>
                <input type="text" name="desc" id="desc">

                <span class="material-symbols-outlined">upload_file</span>
                <input type="file" name="upload">

                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>
