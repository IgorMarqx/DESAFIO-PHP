<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $telefone =  $_POST['telefone'];
        $data_nascimento = $_POST['dt_nascimento'];
        $id = $_GET['id'];

        $sqlUpdate = "UPDATE formulario SET nome='$nome', email='$email', senha='$senha', cpf='$cpf', telefone='$telefone', dt_nascimento='$data_nascimento' WHERE id='$id'";


        $result = $conexao->query($sqlUpdate);
        header('Location: sistema.php');
    }
    
?>