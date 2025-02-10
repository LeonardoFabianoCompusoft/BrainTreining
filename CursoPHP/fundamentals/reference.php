<?php

$a = 50;

$b = &$a;
$c = $a;

echo var_dump("a", $b);
echo "<br>";
echo var_dump("b", $a);
echo "<br>";
echo var_dump("c", $c);
echo "<br>";

//Alterar valor do $a

$a = 250;

echo var_dump("a", $b);
echo "<br>";
echo var_dump("b", $a);
echo "<br>";
echo var_dump("c", $c);
echo "<br>";

//? o valo c se espelha no valor inicial de a, logo quando se referencia b = &a toda vez que o valor se altera b muda conforme o alterado no a
?>