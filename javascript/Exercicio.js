let numero = prompt("Digite um numero:");

if(numero > 10 && numero < 20)
{
    alert(numero + " é maior que 10 e menor que 20!");
}
else{
    alert("numero invalido");
}

if(numero % 5 == 0){
    alert("numero múltiplo de 5!");
}
else{
    alert("numero não é múltiplo de 5.")
}
let numero = 1;

while(numero <= 100)
{
	if(numero % 2 != 0)
  {
  	console.log(numero + " é impar!");
  }
  else{
  	console.log(numero + " é par!");
  }
  numero++;
}

let repeticoes = prompt("Quantas vezes você quer ver a mensagem?")

for(int = 1; int <= repeticoes; int++)
{
	console.log(int + "º " + "mensagem.");
}