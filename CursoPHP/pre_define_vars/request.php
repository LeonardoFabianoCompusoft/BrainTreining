<?php

echo var_dump($_SERVER["REQUEST_METHOD"]);
echo var_dump($_REQUEST["nome"]);


?>

<form method="post">

    <input type="text" name="nome"/>
    <input type="submit"/>

</form>