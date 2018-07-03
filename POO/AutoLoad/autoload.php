<?php

function __autoload($nomeClass){

	require_once("$nomeClass.php");
}


$carro = new Delrey();
		
$carro->acelerar(40);

?>