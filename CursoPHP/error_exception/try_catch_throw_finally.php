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

try{
    if(!$nome){
    throw new Exception("Exception!",  400);
    }
}catch(Exception $e){
    echo $e->getMessage();
    //echo var_dump($e);
    echo "Error";
} finally{
    echo var_dump("Final");
}

$exibeErro = fn($erro) => throw new Exception($erro);
echo $exibeErro("Deu erro");
echo "Depois da exceção";