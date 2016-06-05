<?php
include('sistema.php');

try{
	$c =new nusoap_client('http://10.37.129.3/bakery/wsdl/carrito.wsdl','wsdl');
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
$xmlCliente = new SimpleXMLElement($result);
echo "<br>";
print_r($xmlCliente);
?>