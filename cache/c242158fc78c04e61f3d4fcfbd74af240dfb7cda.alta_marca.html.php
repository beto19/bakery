<?php
/* Smarty version 3.1.28, created on 2016-06-04 14:14:41
  from "/var/www/html/bakery/templates/Admin/alta_marca.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_575328a133a3c2_18605835',
  'file_dependency' => 
  array (
    'c242158fc78c04e61f3d4fcfbd74af240dfb7cda' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/alta_marca.html',
      1 => 1464884173,
      2 => 'file',
    ),
    'd40b3e47c89b01bab11ed4176e0e390579cf1f0b' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/header.html',
      1 => 1465067585,
      2 => 'file',
    ),
    '32094ffefbcb4fef4ff6c6eb9cb100a956db0fb5' => 
    array (
      0 => '/var/www/html/bakery/templates/tablaCategoria.html',
      1 => 1465013541,
      2 => 'file',
    ),
    '799245de4ff7b12de326e4105070a69107d1f46c' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/footer.html',
      1 => 1463954236,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_575328a133a3c2_18605835 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
 

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   <!--ejecuta la camara!-->
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/sandstone/bootstrap.min.css" rel="stylesheet" integrity="sha384-QqZs0aSOGFan3GWVdP4PyCBp6icaF/4n8Q+wsmZUTiiVIqE4r4tFYcb8Osf+8y45" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <meta charset="UTF-8">
  <title>Beto´s Bakery</title>
</head>
<body>
  
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../Admin/indexC.php">Bakery</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../Admin/indexC.php">Inicio<span class="sr-only">(current)</span></a></li>
        <li><a href="../Admin/usuariosC.php">Crear usuario</a></li>
        <li><a href="../Admin/altaProductosC.php">Crear producto</a></li>
        <li><a href="../Admin/altaMarcaC.php">Crear Categoria</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">beto.tellez19@gmail.com <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../Admin/cambiarContrasenaC.php">Cambiar Contraseña</a></li>
              <li><a href="../Admin/datosAdminC.php">Cambiar datos</a></li>
              <li><a href="../Admin/camaraAdminC.php">Cambiar foto</a></li>
              <li><a href="../logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<section id="form">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Ingresar nueva Categoria</h1>
                    <form role="form" action="../Admin/altaMarcaC.php" method="post" id="form" autocomplete="off">
                        <div class="form-group">
                            <label for="text" class="sr-only">Categoria</label>
                            <input type="text" name="categoria" class="form-control" placeholder="Categoria">
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block"  
                        name="ingresar">
                    </form>
                    <hr>
                    <table class="table table-striped">
  	 	<tr>
  	 		  		    <th>id_categoria</th>
			    		    <th>categoria</th>
			          <th>Eliminar</th>
        <th>Actualizar</th>
	  	</tr>
        	          <tr>
         	 	<td>
              	1
          	</td>
              <td>
                pan
            </td>
            <td>
               <a href="../Admin/bajaCategoriaC.php?id_producto=1"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaMarcaC.php?id_producto=1"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	2
          	</td>
              <td>
                pastel
            </td>
            <td>
               <a href="../Admin/bajaCategoriaC.php?id_producto=2"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaMarcaC.php?id_producto=2"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	3
          	</td>
              <td>
                postres
            </td>
            <td>
               <a href="../Admin/bajaCategoriaC.php?id_producto=3"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaMarcaC.php?id_producto=3"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	4
          	</td>
              <td>
                galletas
            </td>
            <td>
               <a href="../Admin/bajaCategoriaC.php?id_producto=4"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaMarcaC.php?id_producto=4"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	5
          	</td>
              <td>
                dulcess
            </td>
            <td>
               <a href="../Admin/bajaCategoriaC.php?id_producto=5"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaMarcaC.php?id_producto=5"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	  	 	</table>
  
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
</body>
</html><?php }
}
