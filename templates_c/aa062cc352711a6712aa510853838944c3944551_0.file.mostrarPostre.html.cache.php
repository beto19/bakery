<?php
/* Smarty version 3.1.28, created on 2016-05-30 12:25:54
  from "/var/www/html/bakery/templates/cliente/mostrarPostre.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574c77a2ac58f5_68801956',
  'file_dependency' => 
  array (
    'aa062cc352711a6712aa510853838944c3944551' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/mostrarPostre.html',
      1 => 1464627122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cliente/footer.html' => 1,
  ),
),false)) {
function content_574c77a2ac58f5_68801956 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '484360111574c77a2aaed45_95193580';
?>
<div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap">
                <ol class="breadcrumb">
                  <li><a href="../cliente/indexClienteC.php">Inicio</a></li>
                  <li class="active">Postres</li>
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
          		<?php
$_from = $_smarty_tpl->tpl_vars['datos']->value;
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
                       <?php echo $_smarty_tpl->tpl_vars['conexion']->value['categoria'];?>

                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=<?php echo $_smarty_tpl->tpl_vars['conexion']->value['id_producto'];?>
"><span class="glyphicon glyphicon-tag"></span></a>
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
      </div>
    </div>
</div>

  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
