<?php
//Pascal case 
 class Pessoa {
    //private - A variavel está acessível internamente na classe
    //protected - A variável está acessível através de herança
    //public - A variavel está acessível externamente
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function Apresentar(){
        echo "A pessoa $this->nome diz Olá";
    }
 };

 //Instância
 $aluno = new Pessoa("Duratestino", 30);

 $aluno2 = new Pessoa("Cornélios", 78);

echo '<pre>';
 print_r($aluno);
 print_r($aluno2);
?>