<?php

class Endereco{
	
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($logradouro, $numero, $cidade){

		$this->$logradouro = $logradouro;
		$this->$numero = $numero;
		$this->$cidade = $cidade;
	}

	public function __destruct($logradouro, $numero, $cidade){

	}
}

$meuEndereco = new Endereco("Rua Uruguai", "161", "São Paulo");

var_dump($meuEndereco);
	
?>