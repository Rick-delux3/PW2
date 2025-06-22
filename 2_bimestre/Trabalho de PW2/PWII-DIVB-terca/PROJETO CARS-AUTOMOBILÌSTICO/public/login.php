<?php include '../includes/header_login.php'; ?>

<div class="login-container d-flex justify-content-center align-items-center">
  <div class="login-card shadow">
    <h2 class="text-white text-center mb-4">LOGIN DO VENDEDOR</h2>
    <form action="processa_login.php" method="POST">
      <div class="mb-3">
        <label for="nome" class="form-label text-white">NOME:</label>
        <input type="text" name="nome" class="form-control login-input" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label text-white">EMAIL:</label>
        <input type="email" name="email" class="form-control login-input" required>
      </div>
      <div class="mb-4">
        <label for="senha" class="form-label text-white">SENHA:</label>
        <input type="password" name="senha" class="form-control login-input" required>
      </div>
      <div class="text-center">
        <button type="submit" class="btn login-btn px-4">ENTRAR</button>
      </div>
    </form>
  </div>
</div>


<?php include '../includes/footer.php' ?>