<?php
    session_start();
    ob_start();
    include_once 'conexao.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recuperar Senha</title>
    </head>
    <body>
        <h1>Recuperar Senha</h1>

        <?php
            //pegando os dados do form
            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            

            if(!empty($dados['sendRecuperar']))
            {/*
                var_dump($dados);

                $stmt =  $mysqli->prepare("SELECT idResponsavel, nomeResponsavel, email
                                      FROM responsavel
                                      WHERE email = :email
                                      LIMIT 1");
                $result_responsavel = $conexao->prepare($stmt);
                $result_responsavel->bindParam(':email', $dados['email'], PDO::PARAM_STR);
                $result_responsavel->execute();*/

                
              
                $stmt = $conexao->prepare("SELECT idResponsavel, nomeResponsavel, email 
                                            FROM responsavel
                                             WHERE email = ? 
                                             LIMIT 1");
                
                $stmt->bind_param('s', $dados['email']);
                $stmt->bind_result($idResponsavel, $nomeResponsavel, $email);
                $stmt->execute();
                
              $dados = $stmt->get_result();
              $row;
              while ($row = $dados->fetch_assoc())
            {
                echo $row['idResponsavel']; 
                echo "<br>";
                echo $row['email'];
                echo "<br>";
                echo $row['nomeResponsavel'];
                echo "<br>";

                if ($row['idResponsavel'] >=1){
                    echo"Email enviado com sucesso" ;
                    
                    $chave_recuperar_senha = password_hash($row['idResponsavel'], PASSWORD_DEFAULT);
                    echo "<br>";
                    //echo $chave_recuperar_senha;

                    $stmt = $conexao->prepare("UPDATE responsavel 
                                               SET recuperarSenha = ? 
                                               WHERE idResponsavel = ? 
                                               LIMIT 1");
                
            
                    //ERRO NA LINHA ABAIXO
                    $stmt->fetch('s', $dados['recuperarSenha']);
                    $stmt->bind_param('s', $dados['idResponsavel']);
                    $stmt->bind_result($chave_recuperar_senha);
                    $stmt->execute();
                    $dados = $stmt->get_result();

                    

                    if($stmt->execute())
                    {
                        echo"include_onde 'atualizaSenha.php?$chave_recuperar_senha'";
                    }
                    else
                    {
                        echo "Erro: Tente Novamente ";
                    }

                }else
                {
                    if($row['email'] !=0)
                    {
                        echo "Erro: Email invalido";
                    }
                }
            }
           
            
            
               

            }

            if(isset($_SESSION['msg']))
            {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form method = "POST" action="">
            <label>Email:</label>
            <input type="text" name="email" placeholder="Digite seu email"
            value="<?php if(isset($dados['email'])){echo $dados['email'];} ?>"><br><br>

            <input type="submit" value="Recuperar" name="sendRecuperar">


        </form>
    </body>
</html>