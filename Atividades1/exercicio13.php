<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>
<body>
    <form action="exercicio13.php">

        <label for="nome">Insira seu nome</label>
        <input type="text" name="nome" id="nome">

        <label for="pt">Insira sua nota de português</label>
        <input type="text" name="pt" id="pt">

        <label for="mat">Insira sua nota de matemática</label>
        <input type="text" name="mat" id="mat">

        <label for="ing">Insira sua nota de inglês</label>
        <input type="text" name="ing" id="ing">

        <label for="info">Insira sua nota de informática</label>
        <input type="text" name="info" id="info">

        <label for="freq">Insira sua frequência</label>
        <input type="text" name="freq" id="freq">

        <input type="submit" value="Enviar">

    </form>

    <?php
        if(isset($_GET['nome']) && isset($_GET['pt']) && isset($_GET['mat']) && isset($_GET['ing']) && isset($_GET['info']) && isset($_GET['freq'])){
            $nome = $_GET['nome'];
            $pt = $_GET['pt'];
            $mat = $_GET['mat'];
            $ing = $_GET['ing'];
            $info = $_GET['info'];
            $freq = $_GET['freq'];

            $med = ($pt+$mat+$ing+$info)/4;

            if($med>=7 && $freq>=0.75){
                echo'O aluno '.$nome.' foi aprovado.';
            }
            else{
                echo'O aluno '.$nome.' foi reprovado.';
            }
        }
    ?>
</body>
</html>