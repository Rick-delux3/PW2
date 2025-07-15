<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="exercicio9.php" method="get">

        <fieldset>
            <legend>Ordem crescente</legend>
            <label for="n1">Número</label>
            <input type="number" name="n1" id="n1" placeholder="0" required>

            <br>

            <label for="n2">Número</label>
            <input type="number" name="n2" id="n2" placeholder="0" required>

            <br>

            <label for="n3">Número</label>
            <input type="number" name="n3" id="n3" placeholder="0" required>

    
            <input type="submit" name="botao" value="Ordem">
           
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
        if (isset($_GET['n3'])) {
            if (empty($_GET['n3'])) {
                echo 'o número é obrigatório!';
                exit();
            }
        } else {
            exit();
        }

        $n1 = ($_GET['n1']);       
        $n2 = ($_GET['n2']);
        $n3 = ($_GET['n3']);



        if($_GET['botao']){
            if( $n1 > $n2 && $n2 > $n3 ){
                echo "A ordem é $n3, $n2, $n1";
            }
            elseif($n1 > $n3 && $n3 > $n2){
                echo "A ordem é $n2, $n3, $n1";
            }
            elseif( $n2 > $n1 && $n1 > $n3){
                echo "A ordem é $n3, $n1, $n2.";
            }
            elseif( $n2 > $n3 && $n3 > $n1){
                echo "A ordem é $n1, $n3, $n2";
            }
            elseif( $n3 > $n2 && $n2 > $n1){
                echo "A ordem é $n1, $n2, $n3";
            }
            else{
                echo "A ordem é $n2, $n1, $n3.";
            }
            
            
        }

       
    ?>
    
</body>
</html>