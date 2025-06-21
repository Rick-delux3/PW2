<?php 
    include '../../config/connection.php'; 

    $stmt = $pdo->query('SELECT * FROM anuncios');
    $anuncios = $stmt->fetchAll();

    if( isset($_GET['Id']) ) {
        $id = $_GET['Id'];
        echo "O id $Id foi removido!!!";
    } 

    // echo "<pre>";
    // echo var_dump($usuarios);
?>

    <?php foreach ($anuncios as $indice => $cars) {  ?>
        <p><strong>Título:</strong><?php echo $cars["titulo"]; ?></p>
        <a href="http://localhost/ETEC/PWII-DIVA-terca/PDO_CRUD/public/usuario/delete.php?id=<?php echo $cars["Id"]; ?>">Remover</a>
        <a href="http://localhost/ETEC/PWII-DIVA-terca/PDO_CRUD/public/usuario/update.php?id=<?php echo $cars["Id"]; ?>">Atualizar</a>
        <hr>
    <?php } ?>






    
    
