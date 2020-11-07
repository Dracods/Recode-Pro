<?php 
    function Multiplica($numero)
    {
        $resultado = $numero * 2;
        return $resultado;
    }
    function Soma($numero1, $numero2)
    {
        $soma = $numero1 + $numero2;
        return $soma;
    }
    $numero = 8;
    $numero2 = 20;
    $soma = Soma($numero, $numero2);
    $multiplicacao = Multiplica($numero);
    echo "Multiplicação".$multiplicacao."<br>";
    echo "Soma: ".$soma;
?>