<?php

//namespace App\POO;

require "Carro.php";
use POO\Carro;

Class teste{

	public static function testar(){

		$gol = new Carro();
		$gol->setModelo("gol");
		$gol->setMotor("1.6");
		$gol->setAno("2005");

		echo "reae";

		var_dump($gol->retornaModelo());

	}
}

?>