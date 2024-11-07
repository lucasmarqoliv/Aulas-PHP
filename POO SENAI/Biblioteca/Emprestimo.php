<?php

class Emprestimo {
    private $id;
    private $data_retirada;
    private $data_devolucao;
    private $multa;
    private $membro_cpf;

    public function __construct($id, $data_retirada, $data_devolucao, $multa, $membro_cpf) {
        $this -> id = $id;
        $this -> data_retirada = $data_retirada;
        $this -> data_devolucao = $data_devolucao;
        $this -> multa = $multa;
        $this -> membro_cpf = $membro_cpf;
    }

    public function getId() {
        return $this -> id;
    }

    public function getData_retirada() {
        return $this -> data_retirada;
    }

    public function getData_devolucao() {
        return $this -> data_devolucao;
    }

    public function getMulta() {
        return $this -> multa;
    }

    public function getMembro_cpf() {
        return $this -> membro_cpf;
    }

    public function setId($id) {
        $this -> id = $id;
    }

    public function setData_retirada($data_retirada) {
        $this -> data_retirada = $data_retirada;
    }

    public function setData_devolucao($data_devolucao) {
        $this -> data_devolucao = $data_devolucao;
    }

    public function setMulta($multa) {
        $this -> multa = $multa;
    }

    public function setMembro_cpf($membro_cpf) {
        $this -> membro_cpf = $membro_cpf;
    }
    
}
