<?php
/* Smarty version 3.1.28, created on 2016-06-04 14:06:15
  from "/var/www/html/bakery/templates/cliente/indexC.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_575326a70c4c40_35850175',
  'file_dependency' => 
  array (
    'aec47b9846f8f816626f2f507288f4c1a009b539' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/indexC.html',
      1 => 1464558289,
      2 => 'file',
    ),
    '76c13e15baa089b06b3531fe6effa6205a83107d' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/header.html',
      1 => 1465067160,
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
function content_575326a70c4c40_35850175 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
 

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   <!--ejecuta la camara!-->
  <script type="text/javascript" src="../js/script.js"></script>
    <!-- Latest compiled and minified CSS -->
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

<!--<img src="../Admin/setFotoC.php" align="right" width="200">!-->
<div class="container">
      <div class="row">
          <div class="col-xs-12">
            <div class="form-wrap">
				<label>Bienvenidos a Beto´s Bakery</label>
				<h1>Articulos por categoria</h1>
				</hr>
				<br/>

				<div class="col-md-3">
					<a href="../cliente/pastelC.php"><img src="../image/pasteles1.jpg"  width="200" height="200" class="img-circle img-responsive"></a>
					<label>Pasteles</label>
				</div>

				<div class="col-md-3">
					<a href="../cliente/postreC.php"><img src="../image/postres.jpg"  width="200" height="200" class="img-circle img-responsive"></a>
					<label>Postres</label>
				</div>

				<div class="col-md-3">
					<a href="../cliente/panC.php"><img src="../image/panes.jpg"  width="200" height="200" class="img-circle img-responsive"></a>
					<label>Pan</label>
				</div>

				<div class="col-md-3">
					<a href="../cliente/galletasC.php"><img src="../image/galletas.jpg"  width="200" height="200" class="img-circle img-responsive"></a>
					<label>Galletas</label>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
		            <div class="form-wrap">
						<div class="col-12">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
		</div>
	</div>

</div>



	



</body>
</html><?php }
}
