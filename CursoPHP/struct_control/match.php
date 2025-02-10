<?PHP

$msg = "200";

$retorno = match($msg){
    "200" => "sucesso",
    "300" => "redireciona",
    "400" => "falhou",
    default => "unknown"
};

echo var_dump($retorno);