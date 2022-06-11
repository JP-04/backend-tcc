<?php
        include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./style.css">
    <title>Cadastro</title>
</head>
<body>
    <img src="./img/loja.png" alt="" class="loja">
    <img src="./img/laranja.png" alt="" class="laranja">
    <form action="cadastro.php" method="POST" id="form">
         
        <h1>CADASTRO</h1>

        <h2>CONFIGURAÇÃO DO RESPONSÁVEL</h2>
        
        <input type="text"     placeholder="nome"           name="nome"   required>
        <input type="email"    placeholder="email"          name="email"  required> 
        <input type="password" placeholder="senha"          name="senha"  required minlength="5"> 
        <input type="password" placeholder="repita a senha" name="rsenha" required minlength="5">

        <h2>CONFIGURAÇÃO DA CRIANÇA</h2>
        <input type="text"      placeholder="nome"   name="nomeCrianca"  required> 
        <input type="number"    placeholder="idade"  name="idadeCrianca" required min="1" max="12"> 
        <input type="number"    placeholder="série"  name="serieCrianca" required min="1" max="9">

        <select name="sexoCrianca"     required>
                <option value="feminino">feminino</option>
                <option value="masculino">masculino</option>
        </select>
        <div class="container-btn">
            <button type="submit"><img src="./img/btn-cadastrar.png" alt="" class="btn"></button>
            <a href="index.php"> LOGIN </a>
        </div>
        

    </form>
  <?php 
        $nome   = $_POST ['nome'  ];
        $email  = $_POST ['email' ];
        $senha  = $_POST ['senha' ];
        $rsenha  = $_POST['rsenha' ];
        
        $nomeCrianca  = $_POST['nomeCrianca'  ];
        $idadeCrianca = $_POST['idadeCrianca' ];
        $serieCrianca = $_POST['serieCrianca' ];
        $sexoCrianca  = $_POST['sexoCrianca'  ];


        if ($senha == $rsenha) {
           
            $sql = "INSERT INTO cadastro(nomeResponsavel, email, senha, nomeCrianca , idadeCrianca, serieCrianca, sexoCrianca)
            VALUES ('$nome', '$email', '$senha', '$nomeCrianca', '$idadeCrianca','$serieCrianca', '$sexoCrianca')";
        }
        if($senha != $rsenha){
            echo "<p>AS SENHAS NÃO SÃO IGUAIS</p>";
        }
        if (mysqli_query($conexao, $sql)) {
            echo "<span>CADASTRO REALIZADO CO SUCESSO</span>";
        }
        else{
            echo "erro ao cadastrar" .mysqli_connect_error($conexao);
            
        }
        mysqli_close($conexao);
    ?>

</body>
</html>