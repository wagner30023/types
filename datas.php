<?php

$data = new DateTime();
echo $data->format('d-m-Y H:i:s').PHP_EOL;

$intervalo = new DateInterval('P5Y10M5DT10H50M10S'); // adiciona o periodo de cinco minutos
// $data->add($intervalo);
$data->sub($intervalo);
var_dump($data);