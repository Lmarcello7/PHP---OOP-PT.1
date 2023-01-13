<?php

//STD CLASS PODE SER USADO PARA CRIAR CLASSES PARA TRANSPORTE DE DADOS, SEM PRECISAR CRIAR CLASSES, FACILITANDO O PROCESSO

$generico = new stdClass;
$generico->nome = "TreinaWeb";
$generico->curso = "PHP - OO";

echo "<pre>";
print_r($generico);
echo "<pre>";

//=============CONVERTENDO ARRAY PARA OBJETO==============//
$array = [
    'nome' => 'TreinaWeb',
    'curso' => 'PHP - OO'
];

$objeto = (object) $array;

echo "<pre>";
print_r($objeto);
echo "<pre>";