<?php
//Pascal case 
 class Pessoa {
    //private - A variavel está acessível internamente na classe
    //protected - A variável está acessível através de herança
    //public - A variavel está acessível externamente
    public $nome;
    public $idade;

    public function Apresentar(){
        echo "A pessoa $this->nome diz Olá";
    }
 };

 //Instância
 $aluno = new Pessoa();
 $aluno->nome = 'João';
 $aluno->idade = 20;


 $aluno2 = new Pessoa();
 $aluno2->nome = "Testonildo";
 $aluno2->idade = 18;

echo '<pre>';
 print_r($aluno);
 print_r($aluno2);
?>