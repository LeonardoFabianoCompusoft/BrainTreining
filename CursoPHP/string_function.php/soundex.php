<?php

$original = "eminem";

$search = "minem";


echo var_dump(soundex($original) == soundex($search));
// A função soundex retorna uma representação fonética de uma string
// Aqui estamos comparando as representações fonéticas de $original e $search
echo var_dump(metaphone($original) == metaphone($search));
// A função metaphone retorna uma representação fonética de uma string
// Assim como a função soundex, ela é usada para comparar palavras com sons semelhantes
// Aqui estamos comparando as representações fonéticas de $original e $search usando metaphone
