       <?php
        include '../config/connection.php';

        $stmt = $pdo->query('SELECT * FROM anuncios');
        $anuncios = $stmt->fetchAll();

        if (isset($_GET['Id'])) {
          $Id = $_GET['Id'];
          echo "O id $Id foi removido!!!";
        }

        // echo "<pre>";
        // echo var_dump($usuarios);
        ?>
       <!DOCTYPE html>
       <html lang="pt-br">

       <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
         <link rel="stylesheet" href="css/style-work.css">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
         <link rel="stylesheet" href="css/style-catalog.css">
         <link rel="stylesheet" href="css/style_headers_usuario.css">
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
                   <a class="nav-link text-white fw-semibold" href="#">Cadastrar</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link text-white fw-semibold" href="login.php">Login</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link text-white fw-semibold" href="index.php">Voltar ao inicio</a>
                 </li>
                 <?php
                  session_start();
                  if (isset($_SESSION['nome'])) {
                  ?>
                   <li class="nav-item d-flex align-items-center gap-2 text-white">
                     <img src="http://pluspng.com/img-png/png-user-icon-circled-user-icon-2240.png" alt="User Icon" class="user-icon">
                     <span class="fw-semibold"><?php echo htmlspecialchars($_SESSION['nome']); ?></span>
                   </li>
                 <?php }; ?>
               </ul>
             </div>

           </div>
         </nav>

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
                     <?php if (!empty($cars['imagem'])) { ?>
                       <img src="<?php echo $cars['imagem']; ?>" alt="Imagem do carro">
                     <?php } ?>
                   </div>
                 </div>
               <?php } ?>
             </div>
           </div>
         </div>







         <?php
          include '../includes/footer.php'
          ?>