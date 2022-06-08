<?php

    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbname="bdpsicokids";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    if (!$conexao) {

        die("Tente novamente" .mysqli_connect_error());

        
    }

