<?php
/* Smarty version 3.1.28, created on 2016-05-29 16:44:53
  from "/var/www/html/bakery/templates/cliente/indexC.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574b62d51fdab3_70512561',
  'file_dependency' => 
  array (
    'aec47b9846f8f816626f2f507288f4c1a009b539' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/indexC.html',
      1 => 1464558289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cliente/header.html' => 1,
    'file:cliente/footer.html' => 1,
  ),
),false)) {
function content_574b62d51fdab3_70512561 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '185302534574b62d51f1ea8_05327574';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!--<img src="../Admin/setFotoC.php" align="right" width="200">!-->
<div class="container">
      <div class="row">
          <div class="col-xs-12">
            <div class="form-wrap">
				<label>Bienvenidos a Beto´s Bakery</label>
				<h1>Articulos por categoria</h1>
				</hr>
				<br/>

				<div class="col-md-3">
					<a href="../cliente/pastelC.php"><img src="../image/pasteles1.jpg"  width="200" height="200" class="img-circle img-responsive"></a>
					<label>Pasteles</label>
				</div>

				<div class="col-md-3">
					<a href="../cliente/postreC.php"><img src="../image/postres.jpg"  width="200" height="200" class="img-circle img-responsive"></a>
					<label>Postres</label>
				</div>

				<div class="col-md-3">
					<a href="../cliente/panC.php"><img src="../image/panes.jpg"  width="200" height="200" class="img-circle img-responsive"></a>
					<label>Pan</label>
				</div>

				<div class="col-md-3">
					<a href="../cliente/galletasC.php"><img src="../image/galletas.jpg"  width="200" height="200" class="img-circle img-responsive"></a>
					<label>Galletas</label>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
		            <div class="form-wrap">
						<div class="col-12">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
		</div>
	</div>

</div>



	



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
