<?php

require_once 'classes/produto.php';

$prod1 = new Produto;
$prod1->titulo = "SUB-ZERO"; 
$prod1->descricao = "Cerveja Brasileira";
$prod1->preco = 3.40;
$prod1->desconto = 10;
$prod1->cadastraCodigo('2010201');
$prod1->acessaCodigo();

var_dump($prod1);
