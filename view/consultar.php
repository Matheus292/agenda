<?php
	require_once '../config.php';
	require_once CONTROLLER;
	find_all( );
?>
<html>	
	
	<head>
		<title>Consultar</title>
	</head>
<?php
	include MODAL_DELETE;			
	include HEADER;			
?>
	<h1 id = "titulo" align="Center">Listagem de Contatos</h1><br><br>
		
	<div class = "table-responsive">
		<table class="table table-condensed">
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Telefone</th>
				<th>Ações</th>
			</tr>						
<?php
	if(  $contatos == null )
	{
		echo "<td>Não possui registro</td>"	;		
	}
	else
	{
		foreach( $contatos as $contato )
		{
?>				
			<tr>
				<td> <?= $contato->getId( ) ?></td>
				<td> <?= $contato->getNome( ) ?></td>
				<td> <?= $contato->getTelefone( ) ?></td>	
				<td>
					<a href="detalhes.php?id=<?=$contato->getId( )?>"><input type="button" name = "" value = "Detalhes"  class="btn btn-info"></a>
					<a href="alterar.php?id=<?=$contato->getId( )?>"><input type="button" name="alterar" value="Alterar"  class="btn btn-warning"></a>
					<a href="#" data-target="#myModal" data-toggle="modal" data-customer="<?=$contato->getId( )?>" class="btn btn-danger" >Excluir</a>
				</td>			
		</tr>								
<?php 
	}
}
?>
			</table>
		</div>
	</body>
<?php
	include FOOTER;
?>
</html>