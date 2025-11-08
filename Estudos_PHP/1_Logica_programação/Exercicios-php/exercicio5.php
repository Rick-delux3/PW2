<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio5.php" method="get">
        <legend>Dizer Olá</legend>
        <input type="text" name="nome" id="nome">
        <button type="submit" name="dizerola" value="dizerola"></button>
    </form>

    <?php
        if(isset($_GET['nome'])){
            if(empty($_GET['nome'])){
                echo "O nome é obrigatório!!";
                exit();
            }
        }
        else{
            exit();
        }

        $name = $_GET['nome'];

        if(isset($_GET['dizerola'])){
            echo "Olá $nome!!";
        }
    
    ?>
</body>
</html>