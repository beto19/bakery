<?php
/* Smarty version 3.1.28, created on 2016-05-31 09:20:03
  from "/var/www/html/bakery/templates/cliente/descripcionArticulo.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574d9d935ffca2_24599021',
  'file_dependency' => 
  array (
    'f631381d5659b7800564612d0f67127d5f39cf33' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/descripcionArticulo.html',
      1 => 1464704391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cliente/header.html' => 1,
    'file:cliente/footer.html' => 1,
  ),
),false)) {
function content_574d9d935ffca2_24599021 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '932727961574d9d935dd843_76527280';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      
      <h2><?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
</h2>
    </div>

    <div class="col-md-2">
      <img src="../image/<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
" width="200" height="200" class="img-circle img-responsive">
      <h3>$<?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
</h3>  
    </div>

    <div class="col-md-2">
    </div>
    
    <form role="form" action="actualizaCarritoC.php" method="post"  autocomplete="on" enctype='multipart/form-data' accept-charset='utf-8'>  
      <input type="hidden" name="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['id_producto']->value;?>
">
      
      <div class="col-md-2">
        <input type="text" placeholder="Cantidad a comprar" name='cantidad'></input>
      </div>

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
<div class="container-fluid" class="col-md-6">
  <label>Deja un comentario</label>
  <form role="form" action="insertaComentarioC.php" method="post"  autocomplete="on" enctype='multipart/form-data' accept-charset='utf-8'>  
      <textarea rows="4" cols="50" name="Comentario"></textarea>
      <input type="hidden" name="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['id_producto']->value;?>
">
      <input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
</div>
  <div class="container-fluid" >
    <input type="submit" value="Enviar comentario" ></input>
  </div>
  </form>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
