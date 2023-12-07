<?php
session_start();

if ($_POST && isset($_POST['id'])) {
    $idRemover = $_POST['id'];
    $carrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : array();
    $indiceRemover = array_search($idRemover, array_column($carrinho, 'id'));
    if ($indiceRemover !== false) {
        unset($carrinho[$indiceRemover]);
    }
    $carrinho = array_values($carrinho);
    $_SESSION['carrinho'] = $carrinho;
}
header("Location: index.php?cod=170");
exit();
?>
