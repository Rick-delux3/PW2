<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <form action="exercicio3.php" method="get">
        <legend>Menção do aluno</legend>

        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class=" form-control">
        <br>
        <label for="n1" class="form-label">Menção do aluno I, R, B, MB</label>
        <input type="text" name="n1" id="n1" class=" form-control">
        <button type="submit" name="enviar" value="enviar">Enviar</button>
    </form>

    <?php
        if(isset($_GET['nome'])){
            if(empty($_GET['nome'])){
                echo '<div class="alert alert-danger" role="alert"> O nome é Obrigátorio!! </div>';
                exit();
            }
        } else{
            exit();
        }
        if(isset($_GET['n1'])){
            if(empty($_GET['n1'])){
                echo '<div class="alert alert-danger" role="alert"> A menção é Obrigátorio!! </div>';
                exit();
            }
        } else{
            exit();
        }

        $nome = $_GET['nome'];
        $nota = $_GET['n1'];
        $mencao = strtoupper($nota);

        if(isset($_GET['enviar'])){
            if($mencao != "I" && $mencao != "R" && $mencao != "B" && $mencao != "MB"){
                echo '<div class="alert alert-danger" role="alert"> A '.$mencao. ' é inválida!! </div>';
                exit();
            }
            else{
                if($mencao == "I") echo '<div class="alert alert-success" role="alert"> O aluno está reprovado!! </div>';
                else echo '<div class="alert alert-danger" role="alert"> O aluno está aprovado!! </div>';
            }

        }
    
    
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>