<?php

use App\Classes\Cliente;

require_once "../classes/cliente.php";

$cli = new Cliente('Lucas' , '4002-8922' , 39);
$cli->cpf = '///./////./.00';
$cli->rg = '233-532-542-54-22';
$cli->cidade;
$cli->alterar('Teste' , 40);
$cli(false);
//unset($cli); Apaga tudo

//exit; TERMINA A EXECUÇÃO DO SCRIPT

$cliSerializado = serialize($cli);

// var_dump($cliSerializado);

$cli2 = unserialize($cliSerializado);

echo "<br>" . $cli;

// echo "<pre>";
// print_r($cli2);
// echo "</pre>";