<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
        Responsável <br>
        <input type="text" placeholder="Nome" name="nome"> <br>
        <input type="email" placeholder="Email" name="email"> <br>
        <input type="password" placeholder="Senha" name="senha"> <br> <br>
        <input type="password" placeholder="Repita a senha" name="repitaSenha"> <br> <br>
        Criança <br>
        <input type="text" placeholder="Nome da criança" name="nomeCrianca"> <br>
        <input type="number" placeholder="Idade da criança" name="idadeCrianca"> <br>
        <input type="number" placeholder="Série escolar" name="serieCrianca"> <br>
        <input type="text" name="sexoCrianca">
        <!-- <span>Sexo da criança </span> <br>
        Feminino<input type="radio" name="sexoCrianca" value="f" checked> <br>
        Masculino<input type="radio" name="sexoCrianca" value="m"> <br> -->
        

        <button>Cadastrar</button>
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
            $sql = "INSERT INTO cadastro(nomeResponsavel, email, senha, nomeCrianca , idadeCrianca, serieCrianca, sexoCrianca)
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