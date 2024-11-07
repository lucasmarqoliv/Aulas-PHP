<?php
// criação da classe
class Emprestimo {
    // atributos com encapsulamento private (pode ser acessado apenas dentro da classe) 
    private $id;
    private $data_retirada;
    private $data_devolucao;
    private $multa;
    private $membro_cpf;

    public function __construct($id, $data_retirada, $data_devolucao, $multa, $membro_cpf) {
        // método especial que é executado automaticamente quando você cria um novo objeto da classe. Ele recebe parâmetros para inicializar os atributos do carro. 
        $this -> id = $id;
        $this -> data_retirada = $data_retirada;
        $this -> data_devolucao = $data_devolucao;
        $this -> multa = $multa;
        $this -> membro_cpf = $membro_cpf;
    }

    // São métodos para acessar (getters) e modificar (setters) as propriedades de um objeto de maneira controlada. Embora as propriedades sejam privadas, os métodos públicos podem ser usados para interagir com elas.
    public function getId() {
        return $this -> id;
    }

    public function getDataRetirada() {
        return $this -> data_retirada;
    }

    public function getDataDevolucao() {
        return $this -> data_devolucao;
    }

    public function getMulta() {
        return $this -> multa;
    }

    public function getMembroCpf() {
        return $this -> membro_cpf;
    }

    public function setId($id) {
        $this -> id = $id;
    }

    public function setDataRetirada($data_retirada) {
        $this -> data_retirada = $data_retirada;
    }

    public function setDataDevolucao($data_devolucao) {
        $this -> data_devolucao = $data_devolucao;
    }

    public function setMulta($multa) {
        $this -> multa = $multa;
    }

    public function setMembroCpf($membro_cpf) {
        $this -> membro_cpf = $membro_cpf;
    }
    
}
