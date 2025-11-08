<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="exercicio1.php">
        <legend>Verificar 3 números</legend>
        <label for="numbers">Digite 3 números</label>
        <input type="number" name="num1" id="one">
        <input type="number" name="num2" id="two">
        <input type="number" name="num3" id="tree">
        <input type="submit" value="verificar" name="verificar"> 
    </form>
    <?php
       $num1 = $_GET['num1'];
       $num2 = $_GET['num2'];
       $num3 = $_GET['num3'];
       $verificar = $_GET['verificar'];

        //isset retorna true ou false
        //
       if(isset($num1)) {
            if(empty($num1)){
                echo "numero 1 é obrigatório!!";
                exit();
            }
        
       }
       else{
            exit();
       }
       if(isset($num2)) {
            if(empty($num2)){
                echo "numero 2 é obrigátorio";
                exit();
            }
       }
       else{
        exit();
       }
       if(isset($num3)) {
            if(empty($num3)){
                echo "numero 3 é obrigatorio!";
                exit();
            }
            
       }
       else{
        exit();
       }
       if(isset($verificar)){
           if($num1 > $num2 && $num1 > $num3) echo "$num1 é maior";
           if($num2 >$num1 && $num2 > $num3) echo "$num2 é maior";
           if($num3 > $num1 && $num3 > $num2) echo "$num3 é maior";
       }
    ?>
</body>
</html>