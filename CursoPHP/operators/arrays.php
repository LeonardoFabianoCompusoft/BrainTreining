<?php

/**
 * $a + $b uniao
 * $a == $b igualdade, true se tem o mesmo valor
 * $a === $b identidade, true se ambos tem mesma chave
 * $a != $b desigualdade, true se $a e diferemte de $b
 * $a <> $b desigualdade, true se nao e igual
 * $a !== %b nao identidade, true se nao sao identicos
 */

$a = ["1", "2", "3"];
$b = ["3", "4", "5"];

$c = $a + $b;

echo var_dump($c);
echo "<br>";

$d = [200, 50, 35];
$e = [2 => 35, 0 => 200, 1 => "50"];

echo var_dump($d == $e);
echo "<br>";
echo var_dump($d === $e);
echo "<br>";
