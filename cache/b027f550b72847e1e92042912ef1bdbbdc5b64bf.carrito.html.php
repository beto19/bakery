<?php
/* Smarty version 3.1.28, created on 2016-06-04 12:16:51
  from "/var/www/html/bakery/templates/cliente/carrito.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57530d03286579_47265447',
  'file_dependency' => 
  array (
    'b027f550b72847e1e92042912ef1bdbbdc5b64bf' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/carrito.html',
      1 => 1464547861,
      2 => 'file',
    ),
    '76c13e15baa089b06b3531fe6effa6205a83107d' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/header.html',
      1 => 1464780463,
      2 => 'file',
    ),
    'c241a7ba75c6c078bf8ea5f322c05d24d4a0c216' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/tablaCarrito.html',
      1 => 1464590725,
      2 => 'file',
    ),
    '8db2bb02fc4362f8c4e77fcb2266b00dc4b7e5ef' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/footer.html',
      1 => 1464553271,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_57530d03286579_47265447 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
 

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   <!--ejecuta la camara!-->
  <script type="text/javascript" src="../js/script.js"></script>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-XYCjB+hFAjSbgf9yKUgbysEjaVLOXhCgATTEBpCqT1R3jvG5LGRAK5ZIyRbH5vpX" crossorigin="anonymous">

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
      <a class="navbar-brand" href="../cliente/indexClienteC.php">Beto´s Bakery</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../cliente/indexClienteC.php">Inicio<span class="sr-only">(current)</span></a></li>
        <li><a href="../cliente/llenaCarritoC.php">carrito</a></li>
        <li><a href="../cliente/mostrarC.php">productos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">hgfjhgjhg@gmail.com<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../cliente/cambiarContrasenaC.php">Cambiar Contraseña</a></li>
              <li><a href="../cliente/datosClienteC.php">Cambiar datos personales</a></li>
              <li><a href="../logout.php">Logout</a></li>
              <li><a href="../cliente/historialC.php">Historial de compras</a></li>
              <li><a href="../cliente/pdfC.php">Historial de compras(PDF)</a></li>
            </ul>
          </li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div >
    	<form action="../cliente/compraCarritoC.php" method="post">
            <table class="table table-striped">
  	 	<tr>
  	 		<th>Nombre</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Subtotal</th>
        <th>Foto</th>
        <th>Borrar</th>
	  	</tr>
		
   	    
        	          <tr>
         	 	<td>
              	Concha
          	</td>

            <td>
                5
            </td>

            <td>
               <label>$</label> 5
            </td>
            <td>
                <label>$</label>25 
            </td>
            
            <td>
              <img src="../image/pan1.jpg" width='150' height="160">
            </td>
            
            <td>
             <a href="../cliente/borraArticuloC.php?id_producto=5"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
          </tr>
        	
          

  	 	</table>
                              <div>
       <label>Total: $25</label>
       <input type="hidden" name="total" value="25">
      </div>

        	<input id='botonVender' type='submit' value='Comprar' class="btn btn-info" name="botonVender" />
        </form>
        <form action="../cliente/borrarCarritoC.php" method="post">
        	<input id='botonEliminar' type='submit' value='Eliminar carrito' class="btn btn-danger "
    	    name="botonEliminar" />
    	</form>
    </div>
</body>
</html><?php }
}
