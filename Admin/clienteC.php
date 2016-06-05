<?php
include ('../sistema.php');
$email=$_POST['email'];

if ($email=='') 
{
	echo "<script>
		      <!--
				alert('Falta algún campo por validar');
				document.location.href = 'usuariosC.php';
			  -->
	  	 </script>";
	  	 die();
}

if (!$web->validarEmail($email)) 
{
	$clave=$web->generarClave();
	$query=("insert into usuario (email,clave) values('$email','$clave')");
	$web->query($query);
	$id_usuario=$web->getID($email);
	echo $id_usuario;
	$web->query("insert into rol_usuario (id_rol,id_usuario) values(2,'$id_usuario') ");
	$web->query("insert into cliente (id_usuario) values ($id_usuario)");
		echo "<script>
		      <!--
				alert('Se agrego un cliente a la base de datos');
				document.location.href = 'usuariosC.php';
			  -->
	  	 </script>";
	  	 die();
}
?>