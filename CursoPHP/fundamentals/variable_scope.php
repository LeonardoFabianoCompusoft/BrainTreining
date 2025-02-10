<?php

//Atribui uma string para avariavel global
$exemple = "Hello World";


//! A varievel global nao vai ser exibida pois esta sendo chamada dentro de um escopo local
/**
 * function exibir(){
 *      
 *      echo $exemple;
 * 
 * }
 * 
 * exibir();
 */

//TODO Para a variavel global ser exibida dentro do escopo local faz

function exibir(){

    global $exemple;
    echo $exemple;

}

exibir();

//vice-versa

/**
 * function exibir(){
 * 
 *      global $exemple
 *      $exemple = "Hello Workd";
 * 
 * }
 * 
 * exibir();
 * echo $exemple;
 */


 //? se avariavel estiver global e preciso identificar que ela e uma global para exibir no escopo local
?>