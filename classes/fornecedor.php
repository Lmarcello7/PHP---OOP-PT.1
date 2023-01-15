<?php 

namespace App\Classes;
class Fornecedor
{
    const PAIS = "Brasil"; //criando uma constante, um valor que não muda
    public string $razaoSocial;
    public string $nomeFantasia;
    public string $cnpj;

    public function logar(object $usuario) : void
    {
        if($usuario->nome == "João" && $usuario->senha == "123456"){
            echo "$usuario->nome está autorizado";
        } else {
            echo "$usuario->nome não está autorizado";
        }
    }
}