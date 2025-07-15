<?php 
    include '../../config/connection.php';
    
    $Id = isset($_GET['Id']) ? $_GET['Id'] : exit() ;

    if (empty($Id)) {
        echo 'É necessário informar o código!!!';
        exit();
    }

    $stmt = $pdo->prepare('DELETE FROM anuncios WHERE Id = :Id');
    $stmt->bindParam(':Id', $Id);
    $stmt->execute();

    Header("Location: read.php?Id=$Id");
?>







    
    
