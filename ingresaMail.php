<?php
include('sistema.php');
$web->temperatura();
$web->smarty->display('ingresaMail.html');
?>