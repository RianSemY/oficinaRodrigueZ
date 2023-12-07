<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar peças - Oficina Rodriguez</title>
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
            width: 700px;
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
        textarea{
            padding: 0;
            padding-left: 35px;  
        }

        input[type="text"], textarea, input[type="number"]{
            border-bottom: solid gray 3px; 
            
            transition: .3s;
        }
        textarea:focus,
        input[type="text"]:focus,
        input[type="number"]:focus{
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
            pointer-events: none;
            margin-top: 25px;
            margin-right: 223px;
            font-size: 21px;
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
            border-radius: 5px;
        }
        #desc:focus{
            height: 150px;
            background-color: #f7f5f5;
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
        a{
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
        a:hover{
            border: none;
            color: white;
            background-color: black;
        }
        .formControl{
            width: 300px;
            height: 75px;
        }
        form{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        label{
                margin-bottom: 10px;
                display: flex;
            }
        #upload{
            display:flex;
            justify-content: center;
            width: 400px;
        }
        #desc{
            width: 300px;
            margin-top: 50px;
        }
        #Ldesc{
            margin-top: 70px;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="darkBG">
        <div class="containerReg">
            <?php
            @$cod = $_REQUEST['cod'];
            if (isset($cod)){
                if($cod == 'error'){
                    echo '<p class="error">Erro ao enviar peça</p>';
                } else if($cod == 'sucess'){
                    echo '<p class="sucess">Peça enviada com sucesso</p>';
                } else if($cod == 'edit'){
                    require_once 'controller/pecasController.php';       
                }
            }
            
            ?>
            <a href="portifolios.php">🠔</a>
            <p>Inserir  peça: </p>
            <form method="post" action="controller/pecasController.php" enctype="multipart/form-data">
                <div class="formControl">
                    <span class="material-symbols-outlined">badge</span>
                    <labeL for="nome">Nome da peça: </label>
                    <input type="text" name="nome" id="nome" value="" value="" required placeholder="Insira o nome da peça">
                </div>

                <div class="formControl">
                    <span class="material-symbols-outlined">format_list_bulleted</span>
                    <labeL for="tipo">Tipo da peça: </label>
                    <input type="text" name="tipo" id="tipo" value="" required placeholder="Insira o tipo da peça">
                </div>

                <div class="formControl">
                    <span class="material-symbols-outlined">inventory_2</span>
                    <labeL for="estoque">Número de estoque da peça: </label>
                    <input type="number" name="estoque" id="estoque" value="" required placeholder="Insira o número de estoque da peça">
                </div>

                <div class="formControl">
                    <span class="material-symbols-outlined">credit_card</span>
                    <labeL for="preco">Preco da peça: </label>
                    <input type="text" name="preco" id="preco" value="" required placeholder="Insira o preco da peça">
                </div>
                
                <labeL id="Ldesc" for="descricao">Descrição da peça: </label>
                <textarea spellcheck="false" name="descricao" id="desc" value="" required placeholder="Insira a descrição da peça"></textarea>
                
                <input type="file" id="upload" name="upload" value="" required accept=".jpg, .jpeg, .png">
                
            <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>
