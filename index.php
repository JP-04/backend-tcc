<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./style.css">

    <title>Configuração</title>
</head>
<body>
    <img src="./img/loja.png" alt="" class="loja">
    <img src="./img/laranja.png" alt="" class="laranja">
    <form action="index.php" method="POST">

        <span class="span-blue">CONFIGURAÇÃO</span>
        <p class="p-blue">*insira email e senha para prosseguir</p>

        <input type="text" name="email" placeholder="e-mail" required> <br>
        <input type="password" name="senha" placeholder="senha" required> <br>

        <div class="container-btn">
            <button><img src="./img/btn-confirmar.png" alt="" class="btn"></button>
            <a href="./cadastro.php">criar cadastro</a>
        </div>
        
    </form>
</body>
</html>

<?php
        include_once("conexao.php");
    
        if(isset($_POST['email']) || isset($_POST['senha'])){
            
            if(strlen($_POST['email']) == 0){
                echo "preencha o e-mail";
            } 
            elseif(strlen($_POST['senha']) == 0){
                echo "preencha a senha";
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
                    $_SESSION['nomeResponsavel'] = $cadastro['nomeResponsavel'];
                    $_SESSION['email'] = $cadastro['email'];
                    $_SESSION['nomeCrianca'] = $cadastro['nomeCrianca'];
                    $_SESSION['idadeCrianca'] = $cadastro['idadeCrianca'];
                    $_SESSION['serieCrianca'] = $cadastro['serieCrianca'];
                    $_SESSION['sexoCrianca'] = $cadastro['sexoCrianca'];


                    header("Location: dashboard.php");
                }else{
                    echo " <p>Falha ao logar! Email ou senha incorretos</p>";
                }
            }

        }
?>