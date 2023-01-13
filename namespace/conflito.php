<?php

include_once "../classes/email/email.php";
include_once "../classes/sms/sms.php";

$sms = new App\sms\Envio;
$sms->enviarSms();

$email = new App\email\Envio;
$email->enviarEmail();

App\email\validar('teste@teste.com');
//$email-> echo App\email\VERSAO . '<br>'; 
