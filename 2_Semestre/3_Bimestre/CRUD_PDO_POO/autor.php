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

    public function inserir(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $bio = $_POST['bio'];
            $foto = $_POST['foto'];
        
            $stmt = $pdo->prepare("INSERT INTO autor (nome, biografia, foto) VALUES (:nome, :bio, :foto)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':bio', $bio);
            $stmt->bindParam(':foto', $foto);
            $stmt->execute();
        
        }
    }

    public function buscar($id){
        $stmt = $pdo->query("SELECT * FROM autor WHERE id = $id");
	    $autor = $stmt->fetchAll();
    }

    public function buscarTodos(){
        $stmt = $pdo->query("SELECT * FROM autor");
        $autor = $stmt->fetchAll();
    }

    public function atualizar($id){}

    public function deletar($id){
        $stmt = $pdo->prepare('DELETE FROM autor WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

}


?>