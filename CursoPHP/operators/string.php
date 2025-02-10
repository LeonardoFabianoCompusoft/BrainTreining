<?php

$primeiroNome = "Leonardo";
$segundoNome = "Fabiano";

echo $primeiroNome . " " . $segundoNome;
echo "<br>";

$texto = "hello";
$texto .= "world";
echo $texto. "<br>";

//? para nao retornar a variavel tem uma utilização heredoc ''
$texto2 = <<<EOT
<pre>
$primeiroNome
testando
testando
</pre>
EOT;

echo $texto2;
echo "<br>";