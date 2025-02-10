<?php

/** Dados Escalares
 * *String
 * *Int
 * *Float ou Double
 * *Boolean
 * 
 * Tipos Compostos
 * *Array
 * *Object
 * *Callable
 * *Iterable
 * 
 * Tipos Especiais
 * *Resource
 * *Null
 * 
 * Pseudo-Tipos
 * *mixed
 * *void
 */


//null e usado para inicializar uma variavel sem valor
$valor = null;

//usado para mostrar o tipo da variavel
gettype($valor);

//usado para verificar se a variavel e nula, assim como outros tipos
is_null($valor);
is_int($valor);
is_bool($valor);

//retorna o tipo da variavel e qual classe ela pertence
get_debug_type($valor);

//usa-se para mostrar o tipo da variavel e o valor
var_dump($valor);

//*String
echo "String";
echo "<br>";
$sobrenome = "Fabiano";

$nome = "Leonardo $sobrenome";
$nome2 = 'Leonardo $sobrenome';

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";
echo gettype($nome);
echo "<br>";
echo get_debug_type($nome);
echo "<br>";
echo gettype($nome2);
echo "<br>";
echo get_debug_type($nome2);
echo "<br>";
echo "<br>";
//? aspas duplas podem ser usadas para concatenar variaveis
//? aspas simples nao podem ser usadas para concatenar variaveis

//*Int
echo "Int";
echo "<br>";
$idade = 20;

echo $idade;
echo "<br>";
echo gettype($idade);
echo "<br>";
echo get_debug_type($idade);
echo "<br>";
echo "<br>";

//*Float
echo "Float";
echo "<br>";
$numero = 2.5;

echo $numero;
echo "<br>";
echo gettype($numero);
echo "<br>";
echo get_debug_type($numero);
echo "<br>";
echo "<br>";

//*Boolean
echo "Boolean";
echo "<br>";
$verdadeiro = true;
$falso = false;

echo $verdadeiro;
echo "<br>";
echo $falso;
echo "<br>";
echo gettype($verdadeiro);
echo "<br>";
echo gettype($falso);
echo "<br>";
echo get_debug_type($verdadeiro);
echo "<br>";
echo get_debug_type($falso);
echo "<br>";
echo "<br>";

//*Array
echo "Array";
echo "<br>";
$frutas = ["Banana", "Maça", "Morango"];

echo $frutas[0];
echo "<br>";
echo $frutas[1];
echo "<br>";
echo $frutas[2];
echo gettype($frutas);
echo "<br>";
echo get_debug_type($frutas);
echo "<br>";
echo "<br>";

//*Object
echo "Object";
echo "<br>";
class Pessoa
{
    public $nome;
    public $idade;
}

$pessoa = new Pessoa();
$pessoa->nome = "Leonardo";
$pessoa->idade = 20;

echo $pessoa->nome;
echo "<br>";
echo $pessoa->idade;
echo "<br>";
echo gettype($pessoa);
echo "<br>";
echo get_debug_type($pessoa);
echo "<br>";
echo "<br>";

//? para acessar atributos de um objeto e necessario usar ->
//? para instanciar um objeto e necessario usar new
//? para criar uma classe e necessario usar class
//? para criar atributos e metodos e necessario usar public
//? para criar um atributo e necessario usar $nome
//? para criar um metodo e necessario usar function

//*interable e callable

$frutas = function (): iterable {
    return ["Banana", "Maça", "Morango"];
};

echo $frutas()[0];
echo "<br>";
echo $frutas()[1];
echo "<br>";
echo $frutas()[2];
echo "<br>";
echo gettype($frutas());
echo "<br>";
echo get_debug_type($frutas());
echo "<br>";
echo var_dump(is_iterable($frutas()));
echo "<br>";
echo var_dump(is_callable($frutas));
echo "<br>";
echo "<br>";

//? (iterable) e interavel
//? (callable) e chamavel

//*Resource

$arquivo = fopen("tags.php", "a+");

echo gettype($arquivo);
echo "<br>";
echo get_debug_type($arquivo);
echo "<br>";
echo "<br>";

//? resource e usado para manipular arquivos
//? fopen e usado para abrir um arquivo
//? a+ e usado para abrir um arquivo para leitura e escrita

//*Mixed

function teste(mixed $valor): void
{
    echo $valor;
}

echo gettype($valor);
echo "<br>";
echo get_debug_type($valor);
echo "<br>";
echo "<br>";

//? mixed e usado para aceitar qualquer tipo de dado
//? void e usado para nao retornar nada (usado de exemplo)