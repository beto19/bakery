<?php
/* Smarty version 3.1.28, created on 2016-05-31 07:11:18
  from "/var/www/html/bakery/templates/cliente/cambiarContrasenaCliente.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574d7f66bbfed2_48464416',
  'file_dependency' => 
  array (
    'd8336b5d313b9b7963213aebd9d309eb81a6a3a9' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/cambiarContrasenaCliente.html',
      1 => 1464696673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cliente/header.html' => 1,
    'file:cliente/footer.html' => 1,
  ),
),false)) {
function content_574d7f66bbfed2_48464416 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '564717065574d7f66b1c606_88888143';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
      <div class="row">
          <div class="col-xs-12">
            <div class="form-wrap">
              <form role="form" action='../cliente/cambiarContrasenaClienteC.php' method='post'
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
            </div>
          </div>
      </div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
