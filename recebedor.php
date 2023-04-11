<?php
	require('header.php');
	$pessoas = file_get_contents('pessoas.txt');
	$pessoas = explode("\n", $pessoas);

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

	foreach ($pessoas as $pessoa) {
		echo "<li>".$pessoa."</li>";
	}

	if($nome){
		$novo_nome = file_get_contents('pessoas.txt');
		$novo_nome .= "\n".$nome;
		$novo_nome = file_put_contents('pessoas.txt', $novo_nome);
		$novo_nome = explode("\n", $nome);

		if($novo_nome != ''){
			foreach ($novo_nome as $name) {
				echo "<li>".$name."</li>"."<br/>";
			} 
		}
	}

?>

