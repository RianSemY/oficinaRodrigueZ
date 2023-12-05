<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>files upload</title>
    </head>
    <body>
        <form method="POST" action="index.php" enctype="multipart/form-data">
            <input type="file" name="userfile" id="userfile">
            <button type="submit">Enviar</button>
            <?php
            
            // Neste exemplo o methodo post não nessecita ser verificado , mas em casos que seja preciso, não acesse o $_POST diretamente 
            
            if (isset($_FILES['userfile'])) {
                
                // Pega o nome do arquivo , então este pode-se levar ao banco
                echo $_FILES['userfile']['name'];

                //Pasta que irá ser salva a imagem
                $uploaddir = 'imagens/';
                //Caminho completo da imagem junto da pasta
                $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
                

                
                // O move_uploaded_file pega a localização atual da imagem na memoria e envia para o local to segundo parametro
                // Em resumo os parametros são (from , to) ou (onde esta , para onde vai)

                if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                    echo "\nImagem enviada";
                    echo '\n<img src="./imagens/' . $_FILES['userfile']['name'] . '">';// Só um exemplo de como usar o caminho da imagem
                } else {
                    echo "\nImagem invalida";
                }
            }
            ?>
        </form>
    </body>
</html>
