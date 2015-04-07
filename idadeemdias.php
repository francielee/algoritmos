<?php
	
	$ano = $_GET["a"];
	$meses = $_GET["m"];
	$dias = $_GET ["d"];

	echo $resultado = ($ano * "365" + $meses * "30" + $dias);
?>