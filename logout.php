<?php
include('sistema.php');
session_start();
$web->logout();
$web->temperatura();
$web->smarty->display('index.html');
?>
