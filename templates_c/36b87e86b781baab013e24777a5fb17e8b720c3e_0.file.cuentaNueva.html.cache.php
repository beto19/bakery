<?php
/* Smarty version 3.1.28, created on 2016-06-04 00:14:06
  from "/var/www/html/bakery/templates/cuentaNueva.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5752639e193602_19938302',
  'file_dependency' => 
  array (
    '36b87e86b781baab013e24777a5fb17e8b720c3e' => 
    array (
      0 => '/var/www/html/bakery/templates/cuentaNueva.html',
      1 => 1465017242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5752639e193602_19938302 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13375694335752639e185c68_10985674';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap" method='post' enctype='multipart/form-data' accept-charset='utf-8' id="formularioValidate"  data-toggle="validator">
                 <h1>Creación de cuenta</h1>
                <form role="form" action='cuenta.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id="ejemplo_email_1"
                           placeholder="Introduce tu email"
                           name="email" required>
                  </div>
                  <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" id="ejemplo_password_1" 
                           placeholder="Contraseña" minlength="8"  
                           name="contrasena1" required>
                  </div>
                  <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" id="ejemplo_password_1" 
                           placeholder="Repite la contraseña"
                           name="contrasena2" minlength="8" required>
                  </div>
                  <hr/>
                  <h1>Datos Personales</h1>
                  <div class="form-group">
                    <label>Nombres</label>
                    <input type="text" class="form-control" id="ejemplo_password_1" 
                           placeholder="Nombre/s"
                           name="nombre" required>
                  </div>
                  <div class="form-group">
                    <label>Apellido paterno</label>
                    <input type="text" class="form-control" id="ejemplo_password_1" 
                           placeholder="Apellido paterno"
                           name="apaterno" required>
                  </div>
                  <div class="form-group">
                    <label>Apellido materno</label>
                    <input type="text" class="form-control" id="ejemplo_password_1" 
                           placeholder="Apellido materno"
                           name="amaterno" required>
                  </div>
                  <div class="form-group">
                    <label>Fecha de nacimiento</label>
                    <input type="text" class="form-control" id="ejemplo_password_1" 
                           placeholder="aaaa/mm/dd"
                           name="nacimiento" required>
                  </div>
                  <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" class="form-control" id="ejemplo_password_1" 
                           placeholder="Domicilio"
                           name="domicilio" required>
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
