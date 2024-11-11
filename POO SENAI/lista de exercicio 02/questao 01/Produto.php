<?php

// 1 - Crie uma classe chamada Produto com os seguintes atributos: nome (público) preco (privado) Implemente métodos públicos para definir e obter o valor do atributo preco.

class Produto {
    public $nome;
    private $preco;


    public function __construct ($nome, $preco) {
        $this -> nome = $nome;
        $this -> preco = $preco;
    }

    public function setPreco($preco) {
        $this -> preco = $preco;
    }
    public function getPreco() {
        return $this -> preco;
    }
}

