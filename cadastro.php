<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>
<form name="form1" method="post" action="cadastro.php">
   
    <h1>Criar Cadastro</h1>

    <!-- Cadastro do resposável -->
    <table>
    <label for="cadResponsavel">Configuraração do Responsável</label>
    <tr><td><input type="text" name="nomeResposavel" placeholder="Nome do responsável"></td></tr>
    <tr><td><input type="email" name="email" placeholder="E-mail"></td></tr>
    <tr><td><input type="password" name="senha" placeholder="Senha"></td></tr>
    <tr><td><input type="password" name="repeteSenha" placeholder="Repita a senha"></td></tr>
    </table>

    <!-- Cadastro da criança -->
    <table>
    <label for="cadCrianca">Configuração da Criança</label>
    <tr><td><input type="text" name="nomeCrianca" placeholder="Nome da Criança"></td></tr>
    <tr><td><input type="text" name="idade" placeholder="Idade"></td></tr>
    <tr><td><input type="text" name="serie" placeholder="Série escolar"></td></tr>
    <tr><td><label>Sexo</label>
    <input type="radio" name="sexo" value="Feminino">Feminino
    <input type="radio" name="sexo" value="Masculino">Masculino</td></tr>
    </table>

   <input type="submit" name="Submit" value="Cadastrar"><p>
    
<?php header('Access-Control-Allow-Origin: *');

    require_once('conexao.php');

    // Atributos: cadastro do responsável
    $nomeResponsavel = $_POST['nomeResponsavel'];
    $email = $_POST['email'];
    $senhaEmail = $_POST['senha'];
    $repeteSenha = $_POST['repeteSenha'];

    // Atributos: cadastro da criança
    $nomeCrianca = $_POST['nomeCrianca'];
	$idade = $_POST['idade'];
	$serie = $_POST['serie'];

    if ($_POST['sexo'] == 'Feminino')
    {
        $sexo = "Feminino";
    }

    else
    {
        $sexo = "Masculino";
    }
	

    if ($senhaEmail != $repeteSenha)
    {
        echo "As senhas não estão iguais!";
    }

    if (empty($nomeResponsavel) || empty($email) || empty($senhaEmail) || empty($repeteSenha)
    || empty($nomeCrianca) || empty($idade)|| empty($serie) || empty($sexo))
    {
        echo "Por favor, preencha todos os campos";
    }

    else    
    {
        $cadastroResponsavel = mysqli_query($conexao, "INSERT INTO responsavel (nomeResponsavel, email, senhaEmail) values ('$nomeResponsavel','$email', '$senhaEmail')") or die(mysqli_error($conexao));

        $cadastroCrianca = mysqli_query($conexao, "INSERT INTO crianca (nomeCrianca, idade, serie, sexo, avaliacao, nivel) values ('$nomeCrianca','$idade', '$serie', '$sexo', '', '')") or die(mysqli_error($conexao));
        
        echo "Cadastro realizado com sucesso!";
    }
?>
</form>
</body>
</html>