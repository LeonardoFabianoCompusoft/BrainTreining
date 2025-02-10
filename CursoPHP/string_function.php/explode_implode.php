<?php

$msg = "1|2|3|4|5";

echo var_dump(explode("|", $msg, 2));
echo "<br/>";
echo var_dump(explode("|", $msg, -1));
echo "<br/>";

$letras = "a|b|c|d";
$letras_array = explode("|", $letras);

echo var_dump(implode("|", $letras_array));