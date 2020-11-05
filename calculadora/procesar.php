<?php 
	require_once "clasecalculo.php";
	$calcular = new calculadora();

	$val1=$_POST['val1'];
	$val2=$_POST['val2'];
	$opicion=$_POST['opcion'];

	echo $calcular->calcularDatos($val1,$val2,$opicion);
 ?>