<?php

interface Veiculo {

	public function acelerar ($velocidade);
	public function freiar ($velocidade);
	public function trocarMarcha ($marcha);

}

Class Civic implements Veiculo{

	public function acelerar($velocidade){

		echo "O Veículo acelerou até ". $velocidade . "km/h";

	}


	public function freiar($velocidade){

		echo "O Veículo frenou até ". $velocidade . "km/h";
	
	}
	public function trocarMarcha($marcha){

		echo "O Veículo engatou a marcha " . $marcha;
	}	

}

$Civic = new Civic();

$Civic->acelerar(80);


?>