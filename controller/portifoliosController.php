<?php


function loadAll(){
    require_once './model/portifoliosModel.php';
    $portifolios = new portifoliosModel();
    $portifoliosList = $portifolios->loadAll();
    return $portifoliosList;
}

if ($_POST) {
    @$imagem = $_POST['upload'];
    @$nome = $_POST['nome'];
    @$desc = $_POST['descricao'];
    
    if (isset($nome) and isset($desc) and isset($imagem)) {
        require_once '../model/portifoliosModel.php';
        $portifolio = new portifoliosModel();
        $portifolio->setImagem($imagem);
        $portifolio->setNome($nome);
        $portifolio->setDesc($desc);
        
        $portifolio->insert();
    }
}
?>