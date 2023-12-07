<?php
require_once 'shared/header.php';
?>
<div class="gerenciar">
    <div class="clientesTable">
        <h2>Clientes:</h2>
        <table id="clientesTable">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Endereço</th>
            </thead>
            <tbody>
                <?php
                require_once 'controller/contasController.php';
                $clientesList = loadAll();
                
                foreach ($clientesList as $clientes) {
                    echo '<tr>';
                        echo '<td>';
                            echo $clientes['id'];
                        echo '</td>';
                        echo '<td>';
                            echo $clientes['nome'];
                        echo '</td>';
                        echo '<td>';
                            echo $clientes['fone'];
                        echo '</td>';
                        echo '<td style="text-transform: none;">';
                            echo $clientes['email'];
                        echo '</td>';
                        echo '<td>';
                            echo $clientes['endereco'];
                        echo '</td>';
                    echo '<td>';
                }
                ?>
            <tbody>
        </table>    
    </div>
    <div class="carrosTable">
    <h2>Carros:</h2>
    <table id="carrosTable">
            <thead>
                <th>ID</th>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Cor</th>
                <th>Dono</th>
            </thead>
            <tbody>
                <?php

                require_once 'controller/carrosController.php';
                $carrosList = loadAllCarros();
                // $donosList = loadDono();
                foreach ($carrosList as $carro) {
                    echo '<tr>';
                        echo '<td>';
                            echo $carro["id"];
                        echo '</td>';
                        echo '<td>';
                            echo $carro["placa"];
                        echo '</td>';
                        echo '<td>';
                            echo $carro["marca"];
                        echo '</td>';
                        echo '<td>';
                            echo $carro["modelo"];
                        echo '</td>';
                        echo '<td>';
                            echo $carro["ano"];
                        echo '</td>';
                        echo '<td>';
                            echo $carro["cor"];
                        echo '</td>';
                        echo '<td>';

                        echo '</td>';
                    echo '<td>';
                }
                /*foreach ($donosList as $donos) {
                    echo $donos['nome'];
                }*/
                ?>
            <tbody>
        </table>
    </div>
    <div class="fucionariosTable">
    <h2>Funcionários:</h2>
        <table id="fucionariosTable">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Endereço</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                require_once 'controller/funcionariosController.php';
                $funcionariosList = loadAllFuncionarios();
                
                foreach ($funcionariosList as $funcionarios) {
                    echo '<tr>';
                        echo '<td>';
                            echo $funcionarios['id'];
                        echo '</td>';
                        echo '<td>';
                            echo $funcionarios['nome'];
                        echo '</td>';
                        echo '<td>';
                            echo $funcionarios['fone'];
                        echo '</td>';
                        echo '<td style="text-transform: none;">';
                            echo $funcionarios['email'];
                        echo '</td>';
                        echo '<td>';
                            echo $funcionarios['funcao'];
                        echo '</td>';
                        echo '<td style="display: flex; justify-content: center;place-items:center;align-items>:center;">';
                            echo '<a style="margin: 5px 5px 5px;" href="./controller/funcionariosController.php?cod=del&&id='.$funcionarios['id'].'" class="delete"><span class="material-symbols-outlined">delete</span></a>';
                            echo '<a style="margin-bottom: 5px;;" class="edit"><span class="material-symbols-outlined">edit</span></a>';
                        echo '</td>';
                    echo '<td>';
                }
                ?>
            <tbody>
        </table>    
    </div>
</div>