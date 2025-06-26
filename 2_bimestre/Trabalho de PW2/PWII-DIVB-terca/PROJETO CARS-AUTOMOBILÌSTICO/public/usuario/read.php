<?php include '../../includes/header_anuncios'?>

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

    <div class="d-flex">
    <div class="col-2 sidebar d-flex flex-column align-items-center">
      <button class="btn btn-dark">VENDAS FEITAS</button>
      <button class="btn btn-dark">CLIENTES</button>
      <button class="btn btn-dark">PACERIAS</button>
    </div>

    <div class="col-10 container-anuncios">
      <div class="row">
        <?php foreach ($anuncios as $indice => $cars) { ?>
          <div class="col-md-6">
            <div class="card-anuncio">
              <h2><?php echo strtoupper($cars['titulo']); ?></h2>
              <p><strong><?php echo $cars['descricao']; ?></strong></p>
              <p><?php echo strtoupper($cars['modelo_veiculo']); ?><br>
              <?php echo strtoupper($cars['marca_veiculo']); ?><br>
              <?php echo $cars['ano_veiculo']; ?><br>
              <?php echo strtoupper($cars['cor_veiculo']); ?><br>
              PLACA: <?php echo strtoupper($cars['placa_veiculo']); ?></p>
              <p><strong>LIGUE PARA:</strong><br><?php echo $cars['telefone']; ?></p>
              <?php if (!empty($cars['imagem'])): ?>
                <img src="data:image/jpeg;base64,<?php echo base64_encode($cars['imagem']); ?>" alt="Imagem do carro">
              <?php endif; ?>
              <div class="btn-group">
                <a href="delete.php?id=<?php echo $cars['Id']; ?>" class="btn btn-custom">Deletar</a>
                <a href="update.php?id=<?php echo $cars['Id']; ?>" class="btn btn-custom">Atualizar</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <?php
    include '../includes/footer.php'
  ?>






    
    
