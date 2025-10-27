<?php
    class Pessoa {
        public $nome;
        public $email;
    }

    class Aluno extends Pessoa {
        public $rm;
    }

    class Professor extends Pessoa {
        public $formacao;

        public function __construct($nome, $email){
            $this->nome = $nome;
            $this->email = $email;
        }
    }

    $aluno = new Aluno();
    $aluno->nome = 'Solange';
    $aluno->email = 'se@hotmail.com';
    $professor = new Professor('Carlitos', 'email@gmail.com');

    
?>