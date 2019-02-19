<?php

	require_once '../config.php';
	require_once CONTROLLER;	
	find( );
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		include HEADER;
	?>
	<title>Detalhes de Usuário</title>
</head>
	<h1 id = "titulo" align = "center" >Dados de <?= $contato->getNome( )?></h1><br><br>
	<div class = "row" align = "center" >
		<?php
			echo "<label>ID: ".$contato->getId( )."</label><br>";
			echo "<label>Nome: ".$contato->getNome( )."</label><br>";
			echo "<label>Telefone: ".$contato->getTelefone( )."</label><br>";
		?>
		<a href="alterar.php?id=<?=$contato->getId( )?>"><input type="button" value = "Editar" class = "btn btn-warning"></a>
	 		<a href="consultar.php"><input type="button" value = "Voltar" class = "btn btn-default"></a>
	 </div>
</body>
<?php
	include FOOTER;
?>
</html>



