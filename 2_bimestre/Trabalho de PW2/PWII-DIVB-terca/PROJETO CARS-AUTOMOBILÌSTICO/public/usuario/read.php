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
        <div>
            <div>
                <h1><strong>Título:</strong><?php echo $cars["titulo"]; ?></h1>
            </div>
            <div>
                <p><strong>Descrição:</strong><?php echo $cars["descricao"]; ?></p>
            </div>
            <div>
                <p><strong>Data da Publicação:</strong><?php echo $cars["data_public"]; ?></p>
            </div>
            <div>
                
            </div>

        </div>
        

        <a href="http://localhost/ETEC/PWII-DIVA-terca/PDO_CRUD/public/usuario/delete.php?id=<?php echo $cars["Id"]; ?>">Remover</a>
        <a href="http://localhost/ETEC/PWII-DIVA-terca/PDO_CRUD/public/usuario/update.php?id=<?php echo $cars["Id"]; ?>">Atualizar</a>
        <hr>
    <?php } ?>






    
    
