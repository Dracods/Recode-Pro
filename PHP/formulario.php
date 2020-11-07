<?php
include("conexao.php");
/* $conexao */
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formularios</title>
</head>

<body>
    <!-- Method Get envia as informações pela barra de pesquisa -->
    <!-- Method Post envia as informações atraves do header(otimo para dados mais sensiveis, como senhas) -->
    <!-- Action é para onde estas informações devem ser enviadas -->
    <form method="get" action="formulario.php">
        <h2>GET</h2>
        <label>Nome: </label><br>
        <input type="text" name="nome"><br>
        <label for="mensagem">Mensagem: </label><br>
        <textarea name="mensagem" placeholder=""></textarea><br>
        <button type="submit">GET</button>
    </form>
    <form method="POST" action="formulario.php">
        <h2>POST</h2>
        <label>Nome: </label><br>
        <input type="text" name="nome"><br>
        <label for="mensagem">Mensagem: </label><br>
        <textarea name="mensagem" placeholder=""></textarea><br>
        <button type="submit">POST</button>
    </form>
    <br>
    <?php
    if (isset($_GET['nome']) && isset($_GET['mensagem']) || isset($_POST['nome']) && isset($_POST['mensagem'])) {
        /* Podemos usar $_REQUEST para pegar qualquer um do dois que foi enviado */
        if ($_GET) {
            $nome = $_GET['nome'];
            $mensagem = $_GET['mensagem'];
            $sql = "insert into comentarios (nome, mensagem) values ('$nome', '$mensagem')";
            $resultado = $conexao->query($sql);
            if ($conexao) {
                echo "Sucesso! #gugu";
            } else {
                echo "Deu ruim...." . mysqli_connect_error();
            }
            echo "<br>Salve " . $_GET['nome'] . "!";
            echo "<br>Recebemos sua mensagem via GET! <br>Mensagem:<br> " . $_GET['mensagem'];
        }
        if ($_POST) {
            $nome = $_POST['nome'];
            $mensagem = $_POST['mensagem'];
            /* Cuidado com as aspas */
            $sql = "insert into comentarios (nome, mensagem) values ('$nome', '$mensagem')";
            $resultado = $conexao->query($sql);
            if ($conexao) {
                echo "Sucesso! #gugu";
            } else {
                echo "Deu ruim...." . mysqli_connect_error();
            }
            echo "<br>Salve " . $_POST['nome'] . "!";
            echo "<br>Recebemos sua mensagem via POST! <br>Mensagem:<br> " . $_POST['mensagem'];
        }
        echo "<br>Salve " . $_REQUEST['nome'] . "!";
        echo "<br>Recebemos sua mensagem via REQUEST! <br>Mensagem:<br> " . $_REQUEST['mensagem'];
    }
    ?>
</body>

</html>