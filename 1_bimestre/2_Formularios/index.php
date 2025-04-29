<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta poder="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>
<body>
    <form action="index.php" method="get">
        <fieldset>
            <label for="name">nome</label>
            <input type="text" name="nome" id="name" placeholder="nome do personagem" required>

            <br>


            <label for="poder">poder</label>
            <input type="text" name="poder" id="poder" placeholder="Poder do personagem" required>

            <input type="submit" value="Enviar">
        </fieldset>
            

    </form>

    <?php



    if(isset($_GET['poder'])){
        if(empty($_GET['poder'])){
            echo 'O poder é obrigatório';
        }
        else{
            echo $_GET['poder'];
        }
    }
    
    if(isset($_GET['nome'])){
        if(empty($_GET['nome'])){
            echo 'O nome é obrigatório';
        }
        else{
            echo $_GET['nome'];
        }
    }
    
    
    
    ?>
</body>
</html>