<?php
/* Smarty version 3.1.28, created on 2016-05-28 18:33:03
  from "/var/www/html/bakery/templates/Admin/alta_productos.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574a2aaf75e3a5_89431898',
  'file_dependency' => 
  array (
    '3c8a29a94dd2efbafeea2253b2514115b917ea0a' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/alta_productos.html',
      1 => 1463977407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/header.html' => 1,
    'file:tablaUsuarios.html' => 1,
    'file:Admin/footer.html' => 1,
  ),
),false)) {
function content_574a2aaf75e3a5_89431898 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '314407333574a2aaf72b908_07502781';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="form">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Actualizar producto</h1>
                    <form role="form" action="../Admin/altaProductosC.php" method="post" id="login-form" autocomplete="off"
                    enctype='multipart/form-data' accept-charset='utf-8'>
                        <div class="form-group">
                        <?php
$_from = $_smarty_tpl->tpl_vars['arreglo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_hugo_0_saved_item = isset($_smarty_tpl->tpl_vars['hugo']) ? $_smarty_tpl->tpl_vars['hugo'] : false;
$__foreach_hugo_0_saved_key = isset($_smarty_tpl->tpl_vars['llave']) ? $_smarty_tpl->tpl_vars['llave'] : false;
$_smarty_tpl->tpl_vars['hugo'] = new Smarty_Variable();
$__foreach_hugo_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_hugo_0_total) {
$_smarty_tpl->tpl_vars['llave'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['llave']->value => $_smarty_tpl->tpl_vars['hugo']->value) {
$__foreach_hugo_0_saved_local_item = $_smarty_tpl->tpl_vars['hugo'];
?>
                            <label for="text" class="sr-only">Nombre</label>
                            <input type="text" name="nombre" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['hugo']->value['producto'];?>
">
                        
                        <input type="hidden" name="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['hugo']->value['id_producto'];?>
"/>
                        <input type="hidden" name="foto" value="<?php echo $_smarty_tpl->tpl_vars['hugo']->value['foto'];?>
"/>
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Precio</label>
                            <input type="text" name="precio" class="form-control" placeholder="precio del producto" value="<?php echo $_smarty_tpl->tpl_vars['hugo']->value['precio'];?>
">
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['hugo'] = $__foreach_hugo_0_saved_local_item;
}
}
if ($__foreach_hugo_0_saved_item) {
$_smarty_tpl->tpl_vars['hugo'] = $__foreach_hugo_0_saved_item;
}
if ($__foreach_hugo_0_saved_key) {
$_smarty_tpl->tpl_vars['llave'] = $__foreach_hugo_0_saved_key;
}
?>
                        <div class="form-group">
                            <label for="sel1">Foto:</label>
                            <input type='file' name="foto">
                        </div>
                        <div class="form-group">
                          <label for="comment">Descripción:</label>
                          <textarea class="form-control" rows="5" id="comment" name="descripcion"><?php echo $_smarty_tpl->tpl_vars['hugo']->value['descripcion'];?>
</textarea>
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
