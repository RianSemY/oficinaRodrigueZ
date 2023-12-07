<?php


function loadAll(){
    require_once './model/portifoliosModel.php';
    $portifolios = new portifoliosModel();
    $portifoliosList = $portifolios->loadAll();
    return $portifoliosList;
}

if ($_POST) {
    if(isset($_FILES['upload'])){
        $arquivo = $_FILES['upload'];
        if($arquivo['error']){
            header('location:../gerenciarPortifolio?cod=error');
            exit;
        }
        $pasta = "../img/portifolios/";
        $nomeArquivo = $arquivo['name'];
    
        $tipo = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
    
        $tipos_permitidos = array("jpg", "png", "jpeg");
        if (!in_array($tipo, $tipos_permitidos)) {
            // Tipo de arquivo não permitido
            header('location:../gerenciarPortifolio?cod=error');
            exit;
        }

        $caminhoImagem = $pasta . $nomeArquivo . "." . $tipo;
        move_uploaded_file($arquivo['tmp_name'], $caminhoImagem);
    }

    echo "\n";


    @$imagem = $_FILES["upload"]["name"];
    @$nome = $_POST['nome'];
    @$desc = $_POST['descricao'];
    echo $imagem;
    echo $nome;
    echo $desc;
    
    if (isset($nome) and isset($desc) and isset($imagem)) {
        require_once '../model/portifoliosModel.php';
        $portifolio = new portifoliosModel();
        $portifolio->setImagem($imagem);
        $portifolio->setNome($nome);
        $portifolio->setDesc($desc);
        
        $portifolio->insert();
        header('location:../gerenciarPortifolio?cod=sucess');
    } else{
        header('location:../gerenciarPortifolio?cod=error');
    }
}
else if ($_REQUEST) {
    if (isset($_REQUEST['cod']) && $_REQUEST['cod'] == 'del') {
        require_once '../model/portifoliosModel.php';
        $portifolio = new portifoliosModel();
        if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
            $portifolio->setId($_REQUEST['id']);
            $total = $portifolio->delete();
            if ($total == 1) {
                header('location:../portifolios.php?cod=success&&admin=admin');
            }
        }
    }
} else {
    loadAll();
}
?>