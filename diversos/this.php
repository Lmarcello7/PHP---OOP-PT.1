<?php 
require_once "classes/cliente.php";

$cliente = new Cliente;
$cliente->nome = "Matt";
$cliente->idade = 47;
$cliente->endereco = "Rua Alguma";
$cliente->telefone = "4002-8922";

var_dump($cliente->nome);