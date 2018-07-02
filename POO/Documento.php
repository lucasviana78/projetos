<?php

class Documento{
	
	private $numero;

	public function getNumero(){

		return $this->numero;
	}

	public function setNumero($numero){

		$result = Documento::validaCPF($numero);

		if($result === true){
			$this->numero = $numero;
		}else{
			$this->numero = "CPF inválido";
		}
		
	}

	public static function validaCPF($cpf){

		if(strlen($cpf) === 11){
			return true;
		}else{
			return false;
		}
	}
}


$cpf = new Documento();
$cpf->setNumero("4498102681");
var_dump($cpf->getNumero());

//var_dump(Documento::validaCPF("44981026811"));

?>