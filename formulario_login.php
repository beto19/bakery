<?php
include('sistema.php');
$web->temperatura();
$web->smarty->display('formulario_login.html');
?>