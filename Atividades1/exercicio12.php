<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>
<body>
    <form action="exercicio12.php">

        <label for="n1">Digite um número</label>
        <input type="text" name="n1" id="n1">

        <label for="n2">Digite outro número</label>
        <input type="text" name="n2" id="n2">

        <label for="op">Escolha um operador(+, -, *, /)</label>
        <input type="text" name="op" id="op">

        <input type="submit" value="Enviar">

    </form>

        <?php
            if(isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['op'])){
                $n1 = ($_GET['n1']);
                $n2 = ($_GET['n2']);
                $op = ($_GET['op']);

                $adicao = $n1 + $n2;
                $subtracao = $n1 - $n2;
                $multiplicacao = $n1 * $n2;
                $divisao = $n1 / $n2;

                if($op==='+'){
                    echo $adicao;
                }
                if($op==='-'){
                    echo $subtracao;
                }
                if($op==='*'){
                    echo $multiplicacao;
                }
                if($op==='/'){
                    echo $divisao;
                }
            }
        ?>
</body>
</html>