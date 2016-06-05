<?php
/* Smarty version 3.1.28, created on 2016-06-02 09:00:32
  from "/var/www/html/bakery/templates/Admin/datosCliente.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57503c003db844_54155114',
  'file_dependency' => 
  array (
    '4df897aa3c2dae8303b2a0291494c5bcec48ac63' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/datosCliente.html',
      1 => 1464876027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/header.html' => 1,
    'file:Admin/footer.html' => 1,
  ),
),false)) {
function content_57503c003db844_54155114 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '107439525057503c003c00b0_04506473';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="form">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Ingresar datos personales</h1>
                    <form role="form" action="../Admin/updateClienteC.php" method="post" id="login-form" autocomplete="on"
                    enctype='multipart/form-data' accept-charset='utf-8' data-toggle="validator">
                        <div class="form-group">
                       <?php
$_from = $_smarty_tpl->tpl_vars['dato']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_paco_0_saved_item = isset($_smarty_tpl->tpl_vars['paco']) ? $_smarty_tpl->tpl_vars['paco'] : false;
$__foreach_paco_0_saved_key = isset($_smarty_tpl->tpl_vars['llave']) ? $_smarty_tpl->tpl_vars['llave'] : false;
$_smarty_tpl->tpl_vars['paco'] = new Smarty_Variable();
$__foreach_paco_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_paco_0_total) {
$_smarty_tpl->tpl_vars['llave'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['llave']->value => $_smarty_tpl->tpl_vars['paco']->value) {
$__foreach_paco_0_saved_local_item = $_smarty_tpl->tpl_vars['paco'];
?>
                            <label for="text" class="sr-only">Nombre</label>
                            <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['paco']->value['nombre'];?>
" class="form-control" placeholder="Nombre" >
                        
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Apellido paterno</label>
                            <input type="text" name="apaterno" value="<?php echo $_smarty_tpl->tpl_vars['paco']->value['apaterno'];?>
" class="form-control" placeholder="Paterno" >
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Apellido materno</label>
                            <input type="text" name="amaterno"  value="<?php echo $_smarty_tpl->tpl_vars['paco']->value['amaterno'];?>
" class="form-control" placeholder="Materno" >
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Fecha de nacimiento</label>
                            <input type="text" name="nacimiento" value="<?php echo $_smarty_tpl->tpl_vars['paco']->value['nacimiento'];?>
" class="form-control" placeholder="dd/mm/aaaa" >
                        </div>

                        <div class="form-group">
                            <label for="key" class="sr-only">Direccion</label>
                            <input type="text" name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['paco']->value['direccion'];?>
" class="form-control" placeholder="direccion" >
                        </div>
                       
                       <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['paco']->value['id_cliente'];?>
" name="id_cliente"></input>
                       <?php
$_smarty_tpl->tpl_vars['paco'] = $__foreach_paco_0_saved_local_item;
}
}
if ($__foreach_paco_0_saved_item) {
$_smarty_tpl->tpl_vars['paco'] = $__foreach_paco_0_saved_item;
}
if ($__foreach_paco_0_saved_key) {
$_smarty_tpl->tpl_vars['llave'] = $__foreach_paco_0_saved_key;
}
?>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Enviar" 
                        name="ingresar">
                    </form>
                    
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
