<?php 

	include_once './classes/model/Contato.php';
	include_once './classes/model/ContatoDAO.php';
	//include_once './classes/model/Calculo.php';


	$nome = $_POST[ 'Nome' ];
	$telefone = $_POST[ 'Telefone' ];


	//$calculo = new Calculo( );

	//echo $calculo->soma( $nome , $telefone );

	//Cria o contato
	$contato = new Contato( );


	//Coloca preenche o objeto
	$contato->setNome( $nome );
	$contato->setTelefone( $telefone );

	//Cria o objeto DAO
	$contatoDAO = new ContatoDAO( );
	$contatoDAO->insere( $contato );

	echo "Adicionado com sucesso !";

	header("Location: consultar.php");

?>