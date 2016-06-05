<?php
	include('../sistema.php');
$nombre='';
$precio='';
$foto='';
$id_marca='';

session_start();
if ($_SESSION['logueado']==0) 
{
	echo "<script>
	      alert('Ingrese sesión primero'); 
		  </script>";
		  header('Location: ../index.php');
		  die();
}
$email=$_SESSION['email'];
$web->nombreHeader($email);
//ingresar un nuevo producto
if(isset($_POST['ingresar']) && isset($_POST['id_categoria']))
{
		$id_categoria=$_POST['id_categoria'];
		$descripcion=$_POST['descripcion'];
		$producto=$_POST['nombre'];
		$precio=$_POST['precio'];
		$foto = $_FILES ['foto']['name'];
		$origen = $_FILES ['foto']['tmp_name'];
		$destino = '/var/www/html/bakery/image/'.$foto;
		if (!move_uploaded_file($origen, $destino)){
			die("Fallo al enviar el archivo ins");
		}

		
		
		$query=("insert into producto (producto,foto,precio,descripcion) values('$producto','$foto','$precio','$descripcion')");
		$web->query($query);
		$id_producto=$web->getIdProducto($producto);
		$web->query("insert into producto_categoria (id_producto,id_categoria) values ($id_producto,$id_categoria)");
		echo "<script>
	      		alert('Se ha ingresado un nuevo producto'); 
		  		history.back();
		 	  </script>";
	die();

	
}
//si el por medio de POST el campo ingresar esta vacio , y por medio del GET id esta vacio
if (!isset($_POST['ingresar']) && !isset($_GET['id_producto']))
{
	$datos=$web->comboMarca("select id_categoria, categoria from categoria");
	$productos=$web->tablaMejorada('select id_producto, producto, foto, precio from producto ');
	$web->smarty->assign('productos',$productos);
	$web->smarty->assign('marca',$datos);
	$web->smarty->display('Admin/alta_productos_NA.html');
	//print_r($datos);
	die();
}

//actualizar un producto

if (isset($_GET['id_producto'])) 
{
	$id_producto=$_GET['id_producto'];
	$query="select id_producto, producto, foto, precio, descripcion from producto where id_producto=$id_producto";
	$web->setAltaProductos($query);

}
	elseif(isset($_POST['id_producto']))
	{

		if ($_FILES['foto']['error']==0) 
		{
	    $descripcion=$_POST['descripcion'];
		$nombre=$_POST['nombre'];
		$precio=$_POST['precio'];
		$foto = $_FILES ['foto']['name'];
		$origen = $_FILES ['foto']['tmp_name'];
		$destino = '/var/www/html/ferreweb/image/'.$foto;
		if (!move_uploaded_file($origen, $destino))
		{
			die("Fallo al enviar el archivo act");
		}
		$id_producto=$_POST['id_producto'];
		$query="update producto set
								producto='$nombre',
								foto='$foto',
								precio=$precio,
								descripcion='$descripcion'
								where id_producto=$id_producto";
		$web->query($query);
		//lanzar la plantilla de html para volver a recargar
		echo "<script>
	      		alert('Se actualizo el producto: $nombre '); 
		  		history.back();
		 	  </script>";
		die();
		}
		else
		{
		$descripcion=$_POST['descripcion'];
		$id_producto=$_POST['id_producto'];
		$nombre=$_POST['nombre'];
		$precio=$_POST['precio'];
		$query="update producto set
								producto='$nombre',
								precio=$precio,
								descripcion='$descripcion'
								where id_producto=$id_producto";
		$web->query($query);
		//lanzar la plantilla de html para volver a recargar
		echo "<script>
	      		alert('Se actualizo el producto: $nombre '); 
		  		history.back();
		 	  </script>";
		die();
		}

	}

	


echo "error total";
 
?>