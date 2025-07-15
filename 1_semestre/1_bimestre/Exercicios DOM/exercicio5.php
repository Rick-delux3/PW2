<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="exercicio5.php" method="get">

        <fieldset>
            <legend>Maior ou menbr que 100</legend>
            <label for="Letra">Letra</label>
            <input type="text" name="Letra" id="Letra" placeholder="0" required>

            <br>

            
            <input type="submit" name="botao" value="Consoante ou vogal">
           
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['Letra'])) {
            if (empty($_GET['Letra'])) {
                echo 'o Letra é obrigatório!';
                exit();
            }
        } else {
            exit();
        }

        $letra = strtolower($_GET['Letra']);


        if($_GET['botao']){
            if($letra==="a" || $letra === "e" || $letra === "i" || $letra === "o" || $letra === "u" ){
                echo "É Vogal";
            }
            else{
                echo "É consoante!!";
            }
            
        }

       
    ?>
    
</body>
</html>