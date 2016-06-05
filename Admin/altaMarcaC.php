<?php
include ('../sistema.php');
session_start();
$email=$_SESSION['email'];
$web->nombreHeader($email);
$nombre='';
if(isset($_POST['categoria']) && !isset($_POST['id_marca']))//insert
{
	$nombre=$_POST['categoria'];
		$query=("insert into categoria (categoria) values('$nombre')");
		$web->query($query);
		echo "<script>
	      alert('Se ha ingresado una nueva categoria'); 
		  history.back();
		  </script>";
}

if (isset($_GET['id_producto'])) //entrar al update
{
	$marcas=$web->tablaMarcas("select * from categoria");
	$id_marca=$_GET['id_producto'];
	$query=("select * from categoria where id_categoria=$id_marca");
	$array=$web->DB->GetAll($query);
	$categoria=$array[0]['categoria'];
	$id_marca=$array[0]['id_categoria'];
	$web->smarty->assign('marcas',$marcas);
	$web->smarty->assign('nombre',$categoria);
	$web->smarty->assign('id_marca',$id_marca);
	$web->smarty->display('Admin/alta_marcaS.html');
	die();
}
if (isset($_POST['id_marca']) && isset($_POST['categoria'])) //hacer el update
{
	$nombre=$_POST['categoria'];
	$id_marca=$_POST['id_marca'];
	$web->query("update categoria set categoria='$nombre' where id_categoria=$id_marca ");
	echo "<script>
			      <!--
			      	alert('Se ha actualizado un producto ');
					document.location.href = 'altaMarcaC.php';
				  -->
		  	 </script>";
		  	 die();
}
$marcas=$web->tablaMarcas("select * from categoria");
$web->smarty->assign('marcas',$marcas);
$web->smarty->display('Admin/alta_marca.html');
?>