<?php

    include_once("conexao.php");
    
    if (!isset($_SESSION))
    {
        session_start();
    }

    if (!isset($_SESSION['email']))
    {
        session_destroy();
        header("Location: acesso.php"); exit;
    }

    //$consulta = "SELECT * FROM cadastro";
    //$con = $conexao->query($consulta) or die ( $conexao->error);

    $id = $conexao->real_escape_string($_SESSION['id']);
    $nomeResponsavel = $conexao->real_escape_string($_SESSION['nomeResponsavel']);
    $email = $conexao->real_escape_string($_SESSION['email']);
    $nomeCrianca = $conexao->real_escape_string($_SESSION['nomeCrianca']);
    $idadeCrianca = $conexao->real_escape_string($_SESSION['idadeCrianca']);
    $serieCrianca = $conexao->real_escape_string($_SESSION['serieCrianca']);
    $sexoCrianca = $conexao->real_escape_string($_SESSION['sexoCrianca']);

    $nomeResponsavel = $_POST["nomeResponsavel"];
    $email = $_POST["email"];
    $nomeCrianca = $_POST["nomeCrianca"];
    $idadeCrianca = $_POST["idadeCrianca"];
    $serieCrianca = $_POST["serieCrianca"];
    $sexoCrianca = $_POST["sexoCrianca"];
    
    if (isset($_POST["btn_Confirmar"]))
    {
        $atualizacao = "UPDATE cadastro SET nomeResponsavel = '$nomeResponsavel', email = '$email', nomeCrianca = '$nomeCrianca', idadeCrianca = '$idadeCrianca', serieCrianca = '$serieCrianca', sexoCrianca = '$sexoCrianca' WHERE id = '$id'";

        mysqli_query($conexao, $atualizacao);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados pessoais</title>
</head>
<body>
<br><a href="dashboard.php"><button>Voltar</button></a>

    <form action="consulta.php" method="POST">
    <h1>Dados pessoais</h1><br>
    Dados do responsável <br><br>

    <input type="text" placeholder="Nome do responsável" name="nomeResponsavel" value="<?=$_SESSION['nomeResponsavel']?>"><br>
    <input type="email" placeholder="E-mail" name="email" value="<?=$_SESSION['email']?>"><br><br>

    Dados da criança <br><br>

    <input type="text" placeholder="Nome completo da criança" name="nomeCrianca" value="<?=$_SESSION['nomeCrianca']?>"><br>
    <input type="number" placeholder="Idade" name="idadeCrianca" value="<?=$_SESSION['idadeCrianca']?>"><br>
    <input type="number" placeholder="serie escolar" name="serieCrianca" value="<?=$_SESSION['serieCrianca']?>"><br>
    <input type="text" name="sexoCrianca" placeholder="Sexo" value="<?=$_SESSION['sexoCrianca']?>">
    <br>

    <br><input type="submit" value="Confirmar" name="btn_Confirmar">


    </form>
    </body>
</html>