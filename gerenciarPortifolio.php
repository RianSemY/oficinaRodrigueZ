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
            display: flex;
            flex-direction: column;
        }
        body div input, textarea{
            flex-direction: column; 
            width: 100%;
            height: 50px;
            border: none;
            transition: border 0.1s;
            padding-left: 35px;  
            font-size: 15px;
            margin-bottom: 20px;
        }

        input[type="text"], textarea{
            border-bottom: solid gray 3px; 
            transition: .3s;
        }
        textarea:focus,
        input[type="text"]:focus{
            border-bottom: solid red 3px; 
        }
        input[type="file"]{
            cursor: pointer;
            margin-top: 32px;
            height: 25px;
            text-align: center;
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
            pointer-events: none;
        }
        p{
            margin-top: 40px;
            font-size: 24px;
            font-weight: bold;
        }
        .darkBG{
            background-color: rgba(0,0,0,0.7);
            z-index: 0;
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 0;
        }

        #desc{
            word-wrap: break-word;
            padding-top: 15px;
        }
        #desc:focus{
            height: 150px;
        }
        #upload{
            padding-left: 30px;
        }
        .containerReg .error{
            background-color: red;
            color: white;
            padding: 5px;
            border-radius: 5px;
            margin-bottom: 50px;;
        }
        .containerReg .sucess{
            background-color: green;
            color: white;
            padding: 5px;
            border-radius: 5px;
            margin-bottom: 50px;;
        }
        .backBtn{
            text-decoration: none;
            color: black;
            font-size: 35px;
            height: 35px;
            width: 35px;           
            display: flex;
            justify-content: center;
            align-items: center;
            border: 3px solid black;
            border-radius: 100px;
            position: absolute;
            transition: .3s;
            margin-right: 500px;
            margin-top: 10px;
        }
        .backBtn:hover{
            border: none;
            color: white;
            background-color: black;
        }
        
    </style>
</head>

<body>
    <div class="darkBG">
        <div class="containerReg">
            <?php
            @$admin = $_REQUEST['admin'];
            if(!isset($admin) || $admin != 'admin'){
                header('location: portifolios.php');   
            }
            @$cod = $_REQUEST['cod'];
            if (isset($cod)){
                if($cod == 'error'){
                    echo '<p class="error">Erro ao enviar portifólio</p>';
                } else if($cod == 'sucess'){
                    echo '<p class="sucess">Portifólio enviado com sucesso</p>';
                } else if($cod == 'edit'){
                    require_once 'controller/portifoliosController.php';
                }
            }
            ?>
            <a class="backBtn" href="portifolios.php?admin=admin">🠔</a>
            <p>Inserir  portifólio: </p>
            <form method="post" action="controller/portifoliosController.php" enctype="multipart/form-data">
                <span class="material-symbols-outlined">directions_car</span>
                <labeL for="nome">Nome do portifólio: </label>
                <input type="text" name="nome" id="nome" required placeholder="Insira o nome do portifólio">
                
                <span class="material-symbols-outlined">description</span>
                <labeL for="nome">Descrição do portifólio: </label>
                <textarea spellcheck="false" name="descricao" id="desc" required placeholder="Insira a descrição do portifólio"></textarea>

                <span class="material-symbols-outlined">upload_file</span>
                <input type="file" id="upload" name="upload" required accept=".jpg, .jpeg, .png">
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>
