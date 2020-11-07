
<?php
/*Criar um programa em PHP para verificar os lados de um triângulo.
Informar valores para as variáveis e através de uma estrutura de controle exibir a informação do nome do triângulo.
Atividade com 15minutos de duração.

Escaleno: todos os lados são diferentes
Isósceles: Apenas dois lados são iguais
Equilátero: Todos os lados são iguais */

echo "<h2> Triangulos </h2>";
$ladoA = 2;
$ladoB = 7;
$ladoC = 6;

if ($ladoA == $ladoB && $ladoB == $ladoC) {
    echo "É um triângulo Equilátero!";
} else if ($ladoA == $ladoB && $ladoB != $ladoC || $ladoB == $ladoC && $ladoB != $ladoA || $ladoA == $ladoC && $ladoC != $ladoB) {
    echo "É um triângulo Isósceles!";
} else {
    echo "É um triângulo Escaleno!";
}

if ($ladoA + $ladoB > $ladoC && $ladoC + $ladoB > $ladoA && $ladoA + $ladoC > $ladoB) {
    echo "<br> O Triângulo é valido!";
} else {
    echo "<br> O Triângulo não é valido.";
}

/*Um comerciante comprou um produto e quer vendê-lo com lucro de 45% se o valor da compra for menor que 20,00; 
    caso contrário, o lucro será de 30%. 
    Informar o nome do comerciante e o valor do produto. Exiba o nome do comerciante e valor da venda atualizado.
    */

echo "<h2> Comerciante </h2>";
$nome_comerciante = "Padre Quemedo";
$valor_produto = 25.50;
echo "Valor do produto: R$" . $valor_produto . "<br>";
$lucro = 0;
if ($valor_produto < 20.00) {
    $lucro = .45;
} else {
    $lucro = .30;
}
$valor_final = ($valor_produto + ($valor_produto * $lucro));
echo "O comerciante {$nome_comerciante} comprou o produto por: R$ {$valor_produto} .<br>E ira vendê-lo por: R$ {$valor_final} ";

/* Criar um arquivo .php para que as instruções seguintes sejam realizadas: 
    informar qual a operação aritmética será realizada. 
    Cada opção do case deverá a executar a referida operação aritmética.
    soma, subtração, divisão, multiplicação e resto da divisão.
    */
echo "<h2> Switch </h2>";
$operacao = 4;
$primeiro_numero = 7;
$segundo_numero = 7;
$resultado_operacao = 0;
echo "<h3>Codigo das operações: </h3><br>Soma: 0;<br>Subtração: 1;<br>Divisão: 2;<br><br>Multiplicação: 3;<br>Resto da Divisão: 4.";
echo "<h4>Operação atual: {$operacao} </h4>";

echo "Primeiro numero: {$primeiro_numero} <br>Segundo numero: {$segundo_numero} <br><br>";
switch ($operacao) {
    case 0:
        $resultado_operacao = $primeiro_numero + $segundo_numero;
        echo "Soma entre {$primeiro_numero} e {$segundo_numero} é {$resultado_operacao} ";
        break;
    case 1:
        $resultado_operacao = $primeiro_numero - $segundo_numero;
        echo "Subtração entre {$primeiro_numero} e {$segundo_numero} é {$resultado_operacao} ";
        break;
    case 2:
        $resultado_operacao = $primeiro_numero / $segundo_numero;
        echo "Divisão entre {$primeiro_numero} e {$segundo_numero} é {$resultado_operacao} ";
        break;
    case 3:
        $resultado_operacao = $primeiro_numero * $segundo_numero;
        echo "Multiplicação entre {$primeiro_numero} e {$segundo_numero} é {$resultado_operacao} ";
        break;
    case 4:
        $resultado_operacao = $primeiro_numero % $segundo_numero;
        echo "Resto da divisão entre {$primeiro_numero} e {$segundo_numero} é {$resultado_operacao} ";
        break;
}
/* Criar um programa .php para que dentro de uma estrutura de decisão seja 
exibido apenas os valores múltiplos de 3 (usar resto de divisão). 
O intervalo de valores deverá ser entre os números 3 e 157. */
echo "<h2> Loop </h2>";
$comeco = 3;
$fim = 157;
while($comeco <= $fim)
{
    if($comeco % 3 == 0)
    {
        echo $comeco."<br>";
    }
    $comeco++;
}

/* criar um programa .php para que possa ser criado um array com 5 informações quaisquer 
e a estrutura de repetição deverá exibir a informação que está contida no array, 
bem como informar qual é o índice daquela informação.*/

echo "<h2> Array </h2>";

$lista = ['Afonso', 'Antonia', 'Claudio', 'Daniel', 'Vinicius'];
foreach($lista as $nome)
{
    echo "Foreach: ".$nome."<br>";
}
for($contador = 0; $contador < count($lista); $contador++){
    echo "For: ".$lista[$contador]."<br>";
}
?>