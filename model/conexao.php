<?php
	
	mysqli_report( MYSQLI_REPORT_STRICT );

		function open_connection( )
		{

			try
			{				
				$conexao = new mysqli( DB_HOST , DB_USER , DB_PASSWORD , DB_NAME );
				return $conexao;
			}
			catch( Exception $e )
			{
				$e->getMessage( );
				return null;
			}
		}
		
		function close_connection( $connection )
		{
			try
			{
				mysqli_close( $connection );
			}
			catch( Exception $e )
			{
				$e->getMessage( );
			}
		}
	
?>