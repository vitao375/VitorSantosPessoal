<?php
include 'ClassConection.php';
include '../ClassUsuario.php';

class DaoLogin{

	protected $mysqli;

	function __construct($mysql){
		$this->mysqli = $mysql;
	}

	public function selectLoginUsuario($login, $senha){

		$query = "SELECT * FROM usuario where emailUser= $login and senhaUser = $senha";
		$result =  $this->mysqli->query($query, MYSQLI_STORE_RESULT);
		

		
		if ($result->num_rows > 0) {

			$result = $result->fetch_array(MYSQLI_ASSOC);
			$user = new Usuario($result['Nome'], $result['Senha'], $result['email']);
			return $user;
		}else{
			return null;
		}

	}
?>