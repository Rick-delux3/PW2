<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="exercicio2.php" method="get">

        <fieldset>
            <legend>Votar ou não</legend>
            <label for="Idade">Idade</label>
            <input type="number" name="Idade" id="Idade" placeholder="0" required>

            <br>

            
            <input type="submit" name="botao" value="votar">
           
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['Idade'])) {
            if (empty($_GET['Idade'])) {
                echo 'A Idade é obrigatório!';
                exit();
            }
        } else {
            exit();
        }
        if(isset($_GET['botao'])){
            if(($_GET['Idade'])<16){
                echo "Não pode votar!!";
            }
            elseif(($_GET['Idade'])>=18){
                echo "Pode votar!!";
            }
            
        }

       
    ?>
    
</body>
</html>