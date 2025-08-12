<?php

class Autor{
    private $id;
    private $nome;
    private $bio;
    private $foto;

    public function __construct($nome, $bio, $foto){
        $this->$nome = $nome;
        $this->$bio = $bio;
        $this->$foto = $foto;
    }

    public function inserir(){}

    public function buscar($id){}

    public function buscarTodos(){}

    public function atualizar($id){}

    public function deletar($id){}

}


?>