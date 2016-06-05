<?php
/* Smarty version 3.1.28, created on 2016-06-04 18:17:28
  from "/var/www/html/bakery/templates/muestratabla.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_575361886ada20_49750968',
  'file_dependency' => 
  array (
    '5dfd4ebf6975c637b4dc66e316d8d4627d845197' => 
    array (
      0 => '/var/www/html/bakery/templates/muestratabla.html',
      1 => 1464544566,
      2 => 'file',
    ),
    '43dc8361f44817889a6b0abc65120b01856ee99b' => 
    array (
      0 => '/var/www/html/bakery/templates/footer.html',
      1 => 1463948515,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_575361886ada20_49750968 ($_smarty_tpl) {
?>
<div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap">
              <h2>Productos</h2>
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
                        <img src='image/pastel1.jpg' width='150'/>
                    </td>
                      <td>
                        150
                    </td>
                    
                    <td>
                       pastel
                    </td>
                    <td>
                       <a href="descripcion.php?id_producto=1"><span class="glyphicon glyphicon-tag"></span></a>
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
