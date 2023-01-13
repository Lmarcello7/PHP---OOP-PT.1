<?php

require_once 'classes/produto.php';

$prod1 = new Produto;
$prod1->titulo = "SUB-ZERO"; 
$prod1->descricao = "Cerveja Brasileira";
$prod1->preco = 3.40;

$prod2 = &$prod1;
$prod2->titulo = "SUB-ZERO";
$prod2->descricao = "Cerveja Brasileira";
$prod2->preco = 3.40;

$prod1 = new Produto;
$prod1->titulo = "SUB-ZERO"; 
$prod1->descricao = "Cerveja Brasileira";
$prod1->preco = 3.40;

$prod2 = new Produto;
$prod2->titulo = "SUB-ZERO";
$prod2->descricao = "Cerveja Brasileira";
$prod2->preco = 3.40;

foreach ($prod1 as $nome => $valor) {
     $teste = "$nome = $valor <br>";
     print_r($teste);
}