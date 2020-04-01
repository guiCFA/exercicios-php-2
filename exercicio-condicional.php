<?php

// Elabore  um  algoritmo  que  efetue  a  leitura  de  números  inteiros  e  
//apresente  uma  mensagem informando se os valores lidos estão dentro ou fora da faixa de 0 a 9

/*--------------------------------- ok
$n = 8;
if($n <= 9){
    echo " O $n está na faixa";
} else{
    echo "O $n não está na faixa";
}
*/


// Elabore  um  algoritmo  que  efetue  a  leitura  de  um  número  inteiro  e 
//apresente  uma  mensagem informando se o valor lido é negativo ou se está entre 0 e 100 ou se é maior que 100.

/* ------------------------------ ok
$n = 500;
if($n < 0){
    echo "O $n é negativo";
} elseif ($n <= 100) {
    echo "O $n está entre os 100";
} else {
    echo "O $n é maior que 100";
}
*/


// Desenvolva um algoritmo que efetue a leitura de um número inteiro e 
//apresente uma mensagem informando se ele é um número par ou ímpar.

/* --------------------------------- ok
$n = 12;
if($n % 2 == 0){
    echo "O número $n é par";
} else {
    echo "O número $n é impar";
}
*/

/* Elabore  um algoritmo que  efetue a leitura de  5 números inteiros e  
apresente o menor e o maior número lido. Não é permitido fazer ordenação.*/

/* ----------------------------------- voltar 
$n = [20, 41, 58, 72, 99];
echo max($n);   
echo min($n);
*/



/*Desenvolva um algoritmo que efetue a leitura de 3 valores, 
identifique se estes valores são válidos para formar um triângulo, 
em caso negativo deve informar ao usuário por meio de uma mensagem, 
caso  positivo,  deve  informar  ao  usuário  por  meio  de  uma  mensagem,  
que  tipo  de  triângulo  os valores/lados formam. */

/* --------------------------- OK
$a = 7;
$b = 5;
$c = 8;

if($a == $b && $b == $c && $c == $a){
    echo " é um triângilo equilatero";
} elseif ($a == $b && $b == $c && $c != $a ){
    echo " é um triângulo isósceles";
} else {
    echo "é um triângulo escaleno";
}
*/

?>/
