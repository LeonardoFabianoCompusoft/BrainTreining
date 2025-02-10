<?php

$msg = "LeoNardo";

// Converte toda a string para minúsculas
echo strtolower($msg) . "\n";
echo "<br/>";

// Converte toda a string para maiúsculas
echo strtoupper($msg) . "\n";
echo "<br/>";

// Converte toda a string para minúsculas usando multibyte
echo mb_strtolower($msg) . "\n";
echo "<br/>";

// Converte a primeira letra da string para maiúscula
echo ucfirst($msg) . "\n";
echo "<br/>";

// Converte a primeira letra de cada palavra para maiúscula
echo ucwords(strtolower($msg)) . "\n";
echo "<br/>";

// Converte a primeira letra de cada palavra para maiúscula
echo ucwords($msg) . "\n";
echo "<br/>";

// Converte a string para maiúsculas, exceto a primeira letra
echo lcfirst(strtoupper($msg)) . "\n";
echo "<br/>";

// Converte a string para minúsculas, exceto a primeira letra
echo ucfirst(mb_strtolower($msg)) . "\n";
echo "<br/>";

// <?php

// $nome = "JOão;HEnrique;rangel";

// $formatCSV = fn($string, $delimiter = ";") => str_replace($delimiter," ",ucwords(strtolower($string),$delimiter));

// echo strtolower($nome) . "\n";
// echo strtoupper($nome) . "\n";
// echo mb_strtoupper($nome) . "\n";

// echo ucfirst(strtolower($nome)) . "\n";
// echo $formatCSV($nome) . "\n";
