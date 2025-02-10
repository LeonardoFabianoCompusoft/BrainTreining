<?php

function qualquer(){
    $empresa = "Compusoft";
    global $idade;
    $idade = 30;
    $GLOBALS ["nome"] = "Joao";
    
    echo $GLOBALS["empresa"]."<br/>";

}

qualquer();
echo $nome."<br/>";
echo var_dump($GLOBALS);