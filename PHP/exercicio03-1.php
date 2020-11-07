<!-- 

	nome (texto)	
    senha (texto)	
    gênero (radio button)	
    botão enviar (botão)
Após a digitação das informações, as mesmas devem ser enviadas 
via método POST para o arquivo php de nome formularioresposta.php 
possa receber as informações e fazer a exibição das mesmas.

 -->
<?php 
    if(isset($_POST['nome']) && isset($_POST['senha']) && isset($_POST['genero']))
    {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $genero = $_POST['genero'];
    }

?>
 <!DOCTYPE html>
 <html lang="pt-br">
     <head>
         <meta charset="utf-8">
         <title>Exibir Post</title>
     </head>
     <body>
        <h2> Nome do usuario: <?php echo $nome ?></h2>
        <h2> Senha do usuario: <?php echo $senha ?></h2>
        <h2> Genero do usuario: <?php echo $genero ?></h2>
     </body>
 </html>