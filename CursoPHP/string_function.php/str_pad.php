<?php

$nome = "Leonardo";

$email = "1234@123.com";

$idade= 30;

echo str_pad($nome, 30, ".", STR_PAD_LEFT) ."\n";
echo str_pad($email, 30, ".", STR_PAD_LEFT) ."\n";
echo str_pad($idade, 30, ".", STR_PAD_LEFT) ."\n";
// A função str_pad preenche uma string até um certo comprimento com outro string
// No caso, estamos preenchendo com pontos (.) à esquerda (STR_PAD_LEFT)
// para que todas as strings tenham um comprimento de 30 caracteres

