<?php
//atribuir valor
$total = 1000;
$valorA = $total;

//divisao e atribuição
//!$valorA /= 2;
$desconto = 27;
$formula = $desconto / 100;

//multiplica e atribui
$valorA *= $formula;

$total -= $valorA;

echo $total;
echo "<br>";