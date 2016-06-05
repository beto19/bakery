<?php
include ('../sistema.php');
session_start();
if ($_SESSION['logueado']==0) 
{
	echo "<script>
	      alert('No ha iniciado sesión'); 
		  history.back();
		  </script>";
		  die();
}
$email=$_SESSION['email'];
$web->nombreHeader($email);
/*print_r($_SESSION['roles']);
echo "</br>";
var_dump($_SESSION['roles']);
echo "</br>";
var_dump($_SESSION['privilegios']);
echo "</br>";
var_dump($_SESSION['email']);
*/
$web->smarty->display('Admin/indexA.html');
?>