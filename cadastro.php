<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
        responsável <br>
        <input type="text" placeholder="nome" name="nome"> <br>
        <input type="email" placeholder="email" name="email"> <br>
        <input type="password" placeholder="senha" name="senha"> <br> <br>
        <input type="password" placeholder="repitaSenha" name="repitaSenha"> <br> <br>
        criança <br>
        <input type="text" placeholder="nome da criança" name="nomeCrianca"> <br>
        <input type="number" placeholder="idade da criança" name="idadeCrianca"> <br>
        <input type="number" placeholder="serie escolar" name="serieCrianca"> <br>
        <input type="text" name="sexoCrianca">
        <!-- <span>Sexo da criança </span> <br>
        Feminino<input type="radio" name="sexoCrianca" value="f" checked> <br>
        Masculino<input type="radio" name="sexoCrianca" value="m"> <br> -->
        

        <button>cadastrar</button>
    </form>
    <?php
        include_once("conexao.php");
        $nome  = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $repitaSenha = $_POST['repitaSenha'];
        
        $nomeCrianca  = $_POST['nomeCrianca'];
        $idadeCrianca = $_POST['idadeCrianca'];
        $serieCrianca = $_POST['serieCrianca'];
        $sexoCrianca  = $_POST['sexoCrianca'];
        
        if ($senha == $repitaSenha) {
            $sql = "INSERT INTO cadastro(nomeResponsavel, email, senha, nomeCrianca , idadeCriaca, serieCrianca, sexoCrianca)
            VALUES ('$nome', '$email', '$senha', '$nomeCrianca', '$idadeCrianca','$serieCrianca', '$sexoCrianca')";
        }
        if($senha != $repitaSenha){
            echo "
                <script>window.alert('As senhas não são iguais');</script>
            ";
        }
        if (mysqli_query($conexao, $sql)) {
            echo "cadastrado";
        }
        else{
            echo "erro ao cadastrar" .mysqli_connect_error($conexao);
            
        }

        mysqli_close($conexao);
    ?>
</body>
</html>