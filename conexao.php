<?php
    error_reporting(0);

    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbname="bdpsicokids";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    if (!$conexao)
    {
        die("Erro ao conectar com o banco" .mysqli_connect_error());   
    }

