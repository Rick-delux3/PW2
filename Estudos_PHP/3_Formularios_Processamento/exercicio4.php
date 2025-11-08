<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio4.php" method="get">
        <br>
        <label for="nas">Data de nascimento</label>
        <input type="date" name="nas" id="nas">
        <br>
        <button type="submit" name="verificar">Verificar Maioridade</button>
    </form>

    <?php
        if(isset($_GET['nas'])){
            if(empty($_GET['nas'])){
                echo "A data é obrigátoria!!";
                exit();
            }
        }
        else{
            exit();
        };

        if(isset($_GET['nas'])){

            $data = new DateTime($_GET['nas']); // informando que se trata de uma data com a classe DataTime
            $atual = new DateTime(); // informando o ano atual 
            $idade = $atual->diff($data)->y; // calculando a diferença com o métudo diff() da Classe DataTime;

            if($idade > 18) echo "Maior de idade (idade: $idade)";
            else echo "Menor de idade (idade: $idade)";

        }
        
    
    ?>
</body>
</html>