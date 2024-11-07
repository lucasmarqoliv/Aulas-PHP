<?php

class Livro {
    private $id;
    private $nome;
    private $valor;

    public function __construct($id, $nome, $valor)
    {
        $this -> id = $id;
        $this -> nome = $nome;
        $this -> valor = $valor;
    }

    public function getId() {
        return $this -> id;
    }

    public function getNome() {
        return $this -> nome;
    }

    public function getValor() {
        return $this -> valor;
    }

    public function setId($id) {
        $this -> id = $id;
    }

    public function setNome($nome) {
        $this -> nome = $nome;
    }

    public function setValor($valor) {
        $this -> valor = $valor;
    }

}