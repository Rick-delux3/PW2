<?php
    include '../../config/connection.php';
?>
<?php
    include '../../includes/header_anuncios.php'

?>

<form action="create.php" method="POST" enctype="multipart/form-data">
  <div class="container-form">
    <div class="left-info">
      <img src="../../assets/mcqueen1.png" alt="carro" width="150">
      <h3>OS ANUNCIOS CRIADOS VÃO DIRETO PARA A SUA PÁGINA DE ANUNCIOS!!</h3>
      <p>VOCÊ PODERÁ EDITAR QUANDO QUISER!!</p>
      <img src="../../assets/mcqueen2.png" alt="carro" width="150">
      <p>VENHA FAZER PARTE DA NOSSA EQUIPE!! VOCÊ PODE VENDER E REVENDER QUANDO QUISER!!</p>
    </div>
    <div class="right-form">
      <h2>CADASTRO DE ANÚNCIO</h2>
      <div class="form-group">
        <label for="titulo">Nome do anúncio:</label>
        <input type="text" name="titulo" required>
      </div>
      <div class="form-group">
        <label for="descricao">Descrição Anuncio:</label>
        <textarea name="descricao" required></textarea>
      </div>
      <div class="form-group">
        <label for="data_public">Data de Publicação:</label>
        <input type="text" name="data_public" required>
      </div>
      <h4>DADOS DO VEÍCULO:</h4>
      <div class="form-group">
        <label>Modelo:</label>
        <input type="text" name="modelo_veiculo" required>
      </div>
      <div class="form-group">
        <label>Marca:</label>
        <input type="text" name="marca_veiculo" required>
      </div>
      <div class="form-group">
        <label>Ano:</label>
        <input type="text" name="ano_veiculo" required>
      </div>
      <div class="form-group">
        <label>Cor:</label>
        <input type="text" name="cor_veiculo" required>
      </div>
      <div class="form-group">
        <label>Placa:</label>
        <input type="text" name="placa_veiculo" required>
      </div>
      <div class="form-group">
        <label>Nome do Proprietário:</label>
        <input type="text" name="nome" required>
      </div>
      <div class="form-group">
        <label>Telefone do Proprietário:</label>
        <input type="text" name="telefone" required>
      </div>
      <div class="form-group">
        <label>Foto do veículo:</label>
        <input type="file" name="imagem" accept="image/*" required>
      </div>
      <button type="submit">Cadastrar</button>
    </div>
  </div>
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $titulo = $_POST['titulo'];
      $descricao = $_POST['descricao'];
      $data_public = $_POST['data_public'];
      $nome = $_POST['nome'];
      $telefone = $_POST['telefone'];
      $marca_veiculo = $_POST['marca_veiculo'];
      $modelo_veiculo = $_POST['modelo_veiculo'];
      $ano_veiculo = $_POST['ano_veiculo'];
      $cor_veiculo = $_POST['cor_veiculo'];
      $placa_veiculo = $_POST['placa_veiculo'];
      $imagem = file_get_contents($_FILES['imagem']['tmp_name']);



    
    
    //statement
    $stmt = $pdo->prepare('INSERT INTO anuncios (titulo, descricao, data_public, marca_veiculo, modelo_veiculo, ano_veiculo, cor_veiculo, placa_veiculo, nome, telefone, imagem) VALUES (:titulo, :descricao, :data_public, :marca_veiculo, :modelo_veiculo, :ano_veiculo, :cor_veiculo, :placa_veiculo, :nome, :telefone, :imagem)');
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
    $stmt->bindParam(':imagem', $imagem);
    $stmt->execute();
    
  
    echo "<script>alert('Anúncio cadastrado com sucesso!'); window.location.href='anuncios.php';</script>";
    exit;
  }




    
?>

