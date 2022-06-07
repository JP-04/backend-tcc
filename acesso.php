<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuração</title>
</head>
<body>
    
    <h1>Configuração</h1>
    <br>

    <form method="POST">
    Insira a senha para prosseguir <br> 
    <input type="password" placeholder="Senha" name="senha"><br><br>
    <button>Confirmar</button>
    </form>

</body>
</html>

<?php
    include ('conexao.php');
    
    // Verificando se o campo senha está preenchido
    if (isset($_POST['senha']))
    {
        if (strlen($_POST['senha']) == 0)
        {
            echo "Por favor, insira sua senha";
        }

        else
        { 
            // Validação da senha de acesso recebida
            $senha = $conexao->real_escape_string($_POST['senha']);

            $query = "SELECT * FROM cadastro WHERE senha = '$senha'";
            $sql_query = $conexao->query($query) or die("Falha ao executar consulta" .$conexao->error);
        }

        $linhasRetornadas = $sql_query->num_rows;

        if ($linhasRetornadas == 1)
        {
            // Salvando os dados de acesso na variável $usuario
            $usuario = $sql_query->fetch_assoc();

            // Se a sessão não existir, inicia uma
            if (!isset($_SESSION))
            {
                session_start();
            }

            // Salva os dados encontrados na sessão
            $_SESSION['email'] = $usuario['email'];
            header("Location: dashboard.php");
            exit;
        }    

        else
        {
            echo "Falha ao acessar! Senha incorreta";
        }
    }
?>