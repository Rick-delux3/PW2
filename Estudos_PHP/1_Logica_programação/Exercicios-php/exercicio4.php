<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio4.php" method="get">
        <input type="number" name="n1" id="n1">
        <input type="number" name="n2" id="n2">
        <input type="number" name="n3" id="n3">
        <button type="submit" name="media" value="media">Calcular</button>
    </form>
    <?php
        if(isset($_GET['n1'])){
            if(empty($_GET['n1'])){
                echo "A nota é obrigatório!";
                exit();
            }
        } else{
            exit();
        }
        if(isset($_GET['n2'])){
            if(empty($_GET['n2'])){
                echo "A nota é obrigatório!";
                exit();
            }
        } else{
            exit();
        }
        if(isset($_GET['n3'])){
            if(empty($_GET['n3'])){
                echo "A nota é obrigatório!";
                exit();
            }
        } else{
            exit();
        }

        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $n3 = $_GET['n3'];

        $notas[] = $n1;
        $notas[] = $n2;
        $notas[] = $n3;

        $soma = array_sum($notas); //Soma os valors do array

        $quantidade = count($notas);

        $media = $soma / $quantidade;

        if(isset($_GET['media'])){
            echo "A média do aluno é ". number_format($media, 2, ',', '.');

            if($media >= 7) echo " Aluno aprovado!!";
            elseif($media < 7) echo " Aluno Reprovado!!";
        } 
        else{
            exit();
        }
    
    
    ?>
</body>
</html>