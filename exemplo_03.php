<?php

	//string
	$nome = "vichShir";
	$site = 'www.hcode.com.br';

	//int
	$ano = 1994;
	//float
	$salario = 5500.99;
	//Boolean
	$bloqueado = false;

	///////////////////////////////////////////////

	//array
	$frutas = array("abacaxi", "laranja", "manga", "maracujá", "goiaba");

		echo $frutas[1];

	//Objetos
	$nascimento = new DateTime();

		echo "<br>";
		var_dump($nascimento);

	///////////////////////////////////////////////

	//Arquivo
	$arquivo = fopen("exemplo_03.php", "r");

		echo "<br>";
		//O tipo de arquivo
		var_dump($arquivo);

	//Nulo, ausencia de valor
	$nulo = NULL;
	//Vazio, foi iniciado, porém não possui valor
	$vazio = "";

?>