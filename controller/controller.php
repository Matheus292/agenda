<?php
	
//	require_once '../config.php';
	require_once MODEL.'Contato.php';
	require_once MODEL.'ContatoDAO.php';
	
	//Variaveis globais
	$contato = null;
	$contatos = null;
	
	
	function add( )
	{
		if( !empty( $_POST[ 'contact' ] ) )
		{
			$s = $_POST[ 'contact' ];
			
			foreach( $s as $objeto )
			{
				$vetor[ ] = $objeto;
			}
			
			$nome = $vetor[ 0 ];
			$telefone = $vetor[ 1 ];	
			
			$contato = new Contato( );
			$contato->setNome( $nome );
			$contato->setTelefone( $telefone );
			
			$dao = new ContatoDAO( );
			$dao->insere( $contato );
			
					
			header( 'location: '.BASEURL.'index.php' );
		}		
	}
	
	function find_all( )
	{
		global $contatos;
		$dao = new ContatoDAO( );
		$contatos = $dao->consultar( );		
	}
	
	function find( )
	{
		global $contato;
		$id = $_GET[ 'id' ];
		
		$dao = new ContatoDAO( );
		$contato = $dao->consultaSimples( $id );		
	}

	function update( )
	{
		//Se foi colocado um id entra neste if 
		if( isset( $_GET[ 'id' ] ) )  
		{			
			$id = $_GET[ 'id' ];
			
			if( isset( $_POST[ 'contact' ] ) )
			{
				//Cria um vetor que armazena o que foi colocado no formulário
				$vetor = $_POST[ 'contact' ];
				
				//For each
				foreach( $vetor as $value )
				{
					$objeto [ ] = $value;
				}
						
				//Atribui o valor para as variaveis
				$nome = $objeto[ 0 ];
				$telefone = $objeto[ 1 ];			
			
				//Instancia o contato
				$contato = new Contato( );
				$contato->setId( $id );
				$contato->setNome( $nome );
				$contato->setTelefone( $telefone );	
			
				//Instancia o dao e atualiza o contato
				$dao = new ContatoDAO( );
				$dao->alterar( $contato );
			
				//Encaminha para tela de detalhes do usuario
				header( 'location: '.BASEURL.'view/consultar.php' );				
			}
			else
			{
				global $contato;
				$dao = new ContatoDAO( );			
				$contato = $dao->consultaSimples( $id );
			}			
		}
		else //Senão volta pra tela inicial
		{
			header( 'location: '.BASEURL.'index.php' );
		}
		
	}
	
	//Responsavel por deletar um contato
	function delete( $id = null )
	{		
		global $contato;
		
		$contato = new Contato( );
		$contato->setId( $id );	

		$dao = new ContatoDAO( );
		$dao->excluir( $contato );

	    header( 'location: '.BASEURL.'view/consultar.php' );
	}

	
	
	//Responsavel por trazer os dados em json
	function json_formatter( )
	{
		find_all( );
		global $contatos;
		global $contato;
		$txt = '[';
		
		foreach( $contatos as $contato )
		{	
			if( $txt != '[' )
			{
				$txt.=',';
			}
			$txt.='{';
			$txt.= '"id":"'.$contato->getId( ).'",';
			$txt.= '"nome":"'.$contato->getNome( ).'",';
			$txt.= '"telefone":"'.$contato->getTelefone( ).'"';
			$txt.='}';
		}		
		$txt.=']';
		
		echo $txt;
	}
?>