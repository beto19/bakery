<?php
/* Smarty version 3.1.28, created on 2016-06-04 00:17:50
  from "/var/www/html/bakery/templates/formulario_login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5752647e40a053_60254486',
  'file_dependency' => 
  array (
    '10a4f052882eb1c6d017f1e41e86ab663b9a124a' => 
    array (
      0 => '/var/www/html/bakery/templates/formulario_login.html',
      1 => 1465017466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5752647e40a053_60254486 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20455961635752647e3ff721_11865339';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap">
                <form role="form" action='login.php' method='post' enctype='multipart/form-data' accept-charset='utf-8' data-toggle="validator">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id="ejemplo_email_1"
                           placeholder="Introduce tu email"
                           name="email" required>
                  </div>
                  <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" id="ejemplo_password_1" 
                           placeholder="Contraseña"
                           name="contrasena" minlength="8" required>
                  </div>
                  <div class="form-group">
                    <a href="ingresaMail.php">Recuperar contraseña</a> 
                    <a href="cuentaNueva.php">Crear una cuenta nueva</a>
                  </div>
                  
                  <button type="submit" class="btn btn-default">Enviar</button>
                </form>
              </div>
          </div>
      </div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
