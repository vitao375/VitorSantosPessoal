<?php 


	class Conection{
		
		//protected $mysqli;

		protected $local = "127.0.0.1";
		protected $user = "ProgWeb";
		protected $pass = "123";
		protected $dataBase = "projetopessoal_01";

	//public function __construct(){
		//	$this->mysqli = new mysqli($this->local, $this->user, $this->pass, $this->dataBase);		
		//}

	public function getConection(){
			return new mysqli($this->local, $this->user, $this->pass, $this->dataBase);
		}
	}
?>