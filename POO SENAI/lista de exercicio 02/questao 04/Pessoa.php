
<?php

// 4 - Implemente uma classe Pessoa com os seguintes atributos:nome (público) idade (privado) Adicione métodos: setIdade($idade) para definir a idade, verificando se o valor é maior que zero. getIdade() para obter a idade. Crie uma instância dessa classe, defina a idade e exiba o nome e a idade da pessoa.

class Pessoa {
    public $nome;
    private $idade;

    public function __construct($nome)
    {
        $this -> nome = $nome;
    }

    public function setIdade($idade) {
        if ($idade > 0) {
            return $this -> idade = $idade;
        }
        else {
            return 'Idade abaixo ou igual a zero!';
        }
    }

    public function getIdade() {
        return $this -> idade;
    }
}