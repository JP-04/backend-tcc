<?php

    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbname="bdpsicokids";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);

    if (!$conexao) {
        die("errou ai cuzao" .mysqli_connect_error());
    }

