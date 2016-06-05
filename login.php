<?php
include ('sistema.php');
if ($_POST['email']!="" || $_POST['contrasena']!="") 
	{
		$email=$_POST['email'];
		$contrasena=$_POST['contrasena'];
		$web->login($email,$contrasena);
		die();
	}
	else
	{
		  echo "<script>
	      alert('Error al recibir datos del Login'); 
	      document.location.href = 'formulario_login.php'; 
		  </script>";
		  die();	
	}

?>