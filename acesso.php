<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuração</title>
</head>
<body>
    <form action="acesso.php" method="POST">
        Insira seu e-mail e senha para prosseguir <br>
        <input type="text" name="email" placeholder="E-mail"> <br>
        <input type="password" name="senha" placeholder="Senha"> <br>
        <button>Confirmar</button>
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
                    echo "Falha ao logar! Email ou senha incorretos";
                }
            }

        }
?>