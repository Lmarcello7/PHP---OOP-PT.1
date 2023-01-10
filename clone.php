<?php 

require_once 'classes/produto.php';

$prod1 = new Produto;
$prod1->titulo = "SUB-ZERO";
$prod1->descricao = "Cerveja Brasileira";
$prod1->preco = 3.40;

$prod2 = clone $prod1;
$prod2->titulo = "Itaipava";


function alteraProduto($produto)
{
    $produto->titulo = "Dollynho";
    $produto->descricao = "Seu amiguinho";
    $produto->preco = -1;

    return $produto;
}

$prod3 = alteraProduto(clone $prod1);

echo "<pre>";
print_r($prod1);
echo "</pre>";

echo "<pre>";
print_r($prod2);
echo "</pre>";

echo "<pre>";
print_r($prod3);
echo "</pre>";
