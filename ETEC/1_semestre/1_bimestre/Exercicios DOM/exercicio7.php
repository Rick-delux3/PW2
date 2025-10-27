<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="exercicio7.php" method="get">

        <fieldset>
            <legend>Maior de idade</legend>
        
            <label for="ano">Ano</label>
            <input type="number" name="ano" id="ano" placeholder="0" required>


            
            <input type="submit" name="botao" value="date">
           
        </fieldset>
            
    </form>

    <?php
        
        if (isset($_GET['ano'])) {
            if (empty($_GET['ano'])) {
                echo 'o Ano é obrigatório!';
                exit();
            }
        } else {
            exit();
        }

        $ano = ($_GET['ano']);
        $demaior = (2025 - $ano);


        if($_GET['botao']){
            if($demaior >=18){
                echo "É de maior!!";
            }
            else{
                echo "É de menor!!";
            }
            
        }
       
    ?>
    
</body>
</html>