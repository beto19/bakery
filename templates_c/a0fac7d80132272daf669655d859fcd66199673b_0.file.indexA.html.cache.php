<?php
/* Smarty version 3.1.28, created on 2016-06-04 14:14:29
  from "/var/www/html/bakery/templates/Admin/indexA.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_575328954c4015_09788447',
  'file_dependency' => 
  array (
    'a0fac7d80132272daf669655d859fcd66199673b' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/indexA.html',
      1 => 1465067667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/header.html' => 1,
    'file:Admin/footer.html' => 1,
  ),
),false)) {
function content_575328954c4015_09788447 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1187544141575328954bbda7_19687204';
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="form">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
				<label>Bienvenido Administrador</label>
				<img src="../Admin/setFotoC.php" align="right" width="200">

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
