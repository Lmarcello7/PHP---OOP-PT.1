<?php 

//DECLARAÇÃO DE CLASSES #F00
//Declaração de Classes: Declaração de classes é basicamente um modelo para gerar itens de uma característica específica, 
//podem existir inúmeras classes dentro de um mesmo arquivo, porém é recomendado criar um arquivo para cada tipo de declaração.

//PROPRIEDADES: #F00
// Propriedades: São as propriedades que definem uma classe.

// Para definir uma propriedade, é primeiro necessário definir um operador de visibilidade: public, private


namespace App\Classes;
class Cliente
{
    public string $nome;
    public int $idade;
    public string $endereco;
    public string $telefone;
    public function __construct(string $nome, string $telefone, int $idade)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->idade = $idade;
    }

    
    public function __set(string $nomePropriedade , $valorPropriedade): void
    {
        if($nomePropriedade === "cpf"){
            $this->cpf = str_replace('.', '' , $valorPropriedade);
        } else {
            $this->$nomePropriedade = $valorPropriedade;
        }
    }

    public function __get(string $nomePropriedade)
    {
        return "A propriedade não existe";
    }

    public function __invoke(bool $status): void
    {
        if($status === true){
            echo "Usuario $this->nome está ativo";
        } else{
            echo "Usuario $this->nome não está ativo";
        }
    }

    public function __sleep() : array
    {
        return ['nome', 'idade'];
    }

    public function __wakeup(): void
    {
        $this->serializado = "Serializado";
    }
    public function __call(string $nome, array $argumentosMetodos): void
    {
        if($nome === "alterar"){
            $this->nome = $argumentosMetodos[0];
            $this->idade = $argumentosMetodos[1];
        }
    }

    // public function __destruct()
    // {
    //     echo "O obj foi destruido";
    // }

    public function comprar() : void //void significa que n retorna nada
    {
        echo "O cliente ($this->nome) realizou uma compra";
    }

    public function cadastraCliente(string $nome) : void // QUANDO UMA FUNÇÃO NÃO RETORNA NADA É DO TIPO VOID
    {
        $this->nome = $nome;
    }

    public function __toString(): string
    {
        return $this->nome . ', ' . $this->idade;
    }
}


// if(isset($_REQUEST['nome'])){
//     $nome = $_REQUEST['nome'];
//     echo $nome;
// }

// if(isset($_REQUEST['idade'])){
//     $idade = $_REQUEST['idade'];
//     echo $nome;
// }

// if(isset($_REQUEST['endereco'])){
//     $end = $_REQUEST['endereco'];
//     echo $nome;
// }

// if(isset($_REQUEST['tel'])){
//     $tel = $_REQUEST['tel'];
//     echo $nome;
// }
