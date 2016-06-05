<?php
/* Smarty version 3.1.28, created on 2016-06-02 19:43:42
  from "/var/www/html/bakery/templates/cliente/muestratabla.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5750d2be639b73_15800175',
  'file_dependency' => 
  array (
    'e2154492f508716cd37944b82205827779d0b61e' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/muestratabla.html',
      1 => 1464563959,
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
function content_5750d2be639b73_15800175 ($_smarty_tpl) {
?>
<div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap">
                <ol class="breadcrumb">
                  <li><a href="../cliente/indexClienteC.php">Inicio</a></li>
                  <li class="active">Pasteles</li>
                </ol>
              </div>
          	 	<table class="table table-striped">
          	 	<tr>
          	 		
          		    <th>Producto</th>
                  <th>foto</th>
                  <th>Precio</th>
                  <th>Categoria</th>
                  <th>Comprar</th>
          		</tr>
          		                  <tr>
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
                       pastel
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=1"><span class="glyphicon glyphicon-tag"></span></a>
                    </td>
                  </tr>
                                    <tr>
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
                       pastel
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=2"><span class="glyphicon glyphicon-tag"></span></a>
                    </td>
                  </tr>
                                    <tr>
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
                       pastel
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=3"><span class="glyphicon glyphicon-tag"></span></a>
                    </td>
                  </tr>
                                    <tr>
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
                       pastel
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=4"><span class="glyphicon glyphicon-tag"></span></a>
                    </td>
                  </tr>
                            	 	</table>
            </div>
      </div>
    </div>
</div>

  </body>
</html>
<?php }
}
