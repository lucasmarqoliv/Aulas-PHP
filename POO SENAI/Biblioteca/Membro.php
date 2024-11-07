<?php

class Membro {
    private $cpf;
    private $endereco;
    private $nome;

    public function __construct($cpf, $endereco, $nome)
    {
        $this -> cpf = $cpf;
        $this -> endereco = $endereco;
        $this -> nome = $nome;
    }

    public function getCpf() {
        return $this -> cpf;
    }

    public function getEndereco() {
        return $this -> endereco;
    }

    public function getNome() {
        return $this -> nome;
    }

    public function setCpf($cpf) {
        $this -> cpf = $cpf;
    }

    public function setEndereco($endereco) {
        $this -> endereco = $endereco;
    }

    public function setNome($nome) {
        $this -> nome = $nome;
    }

}