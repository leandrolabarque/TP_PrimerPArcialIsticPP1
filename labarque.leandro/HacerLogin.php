<?php
$miobjeto=new stdClass();
$miobjeto->Usuario=$_GET['Usuario'];
$miobjeto->Contraseña=$_GET['Contraseña'];
$Bandera=1;

$archivo=fopen('usuarios.txt','a');
while(!feof($archivo))
{
	$miobjeto=json_encode((fgets($miobjeto));

	if ($miobjeto ->Usuario == $checkUsuario){
		if ($objeto->Contraseña == $checkContraseña)
		{
			$Bandera=0;
		}
	}
	
}

if($Bandera=0)
	{
		header("Location: EstacionamientoIndex.php")
		fclose($archivo)
		exit();
	}
	else
		{	header("Location: nok.php")
			fclose($archivo)
			exit();}
			
fwrite($archivo,json_encode($miobjeto)."\n");
fclose($archivo);
?>