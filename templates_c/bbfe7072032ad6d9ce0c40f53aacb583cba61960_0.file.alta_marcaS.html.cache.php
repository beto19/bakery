<?php
/* Smarty version 3.1.28, created on 2016-06-04 12:30:17
  from "/var/www/html/bakery/templates/Admin/alta_marcaS.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5753102911a291_90249866',
  'file_dependency' => 
  array (
    'bbfe7072032ad6d9ce0c40f53aacb583cba61960' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/alta_marcaS.html',
      1 => 1465061413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/header.html' => 1,
    'file:tablaCategoria.html' => 1,
    'file:Admin/footer.html' => 1,
  ),
),false)) {
function content_5753102911a291_90249866 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1342386725753102910e193_78857151';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="form">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Actualizar Categoria</h1>
                    <form role="form" action="../Admin/altaMarcaC.php" method="post" id="form" autocomplete="off">
                        <div class="form-group">
                            <label for="text" class="sr-only">Nombre</label>
                            <input type="text" name="categoria" class="form-control" placeholder="Nombre de la marca" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_marca']->value;?>
" name="id_marca"></input>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Enviar" 
                        name="ingresar">
                    </form>
                    <hr>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:tablaCategoria.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
