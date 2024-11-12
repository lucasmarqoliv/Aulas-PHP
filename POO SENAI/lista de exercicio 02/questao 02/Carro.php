
<?php

// 2 - Crie uma classe chamada Carro com os seguintes atributos: marca (público) modelo (público) ano (privado) Adicione um método público setAno($ano) que valide o valor de $ano (o valor deve ser maior que 1885) e um método getAno() para retornar o ano.


class Carro {
    public $marca;
    public $modelo;
    private $ano;


    public function __construct($marca, $modelo)
    {
        $this -> marca = $marca;
        $this -> modelo = $modelo;
    }


    public function setAno($ano) {
        if ($ano > 1885) {
            $this -> ano = $ano;
            return 'Valor do ano superior a 1885';
        }
        else {
            return 'Valor do ano inferior a 1885';
        }
    }

    public function getAno() {
        return $this -> ano;
    }

}
