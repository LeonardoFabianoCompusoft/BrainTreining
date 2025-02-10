<?php

$html = '<a href="https://hcode.com.br">Acesse</a>';

echo var_dump($html);
echo "<br/>";
echo var_dump(htmlentities($html, ENT_NOQUOTES));
echo "<br/>";

