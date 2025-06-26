<?php include '../includes/header_login.php'; ?>

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