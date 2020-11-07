<?php 
    $titulo = "Meu primeiro php";
    $nome = "Vinicius";
    $sobrenome = "Brito Costa";
    $idade = "23 anos";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>
</head>

<body>
    <?php
    /* Variaveis do php se iniciam com $ */
    $name = 'Vinicus';
    $nascimento = "1996:12:07";
    /* Funções para imprimir na tela*/
    echo "Funções de impressão:";
    print("Print! <p>Nome: " . $name . "<br> Data de nascimento: " . $nascimento.'</p>');
    echo "Echo! <p> Nome: " . $name . "<br> Data de nascimento: " . $nascimento.'</p>';
    print_r("PrintR! <p>Nome: " . $name . "<br> Data de nascimento: " . $nascimento.'</p>');

    /*Diferenca entre aspas simples/duplas*/
    $duplo = "<p>Olar $name!</p>";
    $simples = '<p>Olar $name!</p>';
    echo "<strong>Aspas Duplas:</strong>";
    echo $duplo;

    echo "<strong>Aspas Simples:</strong>";
    echo $simples;
    $nome_completo = $nome." ".$sobrenome;

    
    define("estado", "São Paulo");
    echo estado."<br>";

    $numero = 5;
    $numero = (float)$numero;
    echo $numero."<br>";
    $numero = (string)$numero;
    echo $numero."<br>";
    $numero = (boolean)$numero;
    echo $numero."<br>";


    /* Listas */
    $lista = ["Luffy", "Zoro", "Nami"];

    for($int = 0; $int < count($lista); $int++){
        echo "For loop | ".$lista[$int]."!<br>";
    }
    $contador = 0;
    while($contador < count($lista))
    {
        echo "While loop | ".$lista[$contador++]."!<br>";
    }
    foreach($lista as $chave => $valor)
    {
        echo "Foreach loop | "."A chave é ".$chave." e o valor é ".$valor."!<br>";
    }
    ?>

    <p>Meu nome completo é: <?php echo $nome_completo?></p>

</body>

</html>