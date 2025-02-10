<?php
//comparar dados
$valorA = "10";
$valorB = 11;


echo "<br>";
echo var_dump($valorA == $valorB);

//? assim vai para comprar valores das variaveis

$valorC = null;

echo "<br>";
echo var_dump($valorC ?? "Nao há valor");

//? compara se nao ha valor e exibe que nao ha valor

/**
 * == igual
 * === identico
 * (!=) ou >, < diferente
 * (!==) nao identico
 * < ou > menor ou maior
 * <= ou >= maior igual ou menor igual
 * <=> spaceship retorna o valor que indica o que e
 */