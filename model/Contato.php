<?php
	
	class Contato
	{

		//Atributos
		private  $id;
		private  $nome;
		private  $telefone;


		public function Contato( )
		{

		}

		/**
			Sets e Gets
		*/
		public function setId( $id )
		{
			$this->id = $id;
		}
		
		public function setNome( $nome )
		{
			$this->nome = $nome;
		}

		public function setTelefone(  $telefone )
		{
			$this->telefone = $telefone;
		}


		public function  getId( )
		{
			return $this->id;
		}

		public function  getNome( )
		{
			return $this->nome;
		}

		public function  getTelefone( )
		{
			return $this->telefone;
		}

	}

?>