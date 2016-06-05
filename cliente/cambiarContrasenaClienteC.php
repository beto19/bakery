<?php
include ('../sistema.php');
session_start();
if ($_SESSION['logueado']==0) 
{
	echo "<script>
	      alert('Ingrese sesión primero'); 
		  </script>";
		  header('Location: ../formulario_login.php');
		  die();
}
$contrasenaAnterior=$_REQUEST['contrasenaAnterior'];
$contrasenaNueva=$_REQUEST['contrasenaNueva'];
$contrasenaConfirmar=$_REQUEST['contrasenaConfirmar'];
$email=$_SESSION['email'];
if (!isset($contrasenaAnterior) and !isset($contrasenaNueva) and !isset($contrasenaAnterior)) 
{
	echo "<script>
	      alert('Los datos no han sido ingresados de manera correcta, favor de ingresarlos correctamente'); 
		  history.back();
		  </script>";
		  die();
}

/*$tuplas=$web->numRegistros("select * from usuario where email='$email'");
if ($tuplas==0) 
{
	echo "<script>
	      alert('La contraseña no es la correcta'); 
		  history.back();
		  </script>";
		  die();
}*/
$contrasena=md5($contrasenaAnterior);
$tuplas=$web->numRegistros("select * from usuario where email='$email' and contrasena='$contrasena' ");

if ($tuplas==0) 
{
	echo "<script>
	      alert('La contraseña Anterior no es la correcta'); 
		  history.back();
		  </script>";
		  die();
}

if (!$web->validarContrasena($contrasenaNueva)) 
{
	echo "<script>
	      alert('La contraseña debe tener mínimo 8 caracteres, un caracter mayúscula, uno en minúscula y un caracter raro'); 
		  history.back();
		  </script>";
		  die();
}

if ($contrasenaNueva==$contrasenaConfirmar) 
{
	$contrasenaNueva=md5($contrasenaNueva);
	$query="update usuario set contrasena='$contrasenaNueva',
						  	   clave='' 
						  	   where email='$email'";
	$web->query($query);
	echo "<script>
	      alert('Contraseña actualizada'); 
	       location.href=../cliente/indexClienteC.php;
		  </script>";
		  die();
}
echo "error fatal";
?>
