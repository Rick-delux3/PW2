<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="exercicio3.php" method="get">
        <legend>Pares entre dois números</legend>
        <input type="number" name="de" id="de">
        <input type="number" name="ate" id="ate">
        <input type="submit" value="contarpares" name="contarpares" placeholder="Enviar">
    </form>

    <?php
    
    if(isset($_GET['de'])){
        if(empty($_GET['de'])){
            echo "O primeiro número é obrigátorio!!";
            exit();
        }
    } else{
        exit();
    }
    if(isset($_GET['ate'])){
        if(empty($_GET['ate'])){
            echo "O ultimo número é obrigátorio!!";
            exit();
        }
    } else{
        exit();
    }

    $numero1 = $_GET['de'];
    $numero2 = $_GET['ate'];

    function contarPares($n1, $n2){
        $contador = 0;
        $inicio = $n1;

        while ($n1 <= $n2) { 
            if($n1 % 2 == 0){
                $contador++;
            }
            $n1++; //Para não entrar em looping infinito
        }

        echo "De $inicio até $n2 existem $contador números pares";
    }

    if(isset($_GET['contarpares'])){
        contarPares($numero1, $numero2);
    }
    
    
    
    ?>
</body>

</html>