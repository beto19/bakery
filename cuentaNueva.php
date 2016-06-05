<?php
include('sistema.php');
$web->temperatura();
$web->smarty->display('cuentaNueva.html');
?>