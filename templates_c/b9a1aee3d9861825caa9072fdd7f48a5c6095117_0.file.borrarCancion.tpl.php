<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:20:28
  from '/opt/lampp/htdocs/TPE_web2/templates/borrarCancion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c759cdc5eb9_91565430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9a1aee3d9861825caa9072fdd7f48a5c6095117' => 
    array (
      0 => '/opt/lampp/htdocs/TPE_web2/templates/borrarCancion.tpl',
      1 => 1665955075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c759cdc5eb9_91565430 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Borrar cancion</h2>
<form method="POST">
    <select name="cancionSelec" id="">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['canciones']->value, 'cancion');
$_smarty_tpl->tpl_vars['cancion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cancion']->value) {
$_smarty_tpl->tpl_vars['cancion']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['cancion']->value->nombre;?>
"><?php echo $_smarty_tpl->tpl_vars['cancion']->value->nombre;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <input class="form-control" type="submit">
</form><?php }
}
