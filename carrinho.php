<?php
session_start(); // Inicia a sessão se ainda não foi iniciada

if ($_POST && isset($_POST['idPeca']) && isset($_POST['nomePeca']) && isset($_POST['precoPeca'])) {
    $carrinhoIdPecas = $_POST["idPeca"];
    $carrinhoNomePecas = $_POST["nomePeca"];
    $carrinhoPrecoPecas = $_POST["precoPeca"];
    $carrinhoImagemPecas = $_POST["imagemPeca"];

    // Inicializa o array ou recupera o array existente da sessão
    $carrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : array();

    // Adiciona os novos itens ao array
    foreach ($carrinhoNomePecas as $indice => $nome) {
        $item = array(
            'id' => $carrinhoIdPecas[$indice],
            'nome' => $nome,
            'preco' => $carrinhoPrecoPecas[$indice],
            'imagem' => $carrinhoImagemPecas[$indice]
        );

        $carrinho[] = $item;
    }

    // Salva o array na sessão
    $_SESSION['carrinho'] = $carrinho;

    // Redireciona de volta à página principal
    header("Location: index.php?cod=170");
    exit(); // Certifique-se de encerrar o script após o redirecionamento
} else {
    echo "Erro: Nenhum dado do carrinho recebido.";
}
?>
