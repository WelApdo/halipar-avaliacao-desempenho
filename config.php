<?php

    $dbHost = 'localhost'; // ou o endereço IP do seu servidor MySQL
    $dbUsername = 'root'; // ou o nome de usuário correto do seu banco de dados MySQL
    $dbPassword= ''; // ou a senha correta do seu banco de dados MySQL
    $dbName = 'formulario'; // o nome do seu banco de dados MySQL

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conexao->connect_errno) {
        echo "Erro ao conectar ao banco de dados: " . $conexao->connect_error;
    } else {
        echo "Conexão efetuada com sucesso";
    }
?>
