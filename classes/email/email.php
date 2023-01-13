<?php

namespace App\email;

class Envio
{
    const VERSAO = 1.0;

    public function enviarEmail() : void
    {
        echo "E-mail enviado";
    }

}

function validar(string $email): void
{
    echo "O email $email é valido!";
}