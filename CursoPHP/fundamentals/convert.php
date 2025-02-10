<?php

$valor = "10";

//convertendo para inteiro
$valor *= 2;
//convertendo para float
$valor *= 2.5;
//convertendo para string
$novoValor = (string) $valor;
//convertendo para boolean
$valor = (bool) $valor;

echo var_dump(get_debug_type($valor));
echo "<br>";
settype($valor, "int");
echo var_dump(get_debug_type($valor));
echo "<br>";
settype($valor, "float");
echo var_dump(get_debug_type($valor));
echo "<br>";
settype($valor, "string");
echo var_dump(get_debug_type($valor));

//? Todas variaveis do php sao do tipo variant, ou seja, ela pode ser de qualquer tipo, mesmo sem declarar o tipo da variavel
//? O php faz a conversao automatica de tipos de variaveis, mas e possivel forcar a conversao de tipos de variaveis
//? Se a variavel tiver numero inteiro ela vira inteiro, se tiver string ela vira string e assim vai
//? settype() e usado para forcar a conversao de tipos de variaveis


?>