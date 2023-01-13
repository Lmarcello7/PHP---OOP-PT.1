<?php 

declare(strict_types = 1);

include_once "classes/fornecedor.php";

$fornecedor = new Fornecedor;
$fornecedor->cnpj = "17136363";
$fornecedor->nomeFantasia = "Armazem";
$fornecedor->razaoSocial = "Armazen das Carnes";
$fornecedor->logar($fornecedor);

echo "<pre>";
print_r($fornecedor);
echo "</pre>";