<?php
/* Smarty version 3.1.28, created on 2016-05-22 23:46:58
  from "/var/www/html/bakery/templates/Admin/cambiarContrasenaAdmin.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57428b42b29694_26587817',
  'file_dependency' => 
  array (
    '9051c036d75f7c75d438129116fc0dbb71438d51' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/cambiarContrasenaAdmin.html',
      1 => 1463954236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/header.html' => 1,
    'file:Admin/footer.html' => 1,
  ),
),false)) {
function content_57428b42b29694_26587817 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '185865159257428b42b20355_06264084';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form role="form" action='../Admin/cambiarContrasenaAdminC.php' method='post'
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
    <button type="submit" class="btn btn-default">Cambiar</button>  
  </form>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
