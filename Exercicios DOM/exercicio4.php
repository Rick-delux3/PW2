<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="exercicio4.php" method="get">

        <fieldset>
            <legend>Mêses</legend>
            <label for="mes">Mês</label>
            <input type="text" name="mes" id="mes" placeholder="0" required>

            <br>

            
            <input type="submit" name="botao" value="Mês">
           
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['mes'])) {
            if (empty($_GET['mes'])) {
                echo 'o mes é obrigatório!';
                exit();
            }
        } else {
            exit();
        }

        $mes = strtolower($_GET['mes']);


        if($_GET['botao']){
            if($mes==="janeiro" || $mes === "fevereiro"|| $mes === "março" || $mes==="abril" || $mes==="maio"|| $mes ==="junho" ){
                echo "É do primeiro semestre";
            }
            else{
                echo "É do segundo semestre ";
            }
            
        }

       
    ?>
    
</body>
</html>