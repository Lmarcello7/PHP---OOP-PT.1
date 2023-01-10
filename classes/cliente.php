<?php 

//DECLARAÇÃO DE CLASSES #F00
//Declaração de Classes: Declaração de classes é basicamente um modelo para gerar itens de uma característica específica, 
//podem existir inúmeras classes dentro de um mesmo arquivo, porém é recomendado criar um arquivo para cada tipo de declaração.

//PROPRIEDADES: #F00
// Propriedades: São as propriedades que definem uma classe.

// Para definir uma propriedade, é primeiro necessário definir um operador de visibilidade: public, private

class Cliente
{
    public $nome;
    public $idade;
    public $endereco;
    public $telefone;
    public function comprar()
    {
        echo "O cliente ($this->nome) realizou uma compra";
    }

    public function cadastraCliente($nome)
    {
        $this->nome = $nome;
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


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar cliente</title>
</head>
<body>
    <form>
        <fieldset>
            <legend>Cadastrar cliente</legend>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <label for="nome">Idade</label>
            <input type="text" name="idade" id="idade">
            <label for="nome">Endereço</label>
            <input type="text" name="endereco" id="endereco">
            <label for="nome">Telefone</label>
            <input type="text" name="tel" id="tel">
            <button type="submit">Enviar</button>
        </fieldset>
    </form>
</body>
</html>