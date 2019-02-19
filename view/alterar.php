<?php 
	require_once ( '../config.php' );
	require_once ( CONTROLLER );
	update( );
?>
<html>
	<head>
		<title>Alterar Contato</title>
	</head>
	<?php
			include HEADER;
	?>
	<h1 id = "titulo" align="Center">Alterar Dados</h1>	<br><br>
		<div align = "center">
			<form method = "POST" id="alterar"  align = "center" action="alterar.php?id=<?= $contato->getId( ) ?>">
				
				<div class = "row"  >
					<div class = "form-group col-md-2">
							<label>ID:</label>
							<input type="text" class = "form-control" name = "contact[ 'id' ]" value="<?= $contato->getId( )?>" disabled ><br>	
					</div>	
					<div class = "form-group col-md-5">
							<label>Nome:</label>
							<input type="text" class = "form-control" name="contact[ 'nome' ]" placeholder="Digite seu nome" value="<?= $contato->getNome( ) ?>"><br>
					</div>	
						<div class = "form-group col-md-5">
						<label>Telefone:</label> 
						<input type="text" name="contact[ 'telefone' ]" class = "form-control" placeholder="Digite seu telefone" value="<?= $contato->getTelefone( )?> "><br>
					</div>					
				</div>		
				<input type="submit" name="acao" value="Salvar" class = "btn btn-success" >
				<a href = "consultar.php" >
					<input type="button" name="acao" value="Cancelar" class = "btn btn-default">
				</a>
			</form>
		</div>
	</body>
	<?php
	include FOOTER;
?>
</html>