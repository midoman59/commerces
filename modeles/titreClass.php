<?php


include_once 'titreBDD.php';
class titre
{
	
	//liste attributs
	private $id;
	private $titre;
	
	//liste des getters
	public function getId()
	{
		return $this->id;
	}
	public function getTitre()
	{
		return $this->titre;
	}
	
	//liste des setters 
	public function setId($id)
	{
		$this->id=$id;
	}
	public function setTitre($titre)
	{
		$this->id=$titre;
	}
	
	
}

