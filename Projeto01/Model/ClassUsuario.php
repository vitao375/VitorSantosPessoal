<?php

Class Usuario{

 private $nome;
 private $senha;
 private $email;




function __construct($nome, $senha, $email){

	$this->nome = $nome;
	$this->senha = $senha;
	$this->email = $email;

}



public function setNome($nome){
	$this->nome = $nome; 
}
public function setEmail($email){
	$this->Email = $email;

}
public function setSenha($senha){
	$this->senha = $senha;
}



public function getNome(){
	return $this->nome;
}

public function getEmail(){
	return $this->email;
}

public function getSenha(){
	return $this->senha;
}


}
?>