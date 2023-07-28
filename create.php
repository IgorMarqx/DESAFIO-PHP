<?php
session_start();

function create()
{
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if (empty($name) || empty($email)) {
        $_SESSION['name'] = 'Preencha os campos.';
        $_SESSION['email'] = 'Campo vazio ou inválido.';

        header('location: ./');
    } else {
        echo $email . '<br>';
        echo $name . '<br>';
    }
};

create();
