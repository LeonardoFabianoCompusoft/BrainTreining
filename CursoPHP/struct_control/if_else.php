<?php
$a = 10;
$b = --$a;

if($a > $b){
    echo "Sim";

}elseif($b % 2 === 0){
    echo "B nao e par";
    echo "<br>";
}elseif($b % 2 === 1){
    echo "B e par";
    echo "<br>";
}else{
    echo "Nao";
}

echo "<br>";
echo "Fim";
echo "<br>";

