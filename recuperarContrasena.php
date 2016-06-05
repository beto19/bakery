<?php
include('sistema.php');
//AQUI VOY A PROGRAMAR EL ENVIO DE UN FORMULARIO QUE ME ENVIE EL CORREO ELECTRONICO MEDIANTE UNA CASILLA DE TEXTO
if (isset($_REQUEST['email'])) 
{
	$email=$_REQUEST['email'];
}
else
{
	$web->error('Debe especificar un correo electronico');
}
//AQUI VOY A COSULTAR A LA BD DE CUENTAS PARA SABER SI EL MAIL QUE ME ENVIARON ES VALIDO Y TRATAR DE OBTENER EL NOMBRE DE LA PERSONA DUEÑA DE ESE MAIL
$nombre="A quien corresponda";
$clave=$web->generarClave();
$mensaje="Hola estimado usuario de Beto´s Bakery con esta clave va a poder ingresar al sistema. Se le pide de la manera mas atenta que al ingresar su contraseña la cambie por una nueva. 
    Att: Soporte de Beto´s Bakery ";
$web->sendMail($email,$nombre,$mensaje,$clave);
//AQUI VOY HACER UN update PARA GUARDAR LA CONTRASEÑA ENCRIPTADA EN LA BASE DE DATOS
$query="update usuario set clave='$clave' where email='$email'";
$web->query($query);
//quitar el mensaje de la parte de arriba, cambiar el header por uno uqe no tenga botones
$web->smarty->display('recuperarContrasena.html');
?>

