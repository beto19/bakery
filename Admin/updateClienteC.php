<?php
include('../sistema.php');
session_start();
$nombre=$_POST['nombre'];
$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$nacimiento=$_POST['nacimiento'];
$direccion=$_POST['direccion'];
if ($_SESSION['logueado']==0)
        {
           echo "<script>
	      alert('No ha iniciado sesión'); 
		  history.back();
		  </script>";
		  die();
		}
$id_cliente=$_POST['id_cliente'];
$email=$_SESSION['email'];
$web->nombreHeader($email);
$web->query("update cliente set 
			nombre='$nombre',
			apaterno='$apaterno',
			amaterno='$amaterno',
			nacimiento='$nacimiento',
			direccion='$direccion'
			where id_cliente=$id_cliente");
echo "<script>
			      <!--
					alert('Se actualizaron los datos de $nombre ');
				  -->
		  	 </script>";
echo "<script>
			      <!--
					document.location.href = 'usuariosC.php';
				  -->
		  	 </script>";
?>