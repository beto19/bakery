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
$rfc=$_POST['rfc'];
$nacimiento=$_POST['nacimiento'];
$email=$_SESSION['email'];
$id_usuario=$web->getID($email);
$query="update empleado
		set nombre='$nombre',
		apaterno='$apaterno',
		amaterno='$amaterno',
		rfc='$rfc',
		nacimiento='$nacimiento'
		where id_usuario='$id_usuario'";
$web->query($query);
echo"<SCRIPT language='JavaScript'>
			<!--
			alert('Se han actualizado correctamente los datos');
			document.location.href = 'datosAdminC.php';
			-->
	 </script> ";  
die();
?>