<?php
include("conexao.php");
/* $conexao */
if (!$conexao) {
    echo "Deu ruim...".mysqli_connect_error();
}
$sql = "select * from produtos;";
$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Conexão com o Banco de Dados</title>
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/products.css" rel="stylesheet">
</head>

<body>
    <section class="produtos">
        <?php
        while ($row = $resultado->fetch_assoc()) {
            echo "<div class='box-produtos' id='hardware'>
                    <img src='./imagens/produtos/".$row['nome_imagem']."'onclick'='GoTo('rtx-2070-hof.html')'>"."
                    <div class='box-descricao'>"."
                        <span class='preco-antigo'>R$3.529,29</span>
                        <span class='nome-produto'>".$row['nome']."</span>
                        <span class='preco-atual'>".$row['preco']."</span>
                        <span class='promo'>-15%</span>
                    </div>
                </div>";
        }
        ?>
        
    </section>
    </section>
</body>

</html>