<?php
    include '../../config/connection.php';
?>

<form action="create.php" method="POST">
    <label for="username">Nome de Usuário</label>
    <input type="text" name="username" id="username">;

    <label for="password">Senha:</label>
    <input type="password" name="password" id="password">

    <button type="submit">Cadastrar:</button>
</form>

<?php
    
    $username = isset($_POST['username']) ? $_POST['username'] : exit() ;
    $password = isset($_POST['password']) ? $_POST['password'] : exit() ;

    //statement
    $stmt = $pdo->prepare('INSERT INTO usuario ( username, password) VALUES ( :username, :password');

    $stmt->binParam(':username', $username);
    $stmt->binParam(':password', $password);
    $stmt->execute();
?>