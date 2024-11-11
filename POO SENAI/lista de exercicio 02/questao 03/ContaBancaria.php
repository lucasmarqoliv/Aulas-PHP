
<?php

// 3 - Crie uma classe chamada ContaBancaria com os seguintes atributos: titular (público) saldo (privado, valor inicial de 0) Adicione métodos: depositar($valor) que adiciona o valor ao saldo. sacar($valor) que subtrai o valor do saldo, se o saldo for suficiente. getSaldo() para exibir o saldo atual.

class ContaBancaria {
    public $titular;
    private $saldo;

    public function __construct($titular, $saldo)
    {   
        $this -> titular = $titular;
        $this -> saldo = $saldo;
    }

    public function depositar($valor) {
        return $this->saldo = $this->saldo + $valor;
    }

    public function sacar($valor) {
        if ($this -> saldo > 0) {
            $this -> saldo = $this -> saldo - $valor;
            return 'Valor sacado: R$'.' '. $valor;
        }
        else {
            return 'Saldo insuficiente';
        }
    }

    public function getSaldo() {
        return $this -> saldo;
    }
}