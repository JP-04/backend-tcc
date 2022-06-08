<?php
        include_once("conexao.php");
        
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Criar cadastro</h1>
    <form action="cadastro.php" method="POST">
        Configuração do responsável <br>
        <input type="text" placeholder="Nome do responsável" name="nome"> <br>
        <input type="email" placeholder="E-mail" name="email"> <br>
        <input type="password" placeholder="Senha" name="senha"> <br> <br>
        <input type="password" placeholder="Repita a senha" name="repitaSenha"> <br> <br>
        Configuração da criança <br>
        <input type="text" placeholder="Nome completo da criança" name="nomeCrianca"> <br>
        <input type="number" placeholder="Idade" name="idadeCrianca"> <br>
        <input type="number" placeholder="serie escolar" name="serieCrianca"> <br>
        <input type="text" name="sexoCrianca" placeholder="Sexo">
        <!-- <span>Sexo da criança </span> <br>
        Feminino<input type="radio" name="sexoCrianca" value="f" checked> <br>
        Masculino<input type="radio" name="sexoCrianca" value="m"> <br> -->
        

        <button>Cadastrar</button>
    </form>
  <?php 
        $nome  =$conexao->real_escape_string ( $_POST['nome'  ]);
        $email =$conexao->real_escape_string ( $_POST['email' ]);
        $senha = $conexao->real_escape_string( $_POST['senha' ]);
        $repitaSenha = $conexao->real_escape_string($_POST['repitaSenha']);
        
        $nomeCrianca  = $conexao->real_escape_string($_POST['nomeCrianca'  ]);
        $idadeCrianca = $conexao->real_escape_string($_POST['idadeCrianca' ]);
        $serieCrianca = $conexao->real_escape_string($_POST['serieCrianca' ]);
        $sexoCrianca  = $conexao->real_escape_string($_POST['sexoCrianca'  ]);
        
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