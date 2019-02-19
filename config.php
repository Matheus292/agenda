<?php 
  
/** O nome do banco de dados*/ 
 define('DB_NAME', 'contato'); 
  
/** Usuário do banco de dados MySQL */ 
 define('DB_USER', 'root'); 
  
/** Senha do banco de dados MySQL */ 
 define('DB_PASSWORD', 'matheus'); 
  
/** nome do host do MySQL */ 
 define('DB_HOST', 'localhost'); 

/** Define o caminho do host*/
define( 'PDO_HOST' , 'mysql:host=localhost;dbname=contato' );
 
/** caminho absoluto para a pasta do sistema **/ 
 if ( !defined('ABSPATH') ) 
 	define('ABSPATH', dirname(__FILE__) . '/'); 
 	 
/** caminho no server para o sistema **/ 
 if ( !defined('BASEURL') ) 
 	define('BASEURL', '/agenda/'); 
 	 
/** caminho do arquivo de banco de dados **/ 
 if ( !defined('DBAPI') ) 
 	define('DBAPI', ABSPATH . 'model/conexao.php'); 

//Caminho das classes de negocio
 if( !defined( 'MODEL' ) )
 	define( 'MODEL' , ABSPATH . 'model/' );

//Caminho da classe de Controller
 if( !defined( 'CONTROLLER' ) )
 	define( 'CONTROLLER' , ABSPATH . 'controller/controller.php' ); 

//Caminho das páginas html
define ( 'VIEW' , BASEURL . 'view/' );

#MENU
define( 'HEADER' , ABSPATH . 'view/inc/menu.php' );

#RODAPE
define( 'FOOTER' , ABSPATH . 'view/inc/rodape.php' );

#Modal pra deletar Contato
define( 'MODAL_DELETE' , ABSPATH . 'view/inc/modal_delete.php' );

?>