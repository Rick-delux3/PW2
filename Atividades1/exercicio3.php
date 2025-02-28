<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="exercicio3.php" method="get">

        <fieldset>
            <legend>Maior ou menbr que 100</legend>
            <label for="numero">numero</label>
            <input type="number" name="numero" id="numero" placeholder="0" required>

            <br>

            
            <input type="submit" name="botao" value="e maior ou menor que 100">
           
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['numero'])) {
            if (empty($_GET['numero'])) {
                echo 'o numero é obrigatório!';
                exit();
            }
        } else {
            exit();
        }
        if(isset($_GET['botao'])){
            if(($_GET['numero'])<100){
                echo "É menor que 100!";
            }
            elseif(($_GET['numero'])>100){
                echo "É maior que 100";
            }
            
        }

       
    ?>
    
</body>
</html>