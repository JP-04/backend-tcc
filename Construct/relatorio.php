<?php header('Access-Control-Allow-Origin: *');

    include_once './conexao.php';

    if (isset($_GET['relatório']))
    {
        $relatorio = strip_tags(mysqli_real_escape_string($_GET['relatório']));
        $sql = mysqli_query("INSERT INTO feedback (relatorio, garrafas) VALUES ('$relatorio')");
    }
    // Fecha conexão com o banco
    mysqli_close($conexao);

?>