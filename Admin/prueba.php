<?php
include ('../sistema.php');
session_start();
//$web=new Sistema;
//$web->Conectar();
//echo $web->mostrartabla('select * from producto');
//echo $web->comboMarca('select id_marca,marca from marca');
//echo $web->tablaMejorada('select email from usuario');
//echo $web->login("beto.tellez19@gmail",md5(1234));
//echo $web->validarContrasena("asdfghhhhhjhjhjhjhjhjh"
$rol=$_SESSION['roles'];
$roles=$rol['rol'];
$web->pruebaCadenas($roles,"Empleado");
?>