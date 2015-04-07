<?php

/*
Algoritmo que lê as 3 notas de um aluno e calcule a média final deste aluno. Considerar que a média é ponderada e que o peso das notas é: 2,3 e 5, respectivamente.
'*/
	$nota1 = $_GET["n1"];
	$nota2 = $_GET["n2"];
	$nota3 = $_GET["n3"];

	$peso = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5)) / 10;
	$media = ($nota1 + $nota2 + $nota3) / 3;

	echo "Peso: " . $peso . " Media: " . $media;

?>