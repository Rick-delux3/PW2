<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="index.php" method="get">

        <fieldset>
            <legend>Calculadora Científica</legend>
            <label for="valor1">Valor 1</label>
            <input type="text" name="valor1" id="valor1" placeholder="0" required>

            <br>

            <label for="valor2">Valor 2</label>
            <input type="text" name="valor2" id="valor2" placeholder="0" required>
            
            <br>

            <input type="submit" name="somar" value="+">
            <input type="submit" name="subtrair" value="-">
            <input type="submit" name="dividir" value="/">
            <input type="submit" name="multiplicar" value="*">
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['valor1'])) {
            if (empty($_GET['valor1'])) {
                echo 'O valor1 é obrigatório!';
                exit();
            }
        } else {
            exit();
        }

        if (isset($_GET['valor2'])) {
            if (empty($_GET['valor2'])) {
                echo 'O valor2 é obrigatório!';
                exit();
            }
        } else {
            exit();
        }

        if (isset($_GET['somar']))
            echo $_GET['valor1'] + $_GET['valor2'];

        if (isset($_GET['subtrair']))
            echo $_GET['valor1'] - $_GET['valor2'];

        if (isset($_GET['dividir']))
            echo $_GET['valor1'] / $_GET['valor2'];

        if (isset($_GET['multiplicar']))
            echo $_GET['valor1'] * $_GET['valor2'];
    ?>
    
</body>
</html>