<?php
        include_once("conexao.php");
    
        if(isset($_POST['email']) || isset($_POST['senha'])){
            
            if(strlen($_POST['email']) == 0){
                echo "preencha o email";
            } 
            elseif(strlen($_POST['senha']) == 0){
                echo "preenchaa senha";
            }
            
            else {
                $email = $conexao->real_escape_string($_POST['email']);
                $senha = $conexao->real_escape_string($_POST['senha']);

                $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
                $sql_query = $conexao->query($sql_code) or die("Falha na execução do Código Sql" . $conexao->error);
                
                $quantidade_linhas_retornadas = $sql_query->num_rows;
                
                if($quantidade_linhas_retornadas == 1){

                    $cadastro = $sql_query->fetch_assoc();
                    
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    $_SESSION['id'] = $cadastro['id'];
                    $_SESSION['nome'] = $cadastro['nome'];

                    header("Location: test.php");
                }else{
                    echo "Falhas ao logar! Email ou senha incorretos";
                }
            }

        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="logintest.php" method="POST">
        <input type="text" name="email" placeholder="email"> <br>
        <input type="password" name="senha" placeholder="senha"> <br>
        <button>test</button>
    </form>
</body>
</html>