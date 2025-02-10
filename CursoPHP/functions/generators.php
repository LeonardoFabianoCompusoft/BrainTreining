<?php

function fila()
{

    yield "Anthony";
    yield "Djalma";
    yield "Glaucio";
    yield "João";
    yield "Ronaldo";

}

$fila = fila();

var_dump($fila->current());
$fila->next();
var_dump($fila->current());
$fila->next();
var_dump($fila->current());
$fila->next();
var_dump($fila->current());
$fila->next();
var_dump($fila->current());
$fila->next();
var_dump($fila->current());
