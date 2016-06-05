<?php
include("../sistema.php");
session_start();
//$web->checkRol("empleado");
$email=$_SESSION['email'];
$id = $web->getIdEmpleado($email);
$web->query("select foto from empleado where id_empleado=$id");
$arr = $web->rs->GetArray();
header("Content-type: image/jpeg");
echo $arr[0]['foto'];
?>