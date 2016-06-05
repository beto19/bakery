<?php
	include ('../sistema.php');
	if (isset($_REQUEST['id_producto']))
	{
		$id_categoria=$_REQUEST['id_producto'];
		
	}
	else
	{
		echo "<script>
	      		alert('No se recibio la referencia de la marca'); 
		  		history.back();
		 	  </script>";
		 	  die();
	}
	$web->query("update producto_categoria set id_categoria='' where id_categoria=$id_categoria ");
	$web->query("delete from categoria where id_categoria=$id_categoria");
	echo "<script>
			      <!--
			      	alert('Se ha eliminado una categoria ');
					document.location.href = 'altaMarcaC.php';
				  -->
		  	 </script>";
	
?>