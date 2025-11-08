<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <form action="exercicio2.php" method="get">
        <legend>Calcular Área de Triangulo</legend>
        <label for="base" class=" form-label">Base:</label>
        <input type="number" name="base" id="base" class="form-control">
        <label for="h" class="form-label">Altura:</label>
        <input type="number" name="h" id="h" class="form-control">
        <button type="submit" name="enviar" value="enviar">Enviar</button>
    </form>

    <?php
        if(isset($_GET['base'])){
            if(empty($_GET['base'])){
                echo '<div class="alert alert-secondary" role="alert"> A base é obrigátoria!! </div>';
                exit();
            }
        }
        else{
            exit();
        }
        if(isset($_GET['h'])){
            if(empty($_GET['h'])){
                echo '<div class="alert alert-secondary" role="alert"> A altura é obrigátoria!! </div>';
                exit();
            }
        }
        else{
            exit();
        }

        $base = $_GET['base'];
        $altura = $_GET['h'];


        if(isset($_GET['enviar'])){
            $area = ($base*$altura) / 2;

            echo '<div class="alert alert-success" role="alert"> A área desse triângulo é '. $area . '</div>';
        }
    
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>