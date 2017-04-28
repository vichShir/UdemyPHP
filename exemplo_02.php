<?php

	//Variáveis
	$nome = "Victor";
	$sobrenome = "Shirasuna";
	$nomeCompleto = $nome . " " . $sobrenome;
	$anoNascimento = 2001;

	echo $nomeCompleto;
	echo "<br/>";
	echo "Nascido em: " . $anoNascimento;

	//Terminar até aqui
	exit;

	//Desativar a variável nomeCompleto
	unset($nomeCompleto);

	//Se a variável nomeCompleto estiver ativa, exibir o seu valor String
	if(isset($nomeCompleto)){

		echo "<br/>";
		echo $nomeCompleto;

	}

?>