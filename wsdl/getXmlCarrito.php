<?php
ini_set("soap.wsdl_cache_enabled","0");
$server = new SoapServer("carrito.wsdl");
function obtenercarrito($buscar)
{
    include('sistema.php');
    $xml = new SimpleXMLElement('<xml/>');
    $array=$web->DB->GetAll("select ca.id_carrito, c.nombre,c.id_cliente,ca.fecha from 
    						cliente c inner join carrito ca on c.id_cliente=ca.id_cliente
    				        where ca.id_cliente=2");
    //print_r($array);
    foreach ($array as $key => $array) 
    {
    	//echo $array['c.nombre'];
        $carrito = $xml->addChild('Carrito');
        $carrito->addAttribute('carrito',''.$array['id_carrito'].'');  
        $carrito->addChild('Cliente', ''.$array['nombre'].'');
        $carrito->addChild('id', ''.$array['id_cliente'].'');
        $carrito->addChild('total', "1000");
        $carrito->addChild('fecha', ''.$array['fecha'].'');
    	
    }


    $producto=$web->DB->GetAll("select id_producto, producto, precio, cantidad, subtotal from vista where id_carrito=2");
    foreach ($producto as $key => $producto) 
    {
        $productos=$xml->addChild('producto');
        $productos->addAttribute('id_producto', ''.$producto['id_producto'].'');
        $productos->addChild('Nombre',''.$producto['producto'].'');
        $productos->addChild('Precio',''.$producto['precio'].'');
        $productos->addChild('Cantidad',''.$producto['cantidad'].'');
        $productos->addChild('subtotal',''.$producto['subtotal'].'');
    }
    Header('Content-type: text/xml');
    return $xml->asXML();
}
$server->addFunction("obtenercarrito");
$server->handle();
?>