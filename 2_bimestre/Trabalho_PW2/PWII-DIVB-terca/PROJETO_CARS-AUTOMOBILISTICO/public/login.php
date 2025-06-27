<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_form-login.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container d-flex justify-content-between align-items-center">
    <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
      <img src="img/Logo_empresa.png" alt="Logo" class="logo-img">
      <span class="brand-name">CARS</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDesktop">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarDesktop">
      <ul class="navbar-nav align-items-center gap-4">
        <li class="nav-item">
          <a class="nav-link text-white fw-semibold" href="#">Ajuda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-semibold" href="#">Tutorial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-semibold" href="index.php">Voltar ao inicio</a>
        </li>
      </ul>
    </div>

  </div>
</nav>
<style>
  

    .custom-navbar {
  background-color: #000;
  border-bottom: 4px solid #A60303;
  padding: 10px 0;
  position: sticky;
  top: 0;
  z-index: 999;
  box-shadow: 4px 4px 4px ;
}

.logo-img {
  width: 55px;
  height: auto;
}

.brand-name {
  font-family: 'Bebas Neue', sans-serif;
  color: white;
  font-size: 28px;
  letter-spacing: 1px;
}

.user-icon {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid white;
  transition: transform 0.3s ease;
}

.user-icon:hover {
  transform: scale(1.1);
}

.navbar-nav .nav-link {
  transition: color 0.3s ease;
}

.navbar-nav .nav-link:hover {
  color: #A60303;
}
</style>


<?php session_start() ?>

<div class="login-container d-flex justify-content-center align-items-center">
  <div class="login-card shadow">
    <h2 class="text-white text-center mb-4">LOGIN DO VENDEDOR</h2>
    <form action="login.php" method="POST">
      <div class="mb-3">
        <label for="nome" class="form-label text-white">NOME:</label>
        <input type="text" name="nome" class="form-control login-input" id="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label text-white">EMAIL:</label>
        <input type="email" name="email" class="form-control login-input" id="email" required>
      </div>
      <div class="mb-4">
        <label for="senha" class="form-label text-white">SENHA:</label>
        <input type="password" name="senha" class="form-control login-input" id="password" required>
      </div>
      <div class="text-center">
        <button type="submit" class="btn login-btn px-4">ENTRAR</button>
      </div>
    </form>
  </div>
</div>


<?php
    $email = isset($_POST['email']) ? $_POST['email'] : exit();
    $password = isset($_POST['senha']) ? $_POST['senha'] : exit();
    $name = isset($_POST['nome']) ? $_POST['nome'] : exit();
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($password) < 8){
      
    ?>
      <div class="container m-3">
        <div class="row">
          <div class="col-8 d-flex justify-content-center">
            <div class="alert alert-warning" role="alert">
                login incorreto!!
            </div>
          </div>
        </div>
      </div>
      
      
      <?php 
    }
    else{
      
      $_SESSION['nome'] = $name;
      header('Location: ./usuario/read.php');

    };

    ?>

  
  








?>


<?php include '../includes/footer.php' ?>