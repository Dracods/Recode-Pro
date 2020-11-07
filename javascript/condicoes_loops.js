/*If, else if e else */
function SeSenaoEntao(){
    let numero = 5;
    /*Se numero for maior ou igual a 6*/
    if(numero >= 6)
    {
        /* Se for verdadeiro ele vai executar
        este bloco de codigo*/
        alert("O numero é igual ou maior a 6!");
    }
    /* Senão se o numero for igual a 5 */
    else if(numero == 5){
        alert("O numero é igual a 5");
    }
    /*Senão*/
    else
    {
        /* Se for false ele vai executar este */
        alert("O numero não é igual ou maior a 6.");
    }
}
/*Switch */
function Chave()
{
    let nome = "Vinicius";
    /*O switch vai comparar a variavel que está dentro dos parenteses */
    switch(nome){
        /*O default vai ser acionado se o valor que foi colocado
        não for encontrado. Ela é totalmente opcional*/
        default:
            alert("Usuario(a) não encontrado.");
            break;
        /*Case(caso) checa se o valor é igual ao que estiver a sua frente
        Neste caso ele está vendo se nome é igual a "Jebson" */
        case "Jebson":
            alert("Usuario(a) Jebson autenticado!");
            break;
        case "Melquezideque":
            alert("Usuario(a) Melquezideque autenticado!");
            break;
        /* Se for igual ele vai executar o codigo
        Neste caso a caixa de alerta vai aparecer
        exibindo a mensagem "Usuario(a) Vinicius autenticado!" */
        case "Vinicius":
            alert("Usuario(a) Vinicius autenticado!");
            break;
        /* Podemos usar varios cases para um unico resultado */
        case "Jobscreison":
        case "Nurivania":
        case "Meloscolencia":
            alert("Esse nome realmente existe?")
            break;
    }
    
}
/*While e For */

/* O while vai se repetir até que a condição seja atingida */
function Enquanto(){
    /* criamos uma variavel de controle */
    let repeticao = 1;
    let valorMultiplicado = 7;
    let ateQualNumeroMultiplicar = 13;
    /*Enquanto a condição não for atingida o while vai repetir o codigo que está dentro dele */
    while(repeticao <= ateQualNumeroMultiplicar)
    {
        /* Publicamos o valor da multiplicação no log */
        console.log(valorMultiplicado + " x " + repeticao + " = " + (valorMultiplicado * repeticao));
        /* Toda vez que o while executa, adicionamos mais um no valor repetição (incremento) */
        repeticao++;
    }
    /* Podemos quebrar loops com o break; */
}
/* O loop for precisa que você coloque a variavel de controle, condição e incremento na sua definição*/
function LoopFor()
{
    let valorMultiplicado = 7;

    let numeroDeRepetições = 10;
    for(let contador = 1; contador <= numeroDeRepetições; contador++)
    {
        console.log(valorMultiplicado + " x " + contador + " = " + (valorMultiplicado * contador));
    }
}
