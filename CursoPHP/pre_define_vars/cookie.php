<?php

// $f = new ReflectionFunction("setcookie");

// echo var_dump($f -> getParameters());

// exit;

session_start();

echo var_dump($_SESSION["empresa"]);

setcookie(
    "name",
    "value",
    time() + 3600
);

echo var_dump($_COOKIE);

