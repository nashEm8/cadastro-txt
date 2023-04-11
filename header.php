<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Lista de nomes</title>
</head>
<body>
	<form method="POST" action="recebedor.php">
		<label>Novo nome: <br/>
			<input type="name" name="nome" placeholder="Digite um nome">
		</label>

		<input type="submit" value="Adicionar">
	</form>

	<h2>Lista de nomes</h2>
</body>
</html>
