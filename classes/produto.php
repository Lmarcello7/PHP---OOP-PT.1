<?php

namespace App\Classes;
class Produto
{
    public string $titulo;
    public string $descricao = "Cerveja Brasileira";
    public float $preco;

    public function cadastraCodigo(string $codigo) : void
    {
        $this->codigoBarra = $codigo;
    }

    public function acessaCodigo() : void
    {
       echo "<br>" . $this->codigoBarra;
    }
}