<?php
include('sistema.php');
$contrasenaAnterior=$_REQUEST['contrasenaAnterior'];
$contrasenaNueva=$_REQUEST['contrasenaNueva'];
$contrasenaConfirmar=$_REQUEST['contrasenaConfirmar'];
if (!isset($contrasenaAnterior) and !isset($contrasenaNueva) and !isset($contrasenaAnterior)) 
{
	echo "<script>
	      alert('Los datos no han sido ingresados de manera correcta, favor de ingresarlos correctamente'); 
		  history.back();
		  </script>";
}
if ($contrasenaNueva==$contrasenaConfirmar) 
{
	$contrasenaNueva=md5($contrasenaNueva);
	$query="update usuario set contrasena='$contrasenaNueva',
						  	   clave='' 
						  	   where clave='$contrasenaAnterior'";
	$web->query($query);
	echo "<script>
			      <!--
			      	alert('Se ha cambiado la contraseña correctamente ');
					document.location.href = 'formulario_login.php';
				  -->
		  	 </script>";
}
?>