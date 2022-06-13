<?php
    include ('protecao.php');

    /*$id = $conexao->real_escape_string($_SESSION['id']);
    $nomeResponsavel = $conexao->real_escape_string($_SESSION['nomeResponsavel']);
    $nomeCrianca = $conexao->real_escape_string($_SESSION['nomeCrianca']);

    $retorno = "SELECT relatorio FROM feedback WHERE id = '$id'";
    $con = $conexao->query($retorno) or die ( $conexao->error);

    if ($retorno == 1)
    {
        echo "Olá ".$nomeResponsavel."<br>!
            ".$nomeCrianca." tem demostrado um excelente desenvolvimento,
            respondendo todas as perguntas da avaliação socioemocional 
            expressando emoções positivas, interagindo as funcionalidades 
            do jogo e passando os níveis de forma lógica. Tal classificação está 
            atrelada as interações citadas de ".$nomeCrianca." com o jogo de
            forma relativa.
            <br><br>
            Importante ressaltar que ".$nomeCrianca." deve continuar sendo 
            estimulado(a) no aprendizado para que haja maior desenvolvimento
            de seu cérebro cognitivo e de sua coordenação motora.
            <br>
            O ambiente escolar é fundamental para que ".$nomeCrianca." se
            desenvolva, não apenas de forma técnica, mas também socialmente 
            interagindo com outras crianças, ambiente e dinâmicas de aprendizado.";
    }

    else if ($retorno == 2)
    {
        echo "Olá ".$nomeResponsavel."<br>!
        ".$nomeCrianca." tem demostrado desenvolvimento regular,
        em relação as funcionalidades do jogo, os níveis e as perguntas da avaliação socioemocional
        expressando emoções não tão positivas. Porém, esta classificação de forma regular pode estar 
        atribuída as interações citadas de ".$nomeCrianca." com o jogo de forma relativa.
        <br><br>
        Vale ressaltar que é muito importante a observação dos responsáveis para a identificação das 
        dificuldades de .".$nomeCrianca." de forma mais específica e abrangente.
        <br>
        Os estímulos lúdicos são essenciais neste momento, para promover e contribuir no desenvolvimento
        das capacidades cerebrais de ".$nomeCrianca.", garantindo um melhor desempenho.";
    }

    else
    {
        echo "Olá ".$nomeResponsavel."<br>!
        ".$nomeCrianca." infelizmente tem demostrado desenvolvimento de forma repulsiva,
        em relação as funcionalidades do jogo, os níveis e as perguntas da avaliação socioemocional
        expressando emoções negativas. Tal classificação está atrelada as interações citadas
        de ".$nomeCrianca." com o jogo de forma relativa.
        <br><br>
        Vale ressaltar que é muito importante a observação dos responsáveis para a identificação das
        dificuldades de ".$nomeCrianca." de forma mais específica e abrangente para assim, tomar medidas
        auxiliares para o desenvolvimento de ".$nomeCrianca.", seja na busca de um profissional específico
        para analisar a situação de aprendizagem e desenvolvimento no qual ".$nomeCrianca." se encontra e,
        a partir disto, dar as orientações e medidas a serem tomadas. 
        <br>
        Os estímulos lúdicos são extremamente importantes neste momento, possuindo papel fundamental de
        contribuição para o  desenvolvimento das capacidades cerebrais de ".$nomeCrianca.", garantindo um
        melhor desempenho, mesmo sendo de médio a longo prazo.
        O importante não é exatamente o tempo em que se ocorre o desenvolvimento, pois ".$nomeCrianca." deve
        obter desenvolvimento em seu próprio ritmo. O que se torna realmente importante no momento é a presença
        de estímulos constantes.";
    }*/

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

    <a href="index.php"><img src="./img/btn-voltar 4.png" alt="" class="voltar"></a>

    <section>
        <a href="consulta.php" class="a-blue">Acessar dados pessoais</a>
        <h2>Dashboard</h2>
        <span class="span-cinza">*desenvolvimento da criança</span>
    </section>

    
</body>
</html>