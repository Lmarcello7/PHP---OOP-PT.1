<?php

require_once "classes/fornecedor.php";

$fornecedor = new Fornecedor;

echo "<pre>";
print_r($fornecedor);
echo "</pre>";

$fornecedor->logar(new class
{
    public $nome = "João";
    public $senha = "123456";
});
