<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
</head>
<body>
    <form action="exercicio3.php" method="get">
        <legend>Calcular Média</legend>
        <br>
        <label for="n1">Matemática</label>
        <input type="number" name="n1" step="0.01" id="n1">
        <br>
        <label for="n2">Português</label>
        <input type="number" name="n2" step="0.01" id="n2">
        <br>
        <label for="n3">Biologia</label>
        <input type="number" name="n3" step="0.01" id="n3">
        <br>
        <label for="n4">Fisica</label>
        <input type="number" name="n4" step="0.01" id="n4">
        <br>
        <label for="n5">Quimica</label>
        <input type="number" name="n5" step="0.01" id="n5">
        <br>
        <label for="n6">Inglês</label>
        <input type="number" name="n6" step="0.01" id="n6">
        <br>

        <button type="submit" name="media">Média</button>
    </form>

    <?php

        function verificar($media){
            if($media < 7) echo "Aluno REPROVADO!!";
            if($media >= 7 && $media <= 10 ) echo "Aluno APROVADO!!";
            return;
        }
       
        

        
        if(isset($_GET['media'])){


            $notas = [
               floatval($_GET['n1']),
               floatval($_GET['n2']),
               floatval($_GET['n3']),
               floatval($_GET['n4']),
               floatval($_GET['n5']),
               floatval($_GET['n6'])
            ];
    
            $soma = array_sum($notas);
    
            $conta = count($notas);


            $media = $soma / $conta;

            $result = verificar($media);


            foreach ($notas as $key => $nota) {
                if($nota === ""){
                    echo "Os campos são obrigátorios!!";
                }
            }
        }



    
    ?>
</body>
</html>