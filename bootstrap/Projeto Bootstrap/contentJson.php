<?php 
    include('./pages/conexao.php');
    $tabela = $_GET['table'];
    $sql = "select * from $tabela";
    $resultado = mysqli_query($conexao, $sql);
    $conteudo = json_encode(mysqli_fetch_all($resultado, MYSQLI_ASSOC));
    print_r($conteudo);
    mysqli_close($conexao);
?>