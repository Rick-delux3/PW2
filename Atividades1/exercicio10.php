<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="exercicio10.php" method="get">

        <fieldset>
            <legend>Usuário e senha</legend>
            <label for="Usu">Usuário</label>
            <input type="text" name="Usu" id="Usu" placeholder="0" required>

            <br>

            <label for="pas">Senha</label>
            <input type="number" name="pas" id="pas" placeholder="0" required>

    
            <input type="submit" name="botao" value="Login">
           
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['Usu'])) {
            if (empty($_GET['Usu'])) {
                echo 'o Usuário é obrigatório!';
                exit();
            }
        } else {
            exit();
        }
        if (isset($_GET['pas'])) {
            if (empty($_GET['pas'])) {
                echo 'A senha é obrigatório!';
                exit();
            }
        } else {
            exit();
        }

        $Usu = ($_GET['Usu']);       
        $pas = ($_GET['pas']);



        if($_GET['botao']){
            if( $Usu == 'Admin' && $pas == 123 ){
                echo "Logado com sucesso!!";
            }
            else{
                echo "Acesso negado!!";
            }
        }

       
    ?>
    
</body>
</html>