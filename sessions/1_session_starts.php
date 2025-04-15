<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<style>
      body {
        background-color: #f8f9fa;
      }
      .login-container {
        max-width: 400px;
        margin: 100px auto;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
      }
      .form-floating {
        margin-bottom: 15px;
      }
      .btn-login {
        background-color: #0d6efd;
        color: white;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="login-container">
        <h2 class="text-center mb-4">Login</h2>
        <form action="1_session_starts.php" method="POST">
          <div class="form-floating">
            <input type="email" name="email" class="form-control" id="email" placeholder="nome@exemplo.com">
            <label for="email">Email</label>
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Senha">
            <label for="password">Senha</label>
          </div>
          
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="rememberPassword">
            <label class="form-check-label" for="rememberPassword">
              Lembrar senha
            </label>
          </div>
          
          <button class="w-100 btn btn-lg btn-login" type="submit">Entrar</button>
          
          <div class="text-center mt-3">
            <a href="#">Esqueceu a senha?</a>
          </div>
          
          <hr class="my-4">
          
          <div class="text-center">
            <p class="text-muted">Não tem uma conta? <a href="#">Cadastre-se</a></p>
          </div>
        </form>
      </div>
    </div>

      <?php
          $email = isset($_POST['email']) ? $_POST['email'] : exit();
          $senha = isset($_POST['password']) ? $_POST['password'] : exit();


          if($email == 'admin@hotmail.com' && $senha =='naopalmeirasworldcup'){
            $_SESSION['email'] = $email;
            header('Location: 2_pagina_inicial.php');
          }
          else{

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
          echo $email

        ?>
      
      
      
      
      
      
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>