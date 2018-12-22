<?php 
	
		$nome = $_POST[ 'Nome' ];
		$telefone = $_POST[ 'Telefone' ];

		
		 $conexao = mysqli_connect( "127.0.0.1", "root", "matheus" , "contato");
		 

		


		mysqli_query( $conexao , "INSERT INTO contato ( nome , telefone ) values (  '$nome' , '$telefone' )"  );


		echo "Adicionado com sucesso !";

		header("Location: consultar.php");
	

?>