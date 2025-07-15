<?php
	$foo = "1";  // $foo é string (ASCII 49)
	$foo *= 2;   // $foo é agora um inteiro (2)
	$foo = $foo * 1.3;  // $foo é agora um float (2.6)
	$foo = 5 * 2 . "10 pequenos porcos"; // $foo é  um inteiro (50)
	$foo = 5 * 2 . "10 minúsculos porcos";     // $foo é um inteiro (50)
	echo $foo; 

	//REALIZANDO O CASTING DE INT PARA BOOLEAN
	$valor1 = 1;             // $foo é um inteiro 1
	$valor2 = (boolean) $valor1; // $bar é um booleano true


    /*
        Conversões Permitidas São:

    - (int), (integer) - molde para inteiro
    - (bool), (boolean) - converte para booleano
    - (float), (double), (real) - converte para número de ponto flutuante
    - (string) - converte para string
    - (array) - converte para array
    - (object) - converte para objeto
    - (unset) - converte para NULL  
    
    
    */ 
?>
​
