<?php
	//Criando Variáveis String
	$username = "Fred Smith";
	$nome_administrador = "Aeronauta Barata Silva";
	$nome_gerente = "Alce Barbuda";
	$nome_lider = "Barrigudinha Seleide";
	$nome_usuario_comum = "Dolores Fuertes de Barriga";
	$login = $nome_usuario_comum;

	//Exibindo Variáveis
	echo "<hr>";
	echo $nome_administrador . "<br />";
	echo $nome_gerente . "<br />";
	echo $nome_lider . "<br />";
	echo $login . "<br />";
	echo "<hr>";


	//Criando Variáveis
	$nome = "Marciano Verdinho das Antenas Longas";
	$idade = 20;
	$altura = 1.50;
	$solteiro = true;
	
	//Exibindo Variáveis
	echo "<h1>Nome: " . $nome . "</h1>";
	echo "<h3>Idade: " . $idade . "</h3>";
	echo "<h3>Altura: " . $altura . "</h3>";
	if ($solteiro)
		echo "<h3>Está Solteiro</h3>";
	else
		echo "<h3>Não Está Solteiro</h3>";	
?>