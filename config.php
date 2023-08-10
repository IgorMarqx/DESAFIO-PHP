<?php
    $dbHost = 'localhost';
    $dbUsername =  'root';
    $dbPassword = '';
    $dbName = 'Clientes';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);


    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else 
    // {
    //     echo "Conexao efetuada com sucesso";
    // }
     
?>