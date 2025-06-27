<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style-work.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style_form-update.css">
  <link rel="stylesheet" href="../css/style_headers_usuario.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container d-flex justify-content-between align-items-center">


      <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
        <img src="./img/Logo_empresa.png" alt="Logo" class="logo-img">
        <span class="brand-name">CARS</span>
      </a>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDesktop">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse justify-content-end" id="navbarDesktop">
        <ul class="navbar-nav align-items-center gap-4">
          <li class="nav-item">
            <a class="nav-link text-white fw-semibold" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-semibold" href="create.php">Cadastrar Anuncio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-semibold" href="read.php">Voltar para anuncios</a>
          </li>
          <?php
          session_start();
          if (isset($_SESSION['name']))
          ?>
          <li class="nav-item d-flex align-items-center gap-2 text-white">
            <img src="http://pluspng.com/img-png/png-user-icon-circled-user-icon-2240.png" alt="User Icon" class="user-icon">
            <span class="fw-semibold"><?php echo htmlspecialchars($_SESSION['nome']); ?></span>
          </li>
          <?php  ?>
        </ul>
      </div>

    </div>
  </nav>





  <?php
  include '../../config/connection.php';

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $Id = isset($_GET['Id']) ? $_GET['Id'] : exit();

    if (empty($Id)) {
      echo 'É necessário informar o código!!!';
      exit();
    }

    $stmt = $pdo->prepare('SELECT * FROM anuncios WHERE Id = :Id');
    $stmt->bindParam(':Id', $Id); //insere os id em :id da linha acima
    $stmt->execute(); //executa a consulta que foi preparada
    $anuncios = $stmt->fetchAll(); //converter os dados em Array
  }
  ?>


  <form action="update.php" method="POST" enctype="multipart/form-data">
    <div class="container-form">
      <div class="right-form">
        <h2>CADASTRO DE ANÚNCIO</h2>
        <div class="form-group">
          <input type="hidden" name="Id" value="<?php echo $anuncios[0]['Id']; ?>">
          <label for="titulo">Titulo do anúncio:</label>
          <input type="text" name="titulo" required value="<?php echo $anuncios[0]["titulo"]; ?>">
        </div>
        <div class="form-group">
          <label for="descricao">Descrição Anuncio:</label>
          <textarea name="descricao" required><?php echo $anuncios[0]["descricao"]; ?></textarea>
        </div>
        <div class="form-group">
          <label for="data_public">Data de Publicação:</label>
          <input type="text" name="data_public" required value="<?php echo $anuncios[0]["data_public"]; ?>">
        </div>
        <h4>DADOS DO VEÍCULO:</h4>
        <div class="form-group">
          <label>Modelo:</label>
          <input type="text" name="modelo_veiculo" required value="<?php echo $anuncios[0]["modelo_veiculo"]; ?>">
        </div>
        <div class="form-group">
          <label>Marca:</label>
          <input type="text" name="marca_veiculo" required value="<?php echo $anuncios[0]["marca_veiculo"]; ?>">
        </div>
        <div class="form-group">
          <label>Ano:</label>
          <input type="text" name="ano_veiculo" required value="<?php echo $anuncios[0]["ano_veiculo"]; ?>">
        </div>
        <div class="form-group">
          <label>Cor:</label>
          <input type="text" name="cor_veiculo" required value="<?php echo $anuncios[0]["cor_veiculo"]; ?>">
        </div>
        <div class="form-group">
          <label>Placa:</label>
          <input type="text" name="placa_veiculo" required value="<?php echo $anuncios[0]["placa_veiculo"]; ?>">
        </div>
        <div class="form-group">
          <label>Nome do Proprietário:</label>
          <input type="text" name="nome" required value="<?php echo $anuncios[0]["nome"]; ?>">
        </div>
        <div class="form-group">
          <label>Telefone do Proprietário:</label>
          <input type="text" name="telefone" required value="<?php echo $anuncios[0]["telefone"]; ?>">
        </div>
        <div class="form-group">
          <label>Foto do veículo:</label>
          <input type="file" name="imagem" accept="image/*" required value="<?php echo $anuncios[0]["imagem"]; ?>">
        </div>
        <button type="submit">Cadastrar</button>
      </div>
    </div>
  </form>


  
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Id = $_POST['Id'];
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
    $uploadDir = '../uploads/';
    $imgNome = basename($_FILES['imagem']['name']);
    $uploadPath = $uploadDir . time() . "_" . $imgNome;



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
    if (empty($nome)) {
      echo 'É necessário informar a data!!!';
      exit();
    }

    if (empty($telefone)) {
      echo 'É necessário informar a data!!!';
      exit();
    }
    if (empty($marca_veiculo)) {
      echo 'É necessário informar a data!!!';
      exit();
    }
    if (empty($modelo_veiculo)) {
      echo 'É necessário informar a data!!!';
      exit();
    }
    if (empty($ano_veiculo)) {
      echo 'É necessário informar a data!!!';
      exit();
    }
    if (empty($cor_veiculo)) {
      echo 'É necessário informar a data!!!';
      exit();
    }
    if (empty($placa_veiculo)) {
      echo 'É necessário informar a data!!!';
      exit();
    }
    if (empty($imgNome)) {
      echo 'É necessário informar a data!!!';
      exit();
    }

    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadPath)) {
      $stmt = $pdo->prepare('UPDATE anuncios SET titulo=:titulo, descricao=:descricao, data_public=:data_public, nome=:nome, telefone=:telefone, marca_veiculo=:marca_veiculo, modelo_veiculo=:modelo_veiculo, ano_veiculo=:ano_veiculo, cor_veiculo=:cor_veiculo, placa_veiculo=:placa_veiculo, imagem=:imagem WHERE Id=:Id');
      $stmt->bindParam(':Id', $Id);
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
      $stmt->bindParam(':imagem', $uploadPath);
      $stmt->execute();
      Header("Location: read.php");

      echo "<script>alert('Anúncio cadastrado com sucesso!'); window.location.href='read.php';</script>";
      exit;
    } else {
      echo "<script>alert('Erro ao enviar imagem!'); window.history.back();</script>";
    }
  }

  ?>
  <?php include '../../includes/footer.php' ?>