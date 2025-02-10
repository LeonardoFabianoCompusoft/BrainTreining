<?php

$leitura = 20;
$eof = 250;

while($leitura <= $eof){
    if($leitura == 80){
        echo "sair";
        echo "<br>";
        break;
    }
$leitura += 20;
echo $leitura;
echo "<br>";
}

echo "Fora do comando";
echo "<br>";

for($x = 3; $x <= 10; $x++){
    for($y = 1; $y <= 10.; $y++){
        echo "$x x $y - " . ($x * $y) . "<br>";
    }
}