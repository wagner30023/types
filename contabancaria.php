<?php

declare(strict_types=1);

class ContaBancaria
{
    /**
     * @var string
     */

    public $banco;

    /**
     * @var string
     */

    private $nomeTitular = 'Gustavo Fraga';

    /**
     * @var string
     */

    public $nomeAgencia = '3467';

    /**
     * @var string
     */

    private string $numeroConta;

    /**
     * @var float
     */

    public $saldo = 100.00;

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $nomeAgencia,
        string $numeroConta,
        float $saldo
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->nomeAgencia = $nomeAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo(): string
    {
        return 'Saldo Atual: ' . $this->saldo;
    }

    public function Depositar($depositar): float
    {
        return $this->saldo += $depositar;
    }

    public function Sacar($saque): float
    {
        if ($this->saldo < $saque) {
            echo "Saldo insuficiente para saque";
        } else {
            return $this->saldo -= $saque;
        }
    }
}


$conta = new ContaBancaria(
    'Banco do Brasil',
    'Gustavo Fraga',
    '002368',
    '61 99204-1351',
    300.00
);

print_r($conta);
// exit();
var_dump($conta->saldo);

// $conta->saldo;
echo PHP_EOL;
echo $conta->obterSaldo();
echo PHP_EOL;
echo 'Deposito: ' . $conta->Depositar(300);
echo PHP_EOL;
echo 'Saldo atual: ' . $conta->obterSaldo();
echo 'Saque: ' . $conta->Sacar(200);
echo PHP_EOL;
echo 'Saldo atual: ' . $conta->obterSaldo();
