<?php
	
	$bdd = new mysqli("localhost", "root", "10e15p3&", "archiweb");

	function getTypes($bdd){
		return $bdd->query('SELECT * FROM Type_Pokemon');
	}

	function getPokemonsByType($bdd, $poke_type){
		return $bdd->query('SELECT * FROM Pokemon WHERE poke_type='.$poke_type);
	}

	function test_input($data){
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}


?>