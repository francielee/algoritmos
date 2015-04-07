<?php
/*
Algoritmo que lê a idade de uma pessoa expressa em dias e mostre-a expressa em anos, meses e dias.
*/

	$number = $_GET["number"];

	$anos = floor($number / 365);
	$restoanos = $number % 365;

	$meses = floor($restoanos / 30);
	$restomes = $restoanos % 30;

	$dias = $restomes;
	
	echo "Ano: ". $anos." - Meses: ". $meses. " - Dias: ". $dias;
	?>