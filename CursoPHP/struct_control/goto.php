<?php

echo var_dump("injeção");

goto destino;

echo var_dump("conteudo");

return;

destino:

echo var_dump("injeção");

goto conteudo;