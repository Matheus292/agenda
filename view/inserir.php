<?php 
	require_once ( '../config.php' );
	require_once ( CONTROLLER );
	add( );
?>
<html>
	<head>
		<title>Adicionar Contato</title>

	</head>
<?php
	include HEADER;
?>
	<div class="container">
		<h1 id="titulo" align="Center">Novo Contato</h1><br><br>
		<form method = "POST" id="inserir"  action="inserir.php">
			<div class = "row" >
				<div class="form-group col-md-6">	
					<label>Nome:</label>
					<input type="text" class="form-control" name="contact[ 'nome' ]" placeholder="Digite seu nome" value="">
				</div>
				<div class="form-group col-md-6">
					<label>Telefone:</label>
					<input type="text" class="form-control" name="contact[ 'telefone' ]" placeholder="Digite seu telefone" value="">
				</div>			
			</div>
				<input type="submit" align="center" name="acao" value="Adicionar" class="btn btn-success">
				<a href="<?= BASEURL ?>"><input type="button" align="center" value="Cancelar" class="btn btn-default"></a>
		</form>		
	</div>		
</body>
<?php
	include FOOTER;
?>
</html>
