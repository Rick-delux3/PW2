<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="exercicio11.php" method="get">

        <fieldset>
            <legend>Ordem crescente</legend>
            <label for="ladoa">LadoA</label>
            <input type="number" name="ladoa" id="ladoa" placeholder="0" required>

            <br>

            <label for="ladob">LadoB</label>
            <input type="number" name="ladob" id="ladob" placeholder="0" required>

            <br>

            <label for="ladoc">LadoC</label>
            <input type="number" name="ladoc" id="ladoc" placeholder="0" required>

    
            <input type="submit" name="botao" value="Triângulo">
           
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['ladoa'])) {
            if (empty($_GET['ladoa'])) {
                echo 'o número é obrigatório!';
                exit();
            }
        } else {
            exit();
        }
        if (isset($_GET['ladob'])) {
            if (empty($_GET['ladob'])) {
                echo 'o número é obrigatório!';
                exit();
            }
        } else {
            exit();
        }
        if (isset($_GET['ladoc'])) {
            if (empty($_GET['ladoc'])) {
                echo 'o número é obrigatório!';
                exit();
            }
        } else {
            exit();
        }

        $lda = ($_GET['ladoa']);       
        $ldb = ($_GET['ladob']);
        $ldc = ($_GET['ladoc']);



        if($_GET['botao']){
            if($lda === $ldb || $ldb === $ldc || $lda === $ldc){
                echo "O triângulo é ISÓSCELES"!!
            }
            elseif($lda != $ldb || $ldb != $ldc){
                echo "O triângulo é Escaleno!!"

            }
            elseif($lda === $ldb && $ldb === $ldc && $lda === $ldc){
                echo "O triângulo é Equilátero!!"
            }
            else{
                echo "Não possui Triângulo!!"
            }
            
            
        }

       
    ?>
    
</body>
</html>