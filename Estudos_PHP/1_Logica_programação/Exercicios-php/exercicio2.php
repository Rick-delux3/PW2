<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio2.php" method="get">
        <input type="number" name="num" id="num">
        <input type="submit" value="tabuada" name="tabuada">
    </form>


    <?php
         function Calcular($numero){
            for ($i=1; $i < 11; $i++) { 
                $result = ($numero * $i);
                echo "<br> $numero x $i = $result ";
                
            }
            
        }
        
        if(isset($_GET['num'])){
            if(empty($_GET['num'])){
                echo 'O número é obrigátorio!!';
                exit();
            }
        }
        else{
            exit();
        }
        $number = ($_GET['num']);
        $tabuada = ($_GET['tabuada']);

       if(isset($tabuada)){
        Calcular($number);
       }

       
    
    ?>
</body>
</html>