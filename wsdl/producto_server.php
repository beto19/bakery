<?php
if(!extension_loaded("soap"))
{
	dl("php_soap.dll");
}
ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("producto.wsdl");

function obtenerproducto()
{
	include ("../sistema.php");
	return $web->DB->GetAll("select producto,precio,descripcion from producto");
}
$server->addFunction("obtenerproducto");
$server->handle();
?>