<?php header('Access-Control-Allow-Origin: *');

// Executando conexão com o banco
$conexao = mysqli_connect("mysql:host=localhost;
port=3306;dbname=bdpsicokids", "root", "");
    
// Checando conexão com o banco
if (mysqli_connect_error())
{
    echo "Falha ao conectar com o banco: " . mysqli_connect_error();
}

?>