<?php
    include '../../config/connection.php';
?>

<form action="create.php" method="POST" class="form">
    <legend></legend>
    <div class="mb-3">
        <label for="titulo" class>Título Do Anuncio</label>
        <input type="text" name="h1" id="titulo">
    </div>
    <div class="mb-3">
        <label for="descricao">Descrição do Anuncio</label>
        <input type="text" name="pdssword" id="descricao">
        
    </div>
    <div class="mb-3">
        <label for="data_public">Data da Publicação</label>
        <input type="text" name="public" id="data_public">
        
    </div>
    <div class="mb-3">
        <label for="nome">Nome do Proprietário:</label>
        <input type="text" name="nome" id="nome">
        
    </div>
    <div class="mb-3">
        <label for="tell">Telefone:</label>
        <input type="text" name="tell" id="tell">
        
    </div>
    <div class="mb-3">
        <label for="marca_veiculo">Marca do Veículo</label>
        <input type="text" name="marc" id="marca_veiculo">
        
    </div>
    <div class="mb-3">
        <label for="modelo_veiculo">Modelo do Veículo</label>
        <input type="text" name="modelo" id="modelo_veiculo">
        
    </div>
    <div class="mb-3">
        <label for="ano_veiculo">Ano do Veículo</label>
        <input type="text" name="date" id="ano_veiculo">
        
    </div>
    <div class="mb-3">
        <label for="cor_veiculo">Cor:</label>
        <input type="text" name="cor" id="cor_veiculo">
        
    </div>
    <div class="mb-3">
        <label for="placa_veiculo">Placa:</label>
        <input type="text" name="placa" id="placa_veiculo">

    </div>
    
    
    
    
    
    <h1>Dados do Veículo:</h1>
    
    
    
    
    
    
    <button type="submit">Cadastrar</button>
</form>

<?php
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
    
    
    //statement
    $stmt = $pdo->prepare('INSERT INTO anuncios (titulo, descricao, data_public, marca_veiculo, modelo_veiculo, ano_veiculo, cor_veiculo, placa_veiculo, nome, telefone) VALUES (:titulo, :descricao, :data_public, :marca_veiculo, :modelo_veiculo, :ano_veiculo, :cor_veiculo, :placa_veiculo, :nome, :telefone)');
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':data_public', $data_public);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':marca_veiculo', $marca_veiculo);
    $stmt->bindParam(':modelo_veiculo', $modelo_veiculo);
    $stmt->bindParam(':ano_veiculo', $ano_veiculo);
    $stmt->bindParam(':cor_veiculo', $cor_veiculo);
    $stmt->bindParam(':placa_veiculo', $placa_veiculo);
    $stmt->execute();
    
    
?>

