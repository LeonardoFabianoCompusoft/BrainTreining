<?php

/**
 * and para e, verdadeiro a quanto b
 * or para ou verdadeiro se a e b sao verdadeiro
 * xor para ambos verdadeiro se a ou b sao verdadeiro
 * (!) para nao verdadeiro se a nao e verdadeiro
 * && para e entre eles verdadeiro tanto a quanto b
 * || para ou entre eles verdadeiro se a ou b sao verdadeiros
 */

$a = 10;
$b = 20;
$c = 30;

 echo var_dump($a > $b && $a > $c);
 echo "<br>";
 echo var_dump($a < $b && $a > $c);
 echo "<br>";
 echo var_dump($a < $b || $a > $c);
 echo "<br>";

//Para inverter a logica
 echo var_dump(!($a < $b));
 echo "<br>";

 //? segue a regra de verdadeiro ou falso, exemplo= true+true = true, false+false = false, true+false = true