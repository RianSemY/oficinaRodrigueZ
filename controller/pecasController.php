<?php


function loadAll(){
    require_once './model/pecasModel.php';
    $pecas = new pecasModel();
    $pecasList = $pecas->loadAll();
    return $pecasList;
}

if ($_POST) {
    if(isset($_FILES['upload'])){
        $arquivo = $_FILES['upload'];
        if($arquivo['error']){
            header('location:../gerenciarPortifolio?cod=error');
            exit;
        }
        $pasta = "../img/bk/";
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
    @$tipo = $_POST['tipo'];
    @$preco = $_POST['preco'];
    @$estoque = $_POST['estoque'];
    echo $imagem;
    echo $nome;
    echo $desc;
    
    if (isset($nome) and isset($desc) and isset($imagem)) {
        require_once '../model/pecasModel.php';
        $peca = new pecasModel();
        $peca->setImagem($imagem);
        $peca->setNome($nome);
        $peca->setDesc($desc);
        $peca->setPreco($preco);
        $peca->setTipo($tipo);
        $peca->setEstoque($estoque);
        
        $peca->insert();
        header('location:../registropeca.php?cod=sucess');
    } else{
        header('location:../registropeca.php?cod=error');
    }
}
else if ($_REQUEST) {
    if (isset($_REQUEST['cod']) && $_REQUEST['cod'] == 'del') {
        require_once '../model/pecasModel.php';
        $peca = new pecasModel(); 
        if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
            $peca->setId($_REQUEST['id']);
            $total = $peca->delete();
            if ($total == 1) {
                header('location:../index.php?cod=success&&admin=admin');
            }
        }
    }
} else {
    loadAll();
}
?>