<?php

	/*
	Algoritmo que lê a idade de uma pessoa expressa em anos, meses e dias e mostre-a expressa apenas em dias

	*/
	
	$ano = $_GET["a"];
	$meses = $_GET["m"];
	$dias = $_GET ["d"];

	echo $resultado = ($ano * 365 + $meses * 30 + $dias);
?>