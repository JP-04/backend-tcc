<?php
    include ('protecao.php');  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <img src="./img/loja.png" alt="" class="loja">
    <img src="./img/laranja.png" alt="" class="laranja">
    <a href="sair.php"><img src="./img/btn-voltar 4.png" alt="" class="voltar"></a>
    <section>
        <a href="consulta.php" class="a-blue">Acessar dados pessoais</a>
        <h2>Dashboard</h2>
        <span class="span-cinza">*desenvolvimento da criança</span>
        <p>Olá $nomeResponsavel!
            $nomeCrianca tem demostrado um excelente desenvolvimento,
            respondendo todas as perguntas da avaliação socioemocional 
            expressando emoções positivas, interagindo as funcionalidades 
            do jogo e passando os níveis de forma lógica. Tal classificação está 
            atrelada as interações citadas de $nomeCrianca com o jogo de
            forma relativa.
            <br><br>
            Importante ressaltar que $nomeCrianca deve continuar sendo 
            estimulado(a) no aprendizado para que haja maior desenvolvimento
            de seu cérebro cognitivo e de sua coordenação motora. 
            O ambiente escolar é fundamental para que $nomeCrianca se
            desenvolva, não apenas de forma técnica, mas também socialmente 
            interagindo com outras crianças, ambiente e dinâmicas de aprendizado.
        </p>
    </section>

    
</body>
</html>