<?php

function carregar(string $classe){
    $caminhoClasses = __DIR__ . "/../classes/$classe.php"; //CRIANDO O CAMINHO PARA ACESSAR AS CLASSES
    
    if(file_exists($caminhoClasses)){
        require $caminhoClasses;
    }
    
    var_dump($caminhoClasses);
}

spl_autoload_register('carregar'); //VERIFICA SE EXISTE UMA INSTANCIA *NEW*