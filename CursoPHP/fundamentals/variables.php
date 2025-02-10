<?php

//Variavel que vai receber um valor
$primeiroNome = "Leonardo";//string
$sobrenome = "Fabiano";//string
$numero = 1;//int
$numero2 = 2.5;//float

//*Concatenando variaveis
$nomeCompleto = $primeiroNome . " " . $sobrenome;

//Imprimindo variavel
echo $nomeCompleto;
echo "<br>";
echo $primeiroNome;
echo "<br>";
echo $sobrenome;
echo "<br>";

//Mostrando o tipo da variavel e o valor
var_dump($primeiroNome);
var_dump($sobrenome);
var_dump($nomeCompleto);
var_dump($numero);
var_dump($numero2);
//*e possivel ver ele com quebra de linha na fonte do codigo Ctrl+U


//? echo "<br>"; usado para pular linha
//? var_dump() usado para mostrar o tipo da variavel e o valor
?>