<?php

    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbname="bdpsicokids";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);

    if (!$conexao) {
        die("Erro ao conectar com o banco" .mysqli_connect_error());
    }

