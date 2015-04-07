<?php 
	
	$x1 = $_GET["x1"];
	$x2 = $_GET["x2"];

	$y1 = $_GET["y1"];
	$y2 = $_GET["y2"];

	$calculo = sqrt( 
		pow( ($x2 - $x1), 2 ) + 
		pow( ($y2 - $y1), 2 ) 
	);

	echo $calculo;
?>