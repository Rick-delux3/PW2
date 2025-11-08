<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio1.php" method="get">
        <legend>Exibir Mensagem</legend>
        <input type="text" name="nome" id="nome">
        <input type="email" name="mail" id="mail">
        <button type="submit" name="enviar">Eviar</button>
    </form>

    <?php
        if(isset($_GET['nome'])){
            if(empty($_GET['nome'])){
                echo "O nome é obrigátorio!";
                exit();
            }
        } else{
            exit();
        }
        if(isset($_GET['mail'])){
            if(empty($_GET['mail'])){
                echo "O email é obrigátorio!";
                exit();
            }
        } else{
            exit();
        }

        $nome = $_GET['nome'];

        if(isset($_GET['enviar'])){
            echo "Olá $nome!!";
        }
    
    
    
    ?>
</body>
</html>