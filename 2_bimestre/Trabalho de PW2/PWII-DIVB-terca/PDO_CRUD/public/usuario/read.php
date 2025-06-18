<?php 
    include '../../config/connection.php'; 

    $stmt = $pdo->query('SELECT * FROM usuario');
    $usuarios = $stmt->fetchAll();

    if( isset($_GET['id']) ) {
        $id = $_GET['id'];
        echo "O id $id foi removido!!!";
    } 

    // echo "<pre>";
    // echo var_dump($usuarios);
?>

    <?php foreach ($usuarios as $indice => $user) {  ?>
        <p><strong>Nome:</strong><?php echo $user["username"]; ?></p>
        <a href="http://localhost/ETEC/PWII-DIVA-terca/PDO_CRUD/public/usuario/delete.php?id=<?php echo $user["id"]; ?>">Remover</a>
        <a href="http://localhost/ETEC/PWII-DIVA-terca/PDO_CRUD/public/usuario/update.php?id=<?php echo $user["id"]; ?>">Atualizar</a>
        <hr>
    <?php } ?>






    
    
