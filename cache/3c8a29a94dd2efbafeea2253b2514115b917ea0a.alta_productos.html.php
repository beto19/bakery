<?php
/* Smarty version 3.1.28, created on 2016-06-03 23:35:30
  from "/var/www/html/bakery/templates/Admin/alta_productos.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57525a9246a5d2_12582660',
  'file_dependency' => 
  array (
    '3c8a29a94dd2efbafeea2253b2514115b917ea0a' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/alta_productos.html',
      1 => 1463977407,
      2 => 'file',
    ),
    'd40b3e47c89b01bab11ed4176e0e390579cf1f0b' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/header.html',
      1 => 1464780603,
      2 => 'file',
    ),
    '671ab650005ee8b55fa30f71dbefd1e9cfac090e' => 
    array (
      0 => '/var/www/html/bakery/templates/tablaUsuarios.html',
      1 => 1463973836,
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
function content_57525a9246a5d2_12582660 ($_smarty_tpl) {
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
                <h1>Actualizar producto</h1>
                    <form role="form" action="../Admin/altaProductosC.php" method="post" id="login-form" autocomplete="off"
                    enctype='multipart/form-data' accept-charset='utf-8'>
                        <div class="form-group">
                                                    <label for="text" class="sr-only">Nombre</label>
                            <input type="text" name="nombre" class="form-control"  value="Concha">
                        
                        <input type="hidden" name="id_producto" value="5"/>
                        <input type="hidden" name="foto" value="pan1.jpg"/>
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Precio</label>
                            <input type="text" name="precio" class="form-control" placeholder="precio del producto" value="5">
                        </div>
                                                <div class="form-group">
                            <label for="sel1">Foto:</label>
                            <input type='file' name="foto">
                        </div>
                        <div class="form-group">
                          <label for="comment">Descripción:</label>
                          <textarea class="form-control" rows="5" id="comment" name="descripcion">Conchas hechas con harina integral</textarea>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Enviar" 
                        name="ingresar">
                    </form>
                    <hr>
                    <table class="table table-striped">
  	 	<tr>
  	 		  		    <th>id_producto</th>
			    		    <th>producto</th>
			    		    <th>foto</th>
			    		    <th>precio</th>
			          <th>Eliminar</th>
        <th>Actualizar</th>
	  	</tr>
		
   	    
        	          <tr>
         	 	<td>
              	1
          	</td>
              <td>
                pastel de flores
            </td>
            <td>
                <img src='../image/pastel1.jpg' width='150'/>
            </td>
              <td>
                150
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=1"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=1"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	2
          	</td>
              <td>
                Pastel regalo
            </td>
            <td>
                <img src='../image/pastel2.jpg' width='150'/>
            </td>
              <td>
                250
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=2"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=2"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	3
          	</td>
              <td>
                Pastel Francés 
            </td>
            <td>
                <img src='../image/pastel3.jpg' width='150'/>
            </td>
              <td>
                300
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=3"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=3"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	4
          	</td>
              <td>
                Pastel de Mickey Mouse
            </td>
            <td>
                <img src='../image/pastel4.jpg' width='150'/>
            </td>
              <td>
                5000
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=4"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=4"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	5
          	</td>
              <td>
                Concha
            </td>
            <td>
                <img src='../image/pan1.jpg' width='150'/>
            </td>
              <td>
                5
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=5"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=5"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	6
          	</td>
              <td>
                Pan para rebanar
            </td>
            <td>
                <img src='../image/pan2.jpg' width='150'/>
            </td>
              <td>
                30
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=6"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=6"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	7
          	</td>
              <td>
                Panqué de nuez
            </td>
            <td>
                <img src='../image/pan3.jpg' width='150'/>
            </td>
              <td>
                50
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=7"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=7"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	8
          	</td>
              <td>
                Cuernitos
            </td>
            <td>
                <img src='../image/pan4.jpg' width='150'/>
            </td>
              <td>
                10
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=8"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=8"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	9
          	</td>
              <td>
                Galleta con chispas de chocolate
            </td>
            <td>
                <img src='../image/galleta1.jpg' width='150'/>
            </td>
              <td>
                5
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=9"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=9"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	10
          	</td>
              <td>
                Galleta de avena
            </td>
            <td>
                <img src='../image/galleta2.jpg' width='150'/>
            </td>
              <td>
                5
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=10"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=10"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	11
          	</td>
              <td>
                Galleta de granola
            </td>
            <td>
                <img src='../image/galleta3.jpg' width='150'/>
            </td>
              <td>
                5
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=11"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=11"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	12
          	</td>
              <td>
                Caja de madalenas
            </td>
            <td>
                <img src='../image/galleta4.jpg' width='150'/>
            </td>
              <td>
                100
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=12"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=12"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	13
          	</td>
              <td>
                Cupcakes
            </td>
            <td>
                <img src='../image/postre1.jpeg' width='150'/>
            </td>
              <td>
                10
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=13"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=13"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	14
          	</td>
              <td>
                Fresas de chocolate
            </td>
            <td>
                <img src='../image/postre2.jpg' width='150'/>
            </td>
              <td>
                20
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=14"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=14"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	15
          	</td>
              <td>
                Pastelillos de chocolate
            </td>
            <td>
                <img src='../image/postre3.jpg' width='150'/>
            </td>
              <td>
                10
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=15"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=15"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	16
          	</td>
              <td>
                Tartaletas
            </td>
            <td>
                <img src='../image/postre4.jpg' width='150'/>
            </td>
              <td>
                30
            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=16"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=16"><span class="glyphicon glyphicon-pencil"></span></a>
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
