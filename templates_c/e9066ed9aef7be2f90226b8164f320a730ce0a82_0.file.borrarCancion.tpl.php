<?php
/* Smarty version 4.2.1, created on 2022-10-15 00:56:01
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\borrarCancion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349e901c1c891_09267542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9066ed9aef7be2f90226b8164f320a730ce0a82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\borrarCancion.tpl',
      1 => 1665788149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349e901c1c891_09267542 (Smarty_Internal_Template $_smarty_tpl) {
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
