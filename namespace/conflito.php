<?php

require_once '../autoload/autoload-psr4.php';

$sms = new App\sms\Envio;
$sms->enviarSms();

$email = new App\email\Envio;
$email->enviarEmail();

App\email\validar('teste@teste.com');
//$email-> echo App\email\VERSAO . '<br>'; 
