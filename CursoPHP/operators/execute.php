<?php

//usa-se grave ``
$resultado = `dir`;


//? A codificação OEM é a codificação de caracteres que o sistema operacional usa para
//? representar caracteres em arquivos e em comandos do sistema (como no terminal)
$oem = sapi_windows_cp_get("oem");

$resultado = sapi_windows_cp_conv(
    $oem,
    65001,
    $resultado
);

echo "<pre>$resultado</pre>";

//? 65001 codigo utf-8 padrao
