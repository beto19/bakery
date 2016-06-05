<?php
include ('../sistema.php');

$email='';
$contrasena='';
if(isset($_POST['ingresar']))
{
	$email=$_POST['email'];
	if (!$web->validarEmail($email)) 
	{
		$clave=md5($contrasena);
		$query=("insert into usuario (email,clave) values('$email','$clave')");

		
		$web->query($query);
		$id=$web->getID($email);
		$web->query("insert into rol_usuario (id_rol,id_usuario) values(2,'$id') ");

		echo "<script>
			      <!--
					alert('Se ha ingresa un usuario nuevo');
					document.location.href = 'usuariosC.php';
				  -->
		  	 </script>";
		  	 die();
	}
	else
	{
		echo "Algo esta mal";
	}
}
session_start();
$email=$_SESSION['email'];
$web->nombreHeader($email);
$usuarios=$web->tablaMejorada('select c.id_cliente,c.nombre, c.apaterno, u.email from cliente c
								 inner join usuario u on c.id_usuario=u.id_usuario');
$web->smarty->assign('usuarios',$usuarios);
$web->smarty->display('Admin/alta_login.html');
?>