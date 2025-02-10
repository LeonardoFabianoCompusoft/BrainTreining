<?php

$comentario = 'ola <a href = "#"><strong>leo</strong></a>!';

echo strip_tags($comentario, "<strong>");