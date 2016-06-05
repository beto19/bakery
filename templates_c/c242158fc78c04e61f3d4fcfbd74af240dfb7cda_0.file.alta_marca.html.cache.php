<?php
/* Smarty version 3.1.28, created on 2016-06-02 11:18:12
  from "/var/www/html/bakery/templates/Admin/alta_marca.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57505c44dffa66_66888155',
  'file_dependency' => 
  array (
    'c242158fc78c04e61f3d4fcfbd74af240dfb7cda' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/alta_marca.html',
      1 => 1464884173,
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
function content_57505c44dffa66_66888155 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '178509988457505c44df9f08_24777365';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
