<?php
/* Smarty version 3.1.28, created on 2016-06-04 15:14:26
  from "/var/www/html/bakery/templates/Admin/alta_productos_NA.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_575336a22333e9_79073158',
  'file_dependency' => 
  array (
    '0ce8a119367a5d3602802482bdacf4039f3048ca' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/alta_productos_NA.html',
      1 => 1465071258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/header.html' => 1,
    'file:combo.html' => 1,
    'file:tablaUsuarios.html' => 1,
    'file:Admin/footer.html' => 1,
  ),
),false)) {
function content_575336a22333e9_79073158 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1378308126575336a221ca79_79344662';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="form">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Ingresar nuevo Producto</h1>
                    <form role="form" action="../Admin/altaProductosC.php" method="post" id="login-form" autocomplete="off"
                    enctype='multipart/form-data' accept-charset='utf-8' data-toggle="validator">
                        <div class="form-group">
                       
                            <label for="text" class="sr-only">Nombre</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre del producto" required>
                        
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Precio</label>
                            <input type="text" name="precio" class="form-control" placeholder="precio del producto" required>
                        </div>
                       
                        <div class="form-group">
                          <label for="sel1">Seleccionar Marca:</label> 
                          <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:combo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                     
                        </div>
                        <div class="form-group">
                            <label for="sel1">Foto:</label>
                            <input type='file' name="foto">
                        </div>
                        <div class="form-group">
                          <label for="comment">Descripción:</label>
                          <textarea class="form-control" rows="5" id="comment" name="descripcion" required></textarea>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Enviar" 
                        name="ingresar">
                    </form>
                    <hr>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:tablaUsuarios.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
