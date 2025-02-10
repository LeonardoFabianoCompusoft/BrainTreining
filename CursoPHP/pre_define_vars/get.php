<?php

if(isset($_GET["nome"])){
    echo $_GET["nome"];
}

echo isset($_GET["empresa"])?$_GET["empresa"]:"";

$get = fn($key) => isset($_GET[$key])?$_GET[$key]:"";

$id = (int)$get("id") + 1;

echo '<a href="wid=$id='.$id.'">Proximo</a>';