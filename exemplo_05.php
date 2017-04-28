<?php

	$nome = "Victor";

	function teste () {

		//Necessário chamar ("abrir" as portas e janelas) a variável dentro do escopo
		global $nome;
		echo $nome;

	}

	function teste2 () {

		$nome = "Zé";

		echo "<br/>" . $nome;

	}

	teste();
	teste2();

?>