<?php

Class Documento{

	private $numero;

	public function getNumero(){
		return $this->$numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}
}

class Cpf extends Documento{

	public function validar():bool{

		$cpf = $this->getNumero();

		return true;
	}
}

?>