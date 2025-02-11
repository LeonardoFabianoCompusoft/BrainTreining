<?php

$frutas = [
    "estacao" => "maça",
    "doce" => "uva",
    "pera",
    "manga"
];

echo var_dump($frutas);
echo "<br/>";

echo var_dump(array_keys($frutas, "uva"));
echo var_dump(array_values($frutas));
