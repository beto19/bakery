<?php
include('sistema.php');
$web->temperatura();
$web->divisa();
$web->smarty->display('cuentaNueva.html');
?>