<?php

$teste = (int)date("5") % 2 === 0;

echo $teste;
echo "<br>";

while((int)date("5") % 2 === 0){
    
    $x++;

}

echo var_dump($x);