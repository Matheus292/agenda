<html>
	<head>
		<title>Adicionar Contato</title>

	</head>

	<body>
		<h1 align="Center">Inserir</h1>
	
		<?php
			
			include 'menu.php';

		?>
		<form method = "POST" id="inserir"  action="add.php">
			
			Nome: <input type="text" name="Nome" value=""><br>
			Telefone: <input type="text" name="Telefone" value=""><br>
			<input type="submit" name="" value="Adicionar">
		</form>

	</body>

</html>