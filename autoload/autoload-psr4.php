<?php

function carregar(string $nomeCompleto){
    $nsRaiz = 'App\\';
    $diretorioBase = __DIR__ . '\..\classes';

    $tamanhoNsRaiz = strlen($nsRaiz);

    $nsRaizRecebido = substr($nomeCompleto, $tamanhoNsRaiz);

    if($nsRaiz !== $nsRaizRecebido){
        return;
    };

    $caminhoRelativo = substr($nomeCompleto, $tamanhoNsRaiz);

    $caminhoArquivo = $diretorioBase . str_replace("\\" , "/", $caminhoRelativo) . 'php';

    if(file_exists($caminhoArquivo)){
        require $caminhoArquivo;
    }

    var_dump($tamanhoNsRaiz);
}

spl_autoload_register('carregar'); //VERIFICA SE EXISTE UMA INSTANCIA *NEW*