<?php
/* Smarty version 3.1.28, created on 2016-06-04 11:11:07
  from "/var/www/html/bakery/templates/recuperarContrasena.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5752fd9bdffcb8_90998040',
  'file_dependency' => 
  array (
    'd05c37e96ec142eb1ca7cd5231bbe90dfd834a38' => 
    array (
      0 => '/var/www/html/bakery/templates/recuperarContrasena.html',
      1 => 1464881175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5752fd9bdffcb8_90998040 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6313148735752fd9bd44bd2_26655202';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form role="form" action='actualizarContrasena.php' method='post'
 enctype='multipart/form-data' accept-charset='utf-8'>
    <div class="form-group">
      <label>Ingresar contraseña anterior</label>
      <input type="password" class="form-control" id="ejemplo_password_1" 
             placeholder="Contraseña"
             name="contrasenaAnterior">
    </div>

    <div class="form-group">
      <label>Contraseña nueva</label>
      <input type="password" class="form-control" id="ejemplo_password_1" 
             placeholder="Contraseña"
             name="contrasenaNueva">
    </div>

    <div class="form-group">
      <label>Confirmar contraseña</label>
      <input type="password" class="form-control" id="ejemplo_password_1" 
             placeholder="Contraseña"
             name="contrasenaConfirmar">
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>  
  </form>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
