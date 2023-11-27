<?php
function loadAll(){
    require_once './model/portifoliosModel.php';
    $portifolios = new portifoliosModel();
    $portifoliosList = $portifolios->loadAll();
    return $portifoliosList;
}
?>