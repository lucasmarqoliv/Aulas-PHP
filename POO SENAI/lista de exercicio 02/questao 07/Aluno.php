
<?php

//7 - Crie uma classe Aluno com: Atributos nome (público), nota (privado). Métodos setNota($nota) para definir a nota e getNota() para obter a nota. Verifique se a nota é maior que 0 e menor ou igual a 10. Crie uma instância, defina valores válidos e exiba a nota.

class Aluno {
    public $nome;
    private $nota;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function setNota($nota) {
        if ($nota > 0 && $nota <= 10) {
            $this -> nota = $nota;
        } else {
            echo 'Nota fora do intervalo'.'<br>';
        }
    }

    public function getNota() {
        return $this->nota;
    }
}

