<?php
// representa um objeto (nome começa com letra maiuscula)
// abstract impede que instancie a classe. (Porque a classe Carro é um modelo para quem herdar dela)
abstract class Carro { 
    // propriedades e
    // encapsulamento (refere a visibilidade de propriedades ou métodos, existe: public, qualquer  pessoa pode ter acesso. private, permite acesso apenas dentro da classe. E protected permite acesso apenas para quem herda da classe)
    public $modelo;  
    protected $velocidade = 0;
    protected $velocidadeMaxima = 0;


    public function obterVelocidade() {
        return $this -> velocidade;
    }

    // função dentro de classe se chama método. 
    public function acelerar() {
            // $this faz com que se obtenha da classe as propriedades.
        if ($this -> velocidade + 10 <= $this -> velocidadeMaxima) {
            $this -> velocidade += 10;
        }
    }

    public function frear() {
        if ($this-> velocidade - 10 >= 0) {
            $this-> velocidade -= 10;
        }
    }
}

    // HERANÇA (extends): Classe Ferrari herda métodos da classe pai (Carro), e pode definir seus próprios métodos, o que se chama POLIMORFISMO. 
    class Ferrari extends Carro {
        public function __construct() { // // método que executa automaticamente quando instânciamos um objeto. 
            $this -> velocidadeMaxima = 360;
        }
        public function acelerar () {
            $this -> velocidade += 20; // ex. De polimorfismo. herdou a velocidade do metodo acelerar, mas adaptou comforme seu gosto.
        }
    }


// instanciação do objeto (criação e atribuição a uma variavel)
$carro = new Ferrari; 
$carro -> modelo = "Ferrari";
$carro -> acelerar(); //chamando método
$carro -> acelerar();
$carro -> acelerar();
$carro -> frear();

