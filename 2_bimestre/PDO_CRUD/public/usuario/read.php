<?php 
include '../../config/connection.php';

$stmt = $pdo->query('SELECT * FROM usuario');
$usuarios = $stmt->fetchAll();

//echo "<pre>";
//echo var_dump($usuarios);

?>

<?phpforeach ($usuarios as $indice => $user) { ?>
    
    <p>
        <strong>Nome da Heroina:</strong><?php echo $user['username']; ?>
    </p>
    
    
<?php } ?>
