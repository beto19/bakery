<?php
include('sistema.php');
$web->temperatura();
$web->divisa();
$web->smarty->display('index.html');
?>