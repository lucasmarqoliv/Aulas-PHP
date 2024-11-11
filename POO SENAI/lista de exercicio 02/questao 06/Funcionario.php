
<?php

// 6 - Implemente uma classe Funcionario com: Atributos nome (público), salario (privado). Métodos setSalario($salario) para definir o salário, getSalario() para retornar o salário e calculaBonus() que retorna o valor de 10% do salário. Crie uma instância, defina valores e exiba o bônus calculado.

class Funcionario {
    public $nome;
    private $salario;


    public function __construct($nome)
    {
        $this -> nome = $nome;
    }

    public function setSalario ($salario) {
        $this -> salario = $salario;
    }

    public function getSalario() {
        return $this -> salario;
    }

    public function calculaBonus() {
        $bonus = ($this -> salario * 10) / 100;
        return $bonus;
    }
}