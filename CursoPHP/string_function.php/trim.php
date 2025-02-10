<?php

$msg = "     
 1      ";

echo var_dump(ltrim($msg));
echo var_dump(rtrim($msg));
echo var_dump(trim($msg, " \t\n\r"));

// A função ltrim() remove espaços em branco ou outros caracteres predefinidos do lado esquerdo de uma string
// A função rtrim() remove espaços em branco ou outros caracteres predefinidos do lado direito de uma string
// A função trim() remove espaços em branco ou outros caracteres predefinidos de ambos os lados de uma string

// \t - Representa um caractere de tabulação
// \n - Representa um caractere de nova linha
// \r - Representa um caractere de retorno de carro