<?php

class Pessoa{
    public $nome; // Acessivel fora da classe
    private $id; // acessivel apenas na classe
    protected $idade; // acessivel através de herança


    public function Falar(){
        echo "A pessoa $this->nome diz Olá!!";
    }
};
$ser = new Pessoa();

$ser->nome = "João";




?>