<?php
//tratamento de erro com @

$resultado = @file("asdfghj") or 
die("nao foi possivel encontrar o arquivo");