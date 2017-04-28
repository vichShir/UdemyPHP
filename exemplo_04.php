<?php

	//Variaveis Pré-definidas ou arrays superglobais
	//http://127.0.0.1/PHP/Variaveis/exemplo_04.php?a=123&b=15
	$nome = $_GET["a"];
	$idade = (int)$_GET["b"];
		
		//o tipo de variável
		var_dump($nome);
		echo "<br>" . $idade . " anos";

	$ip = $_SERVER["REMOTE_ADDR"];
	$browser = $_SERVER["HTTP_USER_AGENT"];

		echo "<br>" . "IP do usuário: " . $ip;
		echo "<br>" . "Navegador do usuário: " . $browser;

?>