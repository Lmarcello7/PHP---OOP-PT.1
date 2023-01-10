<?php

require_once "classes/produto.php";
require_once "classes/cliente.php";

$prod1 = new Produto;

$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;

var_dump($prod1);

echo "<br>";

$prod2 = new Produto;

$prod2->titulo = "Itaipava";
$prod2->preco = 1.90;

var_dump($prod2);

echo "<br>";
echo "<br>";

$cli = new Cliente;

$cli->cadastraCliente("Matt");
$cli->idade = 25;
$cli->endereco = "São Paulo";
$cli->telefone = '4002-8922';

$cli->comprar();

$newCli = get_class($cli);
$Cli2 = new $newCli;
$cli2->nome = "Maria";

echo("<pre>");
print_r($cli);
echo("</pre>");