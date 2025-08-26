<?php
    include './usuario.php';


    //criar um ainstância da classe usuario
    //$usuario = new Usuario();

    include './header.php';

?>

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-4 justify-content-center">
            <div class="card shadow d-flex justify-content-center align-itens-center flex-column">
                <img src="https://cdn4.iconfinder.com/data/icons/glyphs/24/icons_user2-512.pngz" alt="">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="email" class>E-mail</label>
                                <input type="text" name="email" id="email">
                           
                        </div>
                        <div class="mb-3">
                            <label for="senha">Senha</label>
                                <input type="password" name="senha" id="senha">
                           
                        </div>
                        <div class="mb-3">
                            <label for="confirmar_senha">Confirmar Senha</label>
                                <input type="text" name="confirmar-senha" id="confirmar-senha">
                        </div>
                        <div class="mb-3">
                            <button type ="submit">Cadastrar</button>
                        </div>
                        <div class="mb-3">
                            <p>Já possui conta? <a href="cadastro.php">Realize o login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './footer.php'; ?>

