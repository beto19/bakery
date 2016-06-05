<?php
/* Smarty version 3.1.28, created on 2016-05-30 01:25:18
  from "/var/www/html/bakery/templates/cliente/carrito.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574bdcceecdc04_55721064',
  'file_dependency' => 
  array (
    'b027f550b72847e1e92042912ef1bdbbdc5b64bf' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/carrito.html',
      1 => 1464547861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cliente/header.html' => 1,
    'file:cliente/tablaCarrito.html' => 1,
    'file:cliente/footer.html' => 1,
  ),
),false)) {
function content_574bdcceecdc04_55721064 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '348124337574bdcceeb3d43_38236818';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div >
    	<form action="../cliente/compraCarritoC.php" method="post">
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/tablaCarrito.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        	<input id='botonVender' type='submit' value='Comprar' class="btn btn-info" name="botonVender" />
        </form>
        <form action="../cliente/borrarCarritoC.php" method="post">
        	<input id='botonEliminar' type='submit' value='Eliminar carrito' class="btn btn-danger "
    	    name="botonEliminar" />
    	</form>
    </div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
