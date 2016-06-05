<?php
/* Smarty version 3.1.28, created on 2016-05-31 17:39:02
  from "/var/www/html/bakery/templates/cliente/historial.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574e1286bd4501_88254336',
  'file_dependency' => 
  array (
    'c4d93d8749f59327333c58406df46fe243615106' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/historial.html',
      1 => 1464734338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cliente/header.html' => 1,
    'file:cliente/footer.html' => 1,
  ),
),false)) {
function content_574e1286bd4501_88254336 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '171809961574e1286bbda36_64602612';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap">
              <h2>Compras</h2>
          	 	<table class="table table-striped">
          	 	<tr>
          	 		
          		    <th>Producto</th>
                  <th>foto</th>
                  <th>Subtotal</th>
                  <th>Cantidad</th>
          		</tr>
              <?php $_smarty_tpl->tpl_vars['suma'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'suma', 0);?>
          		<?php
$_from = $_smarty_tpl->tpl_vars['dato']->value;
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
                        <?php echo $_smarty_tpl->tpl_vars['conexion']->value['producto'];?>

                    </td>
                    <td>
                        <img src='../image/<?php echo $_smarty_tpl->tpl_vars['conexion']->value['foto'];?>
' width='150'/>
                    </td>
                      <td>
                        <?php echo $_smarty_tpl->tpl_vars['conexion']->value['precio'];?>

                    </td>
                    
                    <td>
                       <?php echo $_smarty_tpl->tpl_vars['conexion']->value['cantidad'];?>

                       <?php $_smarty_tpl->tpl_vars['suma'] = new Smarty_Variable($_smarty_tpl->tpl_vars['suma']->value+$_smarty_tpl->tpl_vars['conexion']->value['cantidad'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'suma', 0);?>
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
              <div>
                 <h2>Total: $<?php echo $_smarty_tpl->tpl_vars['suma']->value;?>
</h2>
            </div>
      </div>
    </div>
</div>

  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
