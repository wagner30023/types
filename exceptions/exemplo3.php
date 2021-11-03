<?php

function ValidaUsuario()
{
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        throw new Exception("Campos obrigatórios não foram preenchidos! \n");
    }

    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57
];


try {
    $status = ValidaUsuario($usuario);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

echo "\n ...executando \n";
