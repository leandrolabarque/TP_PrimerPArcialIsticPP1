<?php 
$miobjeto=new stdClass();
$miobjeto->Patente=$_GET['Patente'];
$miobjeto->Horario=$_GET['Horario'];

	$miobjeto->Bicicleta=$_GET['Bicicleta']
	$miobjeto->Moto=$_GET['Moto']
	$miobjeto->Auto=$_GET['Auto']
	$miobjeto->Camioneta=$_GET['Camioneta']

$archivo=fopen('usuarios.txt','a');
fwrite($archivo,json_encode($miobjeto)."\n");
fclose($archivo);
?>