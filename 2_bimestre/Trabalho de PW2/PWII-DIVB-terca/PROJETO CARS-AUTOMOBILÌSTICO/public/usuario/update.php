<?php 
    include '../../config/connection.php';

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $Id = isset($_GET['Id']) ? $_GET['Id'] : exit() ;
    
        if (empty($Id)) {
            echo 'É necessário informar o código!!!';
            exit();
        }

        $stmt = $pdo->prepare('SELECT * FROM anuncios WHERE Id = :Id');
        $stmt->bindParam(':Id', $Id); //insere os id em :id da linha acima
        $stmt->execute(); //executa a consulta que foi preparada
        $anuncios = $stmt->fetchAll(); //converter os dados em Array
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Id = isset($_POST['Id']) ? $_POST['Id'] : exit() ;
        $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : exit() ;
        $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : exit() ;
        $data_public = isset($_POST['data_public']) ? $_POST['data_public'] : exit() ;
        $nome = isset($_POST['nome']) ? $_POST['nome'] : exit() ;
        $telefone = isset($_POST['tell']) ? $_POST['tell'] : exit() ;
        $marca_veiculo = isset($_POST['marca_veiculo']) ? $_POST['marca_veiculo'] : exit() ;
        $modelo_veiculo = isset($_POST['modelo_veiculo']) ? $_POST['modelo_veiculo'] : exit() ;
        $ano_veiculo = isset($_POST['ano_veiculo']) ? $_POST['ano_veiculo'] : exit() ;
        $cor_veiculo = isset($_POST['cor_veiculo']) ? $_POST['cor_veiculo'] : exit() ;
        $placa_veiculo = isset($_POST['placa_veiculo']) ? $_POST['placa_veiculo'] : exit() ;
    
        if (empty($Id)) {
            echo 'É necessário informar o código!!!';
            exit();
        }

        if (empty($titulo)) {
            echo 'É necessário informar o nome de Título!!!';
            exit();
        }

        if (empty($descricao)) {
            echo 'É necessário informar a descrição!!!';
            exit();
        }
        if (empty($data_public)) {
            echo 'É necessário informar a data!!!';
            exit();
        }
       
        
        $stmt = $pdo->prepare('UPDATE anuncios SET titulo=:titulo, descricao=:descricao, data_public=:data_public WHERE Id=:Id');
        $stmt->bindParam(':Id', $Id);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':data_public', $data_public);
        $stmt->execute();

        Header("Location: read.php");
    }
    
?>

<form action="update.php" method="POST">
    <input type="hidden" name="Id" value="<?php echo $anuncios[0]["Id"]; ?>">
    <label for="anuncio">Titulo do Anuncio:</label>
    <input type="text" name="anuncio" id="titulo" value="<?php echo $anuncios[0]["titulo"]; ?>">
    <br><br>
    <label for="descricao">Descrição:</label>
    <input type="text" name="descricao" id="descricao" value="<?php echo $anuncios[0]["descricao"]; ?>">
    <label for="data_public">Data da Publicação::</label>
    <input type="text" name="descricao" id="data_public" value="<?php echo $anuncios[0]["data_public"]; ?>">
    <br><br>
    <button type="submit">Cadastrar</button>
</form>







    
    
