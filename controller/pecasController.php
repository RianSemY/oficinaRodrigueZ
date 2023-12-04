<?php
function loadAll(){
    require_once './model/pecasModel.php';
    $pecas = new pecasModel();
    $pecasList = $pecas->loadAll();
    return $pecasList;
}
?>