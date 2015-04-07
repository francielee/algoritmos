<?php
	
	$number1 = $_GET["number1"];
	$number2 = $_GET["number2"];
	$number3 = $_GET["number3"];

	$calculo1 = pow (($number1 + $number2), 2);
	$calculo2 = pow(($number2 + $number3), 2);

	echo $resultado = ($calculo1 + $calculo2) / 2;
?>