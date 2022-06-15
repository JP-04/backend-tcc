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

    /*$id = $conexao->real_escape_string($_SESSION['id']);
    $nomeResponsavel = $conexao->real_escape_string($_SESSION['nomeResponsavel']);
    $email = $conexao->real_escape_string($_SESSION['email']);
    $nomeCrianca = $conexao->real_escape_string($_SESSION['nomeCrianca']);
    $idadeCrianca = $conexao->real_escape_string($_SESSION['idadeCrianca']);
    $serieCrianca = $conexao->real_escape_string($_SESSION['serieCrianca']);
    $sexoCrianca = $conexao->real_escape_string($_SESSION['sexoCrianca']);*/

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

        $_SESSION['sexoCrianca'] = $sexoCrianca;
                
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./consulta.css">
    <title>Dados pessoais</title>
</head>
<body>
    <img src="./img/loja.png" alt="" class="loja">
    <img src="./img/laranja.png" alt="" class="laranja">
    <a href="dashboard.php"><img src="./img/btn-voltar 4.png" alt="" class="voltar"></a>

    <form action="consulta.php" method="POST">
    <p>*dados do responsável</p> <br>
    <span>nome</span>
    <input type="text"  placeholder="Nome do responsável" name="nomeResponsavel" value="<?=$_SESSION['nomeResponsavel']?>">
    <span>e-mail</span>
    <input type="email" placeholder="E-mail" name="email" value="<?=$_SESSION['email']?>"> <br>
    <p>*dados da criança</p><br>
    <span>nome</span>
    <input type="text"     placeholder="nome"  name="nomeCrianca"  value="<?=$_SESSION['nomeCrianca'] ?>" required >
    <span>idade</span>
    <input type="number"   placeholder="idade" name="idadeCrianca" value="<?=$_SESSION['idadeCrianca']?>" required min="1" max="12">
    <span>série</span>
    <input type="number"   placeholder="série" name="serieCrianca" value="<?=$_SESSION['serieCrianca']?>" required min="1" max="9">
    <span>sexo</span>
    <select name="sexoCrianca" id="">
        <option value="feminino" <?php if($_SESSION['sexoCrianca'] == "feminino") echo "selected"; ?>>Feminino</option>
        <option value="masculino" <?php if($_SESSION['sexoCrianca'] == "masculino") echo "selected"; ?>>Masculino</option>
    </select>
    <br>
    <button type="submit" value="Confirmar" name="btn_Confirmar"><img src="./img/btn-editar.png" alt=""></button>
    

    </form>
    </body>
</html>