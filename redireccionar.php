<?php
include('sistema.php');
echo "<script>
	      alert('Ingrese sesión primero para poder comprar'); 
		  </script>";
		  header('Location: formulario_login.php');
		  die();
?>