<?php

/**
 * 
 * TODO: 1. Crie três variáveis para armazenar o seu nome, idade e esporte predileto.
 * 
 * TODO: 2. Crie um array com três tecnologias que você pretende aprender.
 * 
 * TODO: 3. Converta a variável com a idade para string e mostre com var_dump o valor dela antes e depois da conversão.
 * 
 * TODO: 4. Imprima na tela os valores de nome, idade e esporte predileto criados no escopo global por meio de uma função.
 * 
 */


//*Exercicio 1

$nome = "Leonardo";
$sobrenome = "Fabiano";
$nomeCompleto = $nome . " " . $sobrenome;
$idade = 20;
$esporte = "Futebol";

//*Exercicio 2

$tecs = ["PHP", "JavaScript", "Devops"];
echo "Tecnologia 1: $tecs[0]";
echo "<br>";
echo "Tecnologia 2: $tecs[1]";
echo "<br>";
echo "Tecnologia 3: $tecs[2]";
echo "<br>";
echo "<br>";


//*Exercicio 3

echo var_dump($idade);
echo "<br>";
settype($idade, "String");
echo var_dump($idade);
echo "<br>";
echo "<br>";

//*Exercicio 4

echo $nomeCompleto;
echo "<br>";
echo $idade;
echo "<br>";
echo $esporte;
echo "<br>";
echo $tecs[1];
echo "<br>";

