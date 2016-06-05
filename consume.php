<?php
include('sistema.php');

try{
	$c =new nusoap_client('http://192.168.1.74/bakery/wsdl/producto.wsdl','wsdl');
	//$parameters=array('buscar'=>'u');
	$result=$c->call('obtenerproducto');
}
catch(Exception $ex)
{
	echo "failed";
}
//ya puedo procesar la informacion
echo '<pre>';
print_r($result);
echo "se encontraron: ".sizeof($result)."Productos";
?>