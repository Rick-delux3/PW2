<?php
    class Pessoa2{
        public $nome;
        public $endereco;
        public $CPF;
        public $idade;

        function __construct($nome, $endereco, $CPF, $idade)
        {
           $this->nome = $nome;
           $this->endereco = $endereco;
           $this->CPF = $CPF;
           $this->idade = $idade;
        }
    }

$nome = "João";
$endereco = "Tatuí";
$CPF = "44055450818";
$idade = 25;


$ser = new Pessoa2($nome, $endereco, $CPF, $idade)

?>