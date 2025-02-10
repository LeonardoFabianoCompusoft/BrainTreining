<?php

$x = 0;

do{
    $x++;

}while((int) date("5") % 2 === 0);

echo var_dump($x);
