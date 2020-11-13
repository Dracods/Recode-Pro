<?php 
    $primeiroNumero = 16;
    $segundoNumero = 3;

    function Somar($numero1, $numero2)
    {
        $resultado = $numero1 + $numero2;
        return $resultado;
    }
    function maiorOuMenor($numero, $valorComparado){
        $resultado = "$numero é menor que $valorComparado";
        if($numero > $valorComparado) $resultado ="$numero é maior que $valorComparado";
        return $resultado;
    }
    $soma = Somar($primeiroNumero, $segundoNumero);

    echo "$primeiroNumero + $segundoNumero = $soma <br>";
    echo maiorOuMenor($soma, 10);

    for($result = 50; $result <= 150; $result++){
        if($result % 2 != 0){
            echo "<p>$result é impar </p><br>";
        }
    }

    $lista = [];
    for($int = 0; $int < 20; $int++){
        array_push($lista, rand(0, 100));
    }

    echo "<br><h1>Loop For</h1>";
    for($i =0; $i < count($lista); $i++){
        echo "$lista[$i] no index: $i <br>";
    }

    echo "<br><h1>Loop While</h1>";
    $controleWhile = 0;
    while($controleWhile < count($lista))
    {
        echo "$lista[$controleWhile] no index: $controleWhile <br>";
        $controleWhile++;
    }

    echo "<br><h1>Foreach</h1>";
    foreach($lista as $indice => $numero){
        echo "$numero no index: $indice <br>";
    }

?>