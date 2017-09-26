<?php

Class Anime{

 private $id; //ID que será usado para as equações lá e talz
 private $nome; // varchar de 150 pq tem uns anime com nome grande
 private $descricao; //varchar de pelo menos 250 caractéres
 private $nroEpisodios; //integer
 private $genero;//Vai ser uma List
 private $autor; //Pode ser uma List ainda não decidi
 private $estudio; //Pode ser uma List ainda não decidi
 private $tipoDeEpisodio;// Se é legendado ou Dublado 
 private $ovas; //integer
 private $filmes; //integer
 private $statusDoAnime; //Enumerate(Em lançamento, Completo, Outra coisa)
 private $ano; //integer



function __construct($id, $nome, $descricao, $nroEpisodio, $genero, $autor, $estudio, $tipoDeEpisodio, $ovas, $filmes, $statusDoAnime, $ano){

	$this->id = $id;
	$this->nome = $nome;
	$this->descricao = $descricao;
	$this->nroEpisodios = $nroEpisodios;
	$this->genero = $genero;
	$this->autor = $autor;
	$this->estudio = $estudio;
	$this->tipoDeEpisodio = $tipoDeEpisodio;
	$this->ovas = $ovas;
	$this->filmes = $filmes;
	$this->statusDoAnime = $statusDoAnime;
	$this->ano = $ano;
}


public function setID($id){
	$this->id = $id; 
}

public function setNome($nome){
	$this->nome = $nome; 
}
public function setNroEpisodios($nroEpisodios){
	$this->nroEpisodios = $nroEpisodios;
}
public function setDescricao($descricao){
	$this->descricao = $descricao;
}
public function setGenero($genero){
	$this->genero = $genero;
}
public function setAutor($autor){
	$this->autor = $autor;
}
public function setEstudio($estudio){
	$this->estudio = $estudio;
}
public function setTipoDeEpisodio($tipoDeEpisodio){
	$this->tipoDeEpisodio = $tipoDeEpisodio;
}
public function setOvas($ovas){
	$this->ovas = $ovas;
}
public function setFilmes($filmes){
	$this->filmes = $filmes;
}
public function setStatusDoAnime($statusDoAnime){
	$this->statusDoAnime = $statusDoAnime;
}
public function setAno($ano){
	$this->ano = $ano;
}


public function getID(){
	return $this->id;
}
public function getNome(){
	return $this->nome;
}
public function getNroEpisodios(){
	return $this->nroEpisodios;
}
public function getDescricao(){
	return $this->descricao;
}
public function getGenero(){
	return $this->genero;
}
public function getAutor(){
	return $this->autor;
}
public function getEstudio(){
	return $this->estudio;
}
public function getTipoDeEpisodio(){
	return $this->tipoDeEpisodio;
}
public function getOvas(){
	return $this->ovas;
}
public function getFilmes(){
	return $this->filmes;
}
public function getStatusDoAnime(){
	return $this->statusDoAnime;
}
public function getAno(){
	return $this->ano;
}

}
?>