<?php
class carro{

}
class moto{

} 

$fusca = new carro();

echo var_dump($fusca instanceof carro);
echo "<br>";
echo var_dump($fusca instanceof moto);
echo "<br>";

//? instanceof para verificar de qual classe o objeto e