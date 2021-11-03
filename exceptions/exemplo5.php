<?php

function dividir($x, $y) {
    if ($y == 0) {
        throw new Exception('é uma divisão por zero');
    }
    $resultado = $x / $y;
    return $resultado;
};

try {
    echo dividir(10,2)."\n";
    echo dividir(5,0)."<\n>";    
} catch (Exception $e) {
    echo 'Exceção capturada: ',  $e->getMessage(), "\n";
}finally{
    echo "\nFinalizado.";
}