<?php
/* Smarty version 3.1.28, created on 2016-06-02 08:15:36
  from "/var/www/html/bakery/templates/descripcion.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5750317842e024_28389670',
  'file_dependency' => 
  array (
    '0f56b7825e941d1a8184299f231dff748beb132b' => 
    array (
      0 => '/var/www/html/bakery/templates/descripcion.html',
      1 => 1464873334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:cliente/footer.html' => 1,
  ),
),false)) {
function content_5750317842e024_28389670 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '184900710957503178418175_88297763';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      <h2><?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
</h2>
      </div>

    <div class="col-md-2">
      <img src="image/<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
" width="200" height="200" class="img-circle img-responsive">
      <h3>$<?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
</h3>  
    </div>

    <div class="col-md-2">
    </div>
    
    <form role="form" action="redireccionar.php" method="post"  autocomplete="on" enctype='multipart/form-data' accept-charset='utf-8'>  
    <input type="hidden" name="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['id_producto']->value;?>
">
      <div class="col-md-2">
        <input type="submit" value="Comprar" ></input>
      </div>
    </form>
  </div>
</div>
<hr/>
<div class="container-fluid" class="col-md-6">
  <h1>Descripción</h1>
  <br>
  <p><?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
</p>
  
</div>

    </div>

<hr/>
<div class="container-fluid" class="col-md-6">
  <h1>Comentarios</h1>
  <table class="table table-striped">
            <?php
$_from = $_smarty_tpl->tpl_vars['descripcionCliente']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_conexion_0_saved_item = isset($_smarty_tpl->tpl_vars['conexion']) ? $_smarty_tpl->tpl_vars['conexion'] : false;
$__foreach_conexion_0_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['conexion'] = new Smarty_Variable();
$__foreach_conexion_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_conexion_0_total) {
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['conexion']->value) {
$__foreach_conexion_0_saved_local_item = $_smarty_tpl->tpl_vars['conexion'];
?>
            <tr>
               <td>
                <h2><?php echo $_smarty_tpl->tpl_vars['conexion']->value['nombre'];?>
  <?php echo $_smarty_tpl->tpl_vars['conexion']->value['apaterno'];?>
:<br/><?php echo $_smarty_tpl->tpl_vars['conexion']->value['comentario'];?>
</h2>
              </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['conexion'] = $__foreach_conexion_0_saved_local_item;
}
}
if ($__foreach_conexion_0_saved_item) {
$_smarty_tpl->tpl_vars['conexion'] = $__foreach_conexion_0_saved_item;
}
if ($__foreach_conexion_0_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_conexion_0_saved_key;
}
?>
  </table>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
