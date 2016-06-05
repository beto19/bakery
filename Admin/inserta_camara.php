<?php
    include("../sistema.php");
    //session_start();
    //$web->rol($_SESSION['roles']);
    if(isset($_POST['foto']) && isset($_POST['email']))
	{
        //transformar el email a id_empleado
        $email=$_POST['email'];
        echo $email;
        var_dump($email);
        print_r($email);
        $id=$web->getID($email);
        $web->guarda_foto_empleado($id,trim($_POST['foto']));
    }
?>



