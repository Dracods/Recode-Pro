<?php
$link = file_get_contents("http://localhost/Projeto%20PHP/contentJson.php?table=produtos");
$dados = json_decode($link, true);
foreach($dados as $key => $valor){
    $nome = $valor["nome"];
    $preco_antigo = $valor["preco_antigo"];
    $preco_atual = $valor["preco_atual"];
    $promo = $valor["promocao"];
    if ($preco_antigo == "") {
        $preco_antigo = "&nbsp;";
    } else {
        $preco_antigo = "R$" . $preco_antigo;
    }
    if ($promo != "") {
        $promo = "-" . $promo . "%";
    }
    $id = $valor["categoria_produto"];
    $classe = $valor["sub_categoria"];
    $endereco_imagem = $valor["nome_imagem"];
?>
    <div class='box-produtos <?php echo $classe ?>' id='<?php echo $id ?>'>
        <form onclick="GoTo('product.php'), this.submit()" method="GET" action="product.php">
            <img src="imagens/produtos/<?php echo $endereco_imagem ?>">
            <div class="box-descricao">
                <span class="preco-antigo"><?php echo $preco_antigo ?></span>
                <span class="nome-produto"><?php echo $nome ?></span>
                <span class="preco-atual"><?php echo "R$" . $preco_atual ?></span>
                <span class="promo"><?php echo $promo ?></span>
                <input typer="hidden" name="id_produto" style="display: none" value="<?php echo $valor["id_produto"] ?>"></input>
            </div>
        </form>
    </div>
<?php

}
?>