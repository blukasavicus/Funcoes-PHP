<?php

echo "<h1>Criando funções em PHP</h1>";

//Função com parâmetro (um ou mais) e sem retorno

function parametros($param1, $param2, $param3, $param4){
    echo "Parâmetro 1: $param1; parâmetro 2: $param2; parâmetro 3: $param3; parâmetro 4: $param4";
};

//Chamando a função com parâmetros e sem retorno:

parametros("Ana", "Beatriz", "Lukasavicus", "Silva"); 
echo "<br>";

//Função sem parâmetro e sem retorno

function olamundo(){
    echo "Olá mundo!";
};

//Chamando a função sem parâmetros e sem retorno:

olamundo();
echo "<br>";

//Função sem parâmetro, com retorno

function obterDataAtual(){
    return date('d-m-Y');
};

//Chamando a função sem parâmetros e com retorno:

echo "Data atual: " . obterDataAtual();
echo "<br>";

//Função com parâmetro (um ou mais), com retorno

function multiply($num1, $num2){
    return $num1 * $num2;
};

//Chamando a função com parâmetros e com retorno:

$resultado = multiply(4, 3);
echo "O resultado da multiplicação é: $resultado";


?>