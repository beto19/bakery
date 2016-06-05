<?php
include ('sistema.php');
//$cantidad=$web->checkFechaCompra(5);
//echo $cantidad;

//$checaCompra=$web->checkFechaCompra(1);
//echo $checaCompra;

//$array=$web->validarLogin("hgfjhgjhg@gmail.com","f8faa655990a4dffe358e13e");
//var_dump($array);
$dolar=$web->divisa();
print_r($dolar);
?>