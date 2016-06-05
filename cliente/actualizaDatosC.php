<?php
include ('../sistema.php');
session_start();
if (!isset($_POST['ingresar'])) 
{
	echo "<script>
	      alert('Algún campo puede estar vacio'); 
		  history.back();
		  </script>";
		  die();
}
$nombre=$_POST['nombre'];
$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$nacimiento=$_POST['nacimiento'];
$direccion=$_POST['direccion'];
$email=$_SESSION['email'];
$id_usuario=$web->getID($email);
$query="update cliente
		set nombre='$nombre',
		apaterno='$apaterno',
		amaterno='$amaterno',
		nacimiento='$nacimiento',
		direccion='$direccion'
		where id_usuario='$id_usuario'";
$web->query($query);
echo"<SCRIPT language='JavaScript'>
			<!--
			alert('Se han actualizado correctamente los datos');
			document.location.href = 'datosClienteC.php';
			-->
	 </script> ";  
die();
?>