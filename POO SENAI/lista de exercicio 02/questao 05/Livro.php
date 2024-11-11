
<?php

// 5 - Crie uma classe Livro com: Atributos titulo (público), autor (público) e preco (privado). Métodos setPreco($preco) para definir o preço e getPreco() para retornar o valor. Em seguida, crie uma instância, defina os valores e exiba as informações do livro.

class Livro {
    public $titulo;
    public $autor;
    private $preco;


    public function __construct($titulo, $autor) 
    {
        $this -> titulo = $titulo;
        $this -> autor = $autor;
    }

    public function setPreco($preco) {
        $this -> preco = $preco;
    }

    public function getPreco() {
        return $this -> preco;
    }
}