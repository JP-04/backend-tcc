<?php
    include_once("conexao.php");

    $consulta = "SELECT * FROM cadastro";
    $con = $conexao->query($consulta) or die ( $conexao->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1px'>
        <tr>
            <td> Id     </td>
            <td> Nome Responsável   </td>
            <td> Email          </td>
            <td> Senha          </td>
            <td> Nome Criança  </td>
            <td> Idade Criança </td>
            <td> Serie Criança </td>
            <td> Sexo Criança  </td>
        </tr>
        <?php while($dado = $con->fetch_array()){ ?>

        <tr>
            <td><?php echo $dado["id"];?></td>
            <td><?php echo $dado["nomeResponsavel"];?></td>
            <td><?php echo $dado["email"];?></td>
            <td><?php echo $dado["senha"];?></td>
            <td><?php echo $dado["nomeCrianca"];?></td>
            <td><?php echo $dado["idadeCriaca"];?></td>
            <td><?php echo $dado["serieCrianca"];?></td>
            <td><?php echo $dado["sexoCrianca"];?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>