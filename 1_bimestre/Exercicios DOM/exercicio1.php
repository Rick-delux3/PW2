<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
    <form action="exercicio1.php" method="get">

        <fieldset>
            <legend>Calculadora Científica</legend>
            <label for="nota1">nota1</label>
            <input type="number" name="nota1" id="nota1" placeholder="0" required>

            <br>

            
            <input type="submit" name="condicao" value="condicao">
           
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['nota1'])) {
            if (empty($_GET['nota1'])) {
                echo 'O nota1 é obrigatório!';
                exit();
            }
        } else {
            exit();
        }
        if(isset($_GET['condicao'])){
            if(($_GET['nota1'])<6){
                echo "REPROVADO";
            }
            elseif(($_GET['nota1'])>=6 && ($_GET['nota1'])<=7){
                echo "RECUPERAÇÃO";
            }
            elseif(($_GET['nota1'])>=7){
                echo "APROVADO";
            }
        }

       
    ?>
    
</body>
</html>