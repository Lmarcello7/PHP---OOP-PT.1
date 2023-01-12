<?php 

declare(strict_types = 1);

include_once "classes/fornecedor.php";

$fornecedor = new Fornecedor;
$fornecedor->cnpj = "17136363";
$fornecedor->nomeFantasia = "Olivos Biotecnologia";
$fornecedor->razaoSocial = "Meu Armazem ltda";
$fornecedor->logar($fornecedor);

echo "<pre>";
print_r($fornecedor);
echo "</pre>";