<html>
	<head>
		<title>Consultar</title>
	</head>

	<body>
		<h1 align="Center">Consulta</h1>
		
		<?php
			
			include 'menu.php';
		?>

		<table WIDTH=80% ALIGN=center BORDER=2 CELLSPACING=1 BORDERCOLOR=0002F0000 CELLPADDING=0>
		
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Telefone</th>
				<th>Ações</th>
			</tr>
						

		<?php
			$conexao = mysqli_connect( "127.0.0.1", "root", "matheus" , "contato") or die( "Não foi conectado !. mysql_error( )" );	
			
			$resultado = mysqli_query( $conexao , "select * from contato"  );

			$i=0;

			while( $linha = mysqli_fetch_row( $resultado ) )
			{				
		?>				
				<tr>
					<td> <?=  $linha[ 0 ] ?></td>
					<td> <?=  $linha[ 1 ] ?></td>
					<td> <?=  $linha[ 2 ] ?></td>	
					<td>
						<a href="index.php"><input type="button" name="vizualizar" value="Detalhes" ></a>
						<a href="index.php"><input type="button" name="alterar" value="Alterar" ></a>
						<a href="index.php"><input type="button" name="excluir" value="Excluir" ></a>
					</td>			
			    </tr>								
			<?php 
				}
			?>
			</table>
	</body>
</html>