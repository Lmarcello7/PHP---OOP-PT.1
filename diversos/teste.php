<?php

class Mensagem
{
    public $texto;
}

function alteraTexto(){
    $textoAlterado = "PHP ORIGEM!";
    return $textoAlterado;
}

$mensagem = new Mensagem;
var_dump($mensagem);


//Defina uma classe chamada Produto(), com as propriedades nome e valor e o método desconto(), que recebe por parâmetro um percentual de desconto. 
//Este percentual deve ser descontado do valor do produto.

class Produto
{
    public $nome;
    public $valor;

    public function desconto($pencentual){
        $desconto = $this->valor * $pencentual;
        $this->valor = $this->valor - $desconto; 
        return $desconto;
    }
}

$produto = new Produto;
$produto->nome = "Mouse";
$produto->valor = 19.90;
$produto->desconto(1.00);

echo('<pre>');
print_r($produto);
echo('</pre>');