<?php

function ValidaUsuario()
{
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){
        return false;
    }

    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57
];

$usuarioValido = ValidaUsuario($usuario);

if(!$usuarioValido){
    echo 'Usuário inválido';
    return false;
}

echo "\n ...executando \n";