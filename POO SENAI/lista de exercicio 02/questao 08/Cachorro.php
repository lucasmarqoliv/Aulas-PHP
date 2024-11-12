
<?php

// 8 - Implemente uma classe Cachorro com os seguintes atributos: nome (público) idade (privado) Adicione métodos setIdade($idade) para definir a idade e latir() que exibe uma mensagem "Woof Woof Woof!".

class Cachorro {
    public $nome;
    private $idade;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function latir() {
        return 'Woof Woof Woof!';
    }
}