<?php


	//require_once( '../config.php' );
	require_once(DBAPI);

	/**
	* 
	*/
	class ContatoDAO 
	{	
		//Construtor
		function ContatoDAO( )
		{

		}

		//Insere contato
		function insere( $contato )
		{			

			//Seta as variaveis
			$nome = $contato->getNome( );
			$telefone = $contato->getTelefone( );
			
		
			//Abre a cpnexao
		    $acesso = open_connection( );


		    $sql = "insert into contato ( nome , telefone ) values ( '$nome' , '$telefone' )";

		    $acesso->query( $sql );
		    close_connection( $acesso );

		}

		//Consulta todos os contatos
		function consultar( )
		{		
			//Abre a conexão
		    $acesso = open_connection( );
			
			//Comando sql
			$sql = "select * from contato";
			
			//Executa o comando sql
			$resultado = $acesso->query( $sql );
			
			$list = null;

			if( !empty( $resultado ) )
			{
				
				while ( $linha = mysqli_fetch_row( $resultado ) ) 
				{
					$contato = new Contato( );

					$contato->setId( $linha[ 0 ] );
					$contato->setNome( $linha[ 1 ] );
					$contato->setTelefone( $linha[ 2 ] );


					$list [ ] = $contato;
				}
			}
			else
			{
				
			}
			
			//$lista = mysql_fetch_row( $resultado );
			//$lista = mysqli_num_rows( $resultado );
			//return mysqli_num_rows( $resultado );
			
			close_connection( $acesso );
			
			return $list;
		}


		//Faz consulta simples
		function consultaSimples( $id )
		{
			
			//Abre a conexão
		    $acesso = open_connection( );
			
			//Define a query
			$sql = "select * from contato where id='$id'";
			
			
			$resultado = $acesso->query( $sql );	


			if ( $linha = mysqli_fetch_row( $resultado ) ) 
			{
				$contato = new Contato( );

				$contato->setId( $linha[ 0 ] );
				$contato->setNome( $linha[ 1 ] );
				$contato->setTelefone( $linha[ 2 ] );
				
				$list = $contato;
			}

			close_connection( $acesso );
			//$lista = mysql_fetch_row( $resultado );
			//$lista = mysqli_num_rows( $resultado );
			//return mysqli_num_rows( $resultado );
			return $list;
		}
		
		//Faz alteração no registro
		function alterar( $contato )
		{
			//Abre a conexão de banco de dados
			$acesso = open_connection( );
			
			//Atribui os valores
			$id = $contato->getId( );
			$nome = $contato->getNome( );
			$telefone = $contato->getTelefone( );
			
			echo 'Nome: '.$nome.'<br>'.'Telefone: '.$telefone;
			
			
			
			//SQL
			$sql = "UPDATE contato set nome='$nome',telefone='$telefone' where id='$id'";
			
			$acesso->query( $sql );
			
			//Fecha a conexao
			close_connection( $acesso );		
		}		
		
		//Faz exclusão do usuário
		function excluir( $contato )
		{
			//Abre a conexão
			$acesso = open_connection( );
			
			//Atribui os valores as variaveis
			$id = $contato->getId( );
			
			//String sql
			$sql = "delete from contato where id='$id'";			
			//echo '$contato->getId( )'";
			
			try
			{
				//Executa a query
				$acesso->query( $sql );
			
			}	
			catch( Exception $e )
			{
				echo $e->getMessage( );
			}
			//Fecha a conexao
			close_connection( $acesso );								
		}


		


		}//fim da classe

?>