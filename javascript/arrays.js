/* Arrays são a forma mais simples de criar um conjunto de dados ordenados */
let vetor = ["GTX 1050 ti", "RTX 2080", "GTX 1070 Super"];
/* A ordem da array é sempre da esquerda para direita, o endereço dos itens(index)
começa no numero 0 e cada item adiciona mais um*/
/* Se quisermos acessar a RTX 2080 teremos que acessar o endereço 1, para isso é só escrever
o nome da array e colocar o endereço entre colchetes */
vetor[1];
/* Podemos substituir os valores dos itens atraves de seu endereço */
vetor[0] = "RTX 3080";
/* Agora trocamos a GTX 1050 ti por uma RTX 3080 */

/* Metodos */

/* O push() adiciona e empurra o novo item para o final da array */
vetor.push("AMD Ryzen 3700");
console.log(vetor[3]);
 
/* O pop() remove o ultimo item da array */
/* O splice() remove um item da array, possui duas propriedades: a primeira é o endereço(index) e a segunda quantos items quer remover,
Se quisermos remover o AMD Ryzen 3700 é só fazer vetor.splice(3, 1) e pronto está removido */
/* O shift() remove o primeiro item da array */

/* A propriedade length retorna quantos items temos na array */
console.log(vetor.length);

/* Arrays são consideradas objetos, por isso tem metodos e propriedades */
