<?php

class Pai{

	public $nome = "Teste";
	protected $idade = 59;
	private $senha = "123456789";

	public function verDados(){

		echo $this->nome."<br/>";
		echo $this->idade."<br/>";
		echo $this->senha."<br/>";
	}
}

class Filho extends Pai{

	public function verDados(){

		echo $this->nome."<br/>";
		echo $this->idade."<br/>";
		echo $this->senha."<br/>";
	}
}

$filho = new Filho();

$filho->verDados();


?>