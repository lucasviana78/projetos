<?php

abstract Class Animal{

	public function falar(){

		return "som";

	}


	public function mover(){

		return "som";
	
	}

}

class Cachorro extends Animal{

	public function falar(){
			return "au au e " . parent::falar();
	}	
}

class Gato extends Animal{

	public function falar(){
			return "Miau";
	}	
}

$cachorro = new Cachorro();
$gato = new Gato();

echo $cachorro->falar();
echo $gato->falar();

?>