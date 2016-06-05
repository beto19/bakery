<?php
include ('sistema.php');
$email=$_POST['email'];
$contrasena1=$_POST['contrasena1'];
$contrasena2=$_POST['contrasena2'];
$nombre=$_POST['nombre'];
$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$nacimiento=$_POST['nacimiento'];
$direccion=$_POST['domicilio'];
if ($email=='' || $contrasena1='' || $contrasena2='' || $nombre='' || $apaterno='' || $amaterno='' || $nacimiento='' || $direccion='') 
{
	echo "<script>
		      <!--
				alert('Falta algún campo por validar');
				document.location.href = 'cuentaNueva.php';
			  -->
	  	 </script>";
	  	 die();
}
if ($contrasena1!=$contrasena2) {
	echo "<script>
		      <!--
				alert('Las contraseñas no son iguales');
				document.location.href = 'cuentaNueva.php';
			  -->
	  	 </script>";
	  	 die();
}
if (!$web->validarEmail($email)) 
{
	echo "entre al validador";
	$contrasena=md5($contrasena1);
	$query=("insert into usuario (email,contrasena) values('$email','$contrasena')");
	$web->query($query);
	$id_usuario=$web->getID($email);
	$web->query("insert into cliente (nombre,apaterno,amaterno,nacimiento,id_usuario,direccion) values
				('$nombre','$apaterno','$amaterno','$nacimiento',$id_usuario,'$direccion')");
	
	$web->query("insert into rol_usuario (id_rol,id_usuario) values(2,'$id_usuario') ");
		echo "<script>
		      <!--
				alert('Usuario creado correctamente);
				document.location.href = 'cliente/indexC.php';
			  -->
	  	 </script>";
}
?>