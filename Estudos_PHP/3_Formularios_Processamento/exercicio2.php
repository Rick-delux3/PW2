<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio2.php" method="get">
        <legend>Calcular IMC</legend>
        <br>
        <label for="">Altura:</label>
        <input type="number" name="h" id="h" step="0.01">
        <br>
        <label for="">Peso:</label>
        <input type="number" name="p" step="0.01" id="p">

        <button type="submit" name="calcular" value="calcular">Enviar</button>

    </form>

    <?php

        function classifImc($imc){
            if($imc < 18.5) echo "Seu IMC é $imc; Magreza!!";
            if($imc >= 18.5 && $imc <= 24.9) echo "IMC: $imc; Normal!";
            if($imc >= 25.0 && $imc <= 29.9) echo "IMC: $imc; Sobrepeso!!";
            if($imc >= 30.0 && $imc <= 34.9) echo "IMC: $imc; Obesidade Grau 1";
            if($imc >= 35.0 && $imc <= 39.9) echo "IMC: $imc; Obesidade Grau 2";
            if($imc > 40.0) echo "Obesidade Mórbita!!";
        }

        if(isset($_GET['h'])){
            if(empty($_GET['h'])){
                echo 'A altura é obrigátoria!!';
                exit();
            }
        }
        else{
            exit();
        }
        if(isset($_GET['p'])){
            if(empty($_GET['p'])){
                echo 'O peso é obrigátorio!!';
                exit();
            }
        }
        else{
            exit();
        }

        $h = $_GET['h'];
        $h = floatval($h);
        $p = $_GET['p'];
        $p = floatval($p);

        if(isset($_GET['calcular'])){
            $imc = ($p / ($h**2));

            $class = classifImc($imc);

        }

    
    
    ?>
</body>
</html>