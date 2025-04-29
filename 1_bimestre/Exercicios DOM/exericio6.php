<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="exericio6.php" method="get">

        <fieldset>
            <legend>Maior ou menor</legend>
            <label for="n1">Número</label>
            <input type="number" name="n1" id="n1" placeholder="0" required>

            <br>

            <label for="n2">Número</label>
            <input type="number" name="n2" id="n2" placeholder="0" required>

    
            <input type="submit" name="botao" value="Maior ou menor">
           
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['n1'])) {
            if (empty($_GET['n1'])) {
                echo 'o número é obrigatório!';
                exit();
            }
        } else {
            exit();
        }
        if (isset($_GET['n2'])) {
            if (empty($_GET['n2'])) {
                echo 'o número é obrigatório!';
                exit();
            }
        } else {
            exit();
        }

        $n1 = ($_GET['n1']);       
        $n2 = ($_GET['n2']);



        if($_GET['botao']){
            if( $n1 > $n2 ){
                echo "$n1 é maior!!";
            }
            elseif( $n2 > $n1){
                echo "$n2 é maior";
            }
            else{
                echo "Os dois números são iguais";
            }
        }

       
    ?>
    
</body>
</html>