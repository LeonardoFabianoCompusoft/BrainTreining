<?php
function manipuladorDeException($exception){
    echo var_dump($exception);

    //echo $exception->message;
    //nao exibe pois e protegido

    echo $exception->getMessage(). "<br/>";
    echo $exception->getFile(). "<br/>";
    echo $exception->getLine(). "<br/>";
}

set_exception_handler("manipuladorDeException");

throw new Exception("Exception!",  400);

echo "Depois da exceção";