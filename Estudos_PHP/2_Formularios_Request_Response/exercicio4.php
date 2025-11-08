<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio4.php" method="get">
        <legend>Verificar idade</legend>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="idade">Idade:</label>
        <input type="Number" name="idade" id="idade">

        <button type="submit" name="verificar" value="verificar">Verificar</button>
    </form>


    <?php
        if(isset($_GET['nome'])){
            if(empty($_GET['nome'])){
                echo 'O nome é obrigátorio!!';
                exit();
            }
        }
        else{
            exit();
        }
        if(isset($_GET['idade'])){
            if(empty($_GET['idade'])){
                echo 'A idade é obrigátorio!!';
                exit();
            }
        }
        else{
            exit();
        }

        $idade = $_GET['idade'];
        $nome = $_GET['nome'];


        if(isset($_GET['verificar'])){
            if($idade < 12) echo "$nome é Criança!!";
            if($idade >= 12 && $idade < 18) echo "$nome é adolescente!!";
            if($idade >= 18 && $idade <= 65) echo "$nome é Adulto!";
            if($idade > 65) echo "$nome é idoso!!";
        }
        else{
            exit();
        }
    
    
    ?>
</body>
</html>