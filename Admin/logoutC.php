<?php
include('../sistema.php');
session_start();
$web->logout();
$web->smarty->display('../templates/index.html');
?>