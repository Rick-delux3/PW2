<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio5.php" method="get">
        <label for="n">Digite um núemro </label>
        <br>
        <input type="number" name="n" id="n">
        <br>
        <br>
        <button type="submit" name="fator">Fatorial</button>
    </form>

    <?php
        if(isset($_GET['n'])){
            if($_GET['n'] === ''){
                echo "Os campos são Obrigátorios!";
                exit();
            }
        }
        else{
            exit();
        }

        if(isset($_GET['fator'])){
            $n = intval($_GET['n']);
            $fat = 1;

            for ($i = $n; $i >= 1; $i--) { 
                $fat *= $i;
            }

            echo "O fatorial de $n é $fat";

        }



    
    
    ?>
</body>
</html>