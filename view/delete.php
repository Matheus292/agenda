<?php 
  require_once '../config.php';
  require_once CONTROLLER;
  if ( isset( $_GET[ 'id' ] ) ) 
  {	
     delete( $_GET[ 'id' ] );
  }
  else
  {
	  die( "ERRO: ID não definido." );
  }
?>