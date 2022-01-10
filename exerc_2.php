<?php
/* 
2) Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...), escreva um programa na linguagem que desejar onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando se o número informado pertence ou não a sequência.

IMPORTANTE:
Esse número pode ser informado através de qualquer entrada de sua preferência ou pode ser previamente definido no código;
*/

$numero = 13; // digite aqui o numero 
$i = 0;
$anterior_1 = 1;
$anterior_2 = 0;

while ($numero > $i) {
    $i = $anterior_1 + $anterior_2;
    $anterior_2 = $anterior_1;
    $anterior_1 = $i;
}

if( $i == $numero){
    echo "O numero ". $numero . " pertence a sequencia de fibonaci";
}else {
    echo "O numero ". $numero . " NÃO pertence a sequencia de fibonaci";
}

?>