<?php

class Produto
{
    public $titulo;
    public $descricao = "Cerveja Brasileira";
    public $preco;

    public function cadastraCodigo($codigo){
        $this->codigoBarra = $codigo;
    }

    public function acessaCodigo(){
       echo "<br>" . $this->codigoBarra;
    }
}