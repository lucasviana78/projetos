<?php

class Pessoa{
	
	public $nome;

	public function __construct() {

 	}

	public function falar(){

		return "O meu nome é: " . $this -> nome;
	}	
}

?>