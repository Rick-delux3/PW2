<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="exercicio8.php" method="get">

        <fieldset>
            <legend>vendas</legend>
        
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="0" required>

            <br>

            <label for="vendas">Vendas</label>
            <input type="number" name="vendas" id="vendas" placeholder="0" required>


            
            <input type="submit" name="botao" value="date">
           
        </fieldset>
            
    </form>

    <?php
        
        if (isset($_GET['vendas'])) {
            if (empty($_GET['vendas'])) {
                echo 'o Vendas é obrigatório!';
                exit();
            }
        } else {
            exit();
        }
        if (isset($_GET['nome'])) {
            if (empty($_GET['nome'])) {
                echo 'o nome é obrigatório!';
                exit();
            }
        } else {
            exit();
        }

        $ven = ($_GET['vendas']);
        $name = ($_GET['nome']);
        $bonus1 = (($ven)*(10/100));
        $bonus2 = (($ven)*(20/100));
        $bonus3 = (($ven)*(30/100));

        


        if($_GET['botao']){
            if($ven <= 1000){
                echo "Nome: $name, 
                Total de vendas: $ven, Bonus: 0, 
                Total a receber: $ven";

            }
            elseif($ven > 1000 && $ven < 2000){
                echo "Nome: $name, 
                Total de vendas: $ven, Bonus: 30%, 
                Total a receber: $bonus3";
            }
            elseif($ven > 2000 && $ven < 5000){
                echo "Nome: $name, 
                Total de vendas: $ven, Bonus: 30%, 
                Total a receber: $bonus2";
            }
            elseif($ven > 5000){
                echo "Nome: $name, 
                Total de vendas: $ven, Bonus: 30%, 
                Total a receber: $bonus1";
            }
        }
       
    ?>
    
</body>

</html>