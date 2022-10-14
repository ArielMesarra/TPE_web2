<?php
/* Smarty version 4.2.1, created on 2022-10-14 21:13:20
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\selectArtista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349b4d0b7deb6_24724252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '556077d7c1d8f02f6e17491cf9bad06ced9dde1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\selectArtista.tpl',
      1 => 1665774743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349b4d0b7deb6_24724252 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
    <select name="artista" id="">Artista
    <option value="*">Todos</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artistas']->value, 'artista');
$_smarty_tpl->tpl_vars['artista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['artista']->value) {
$_smarty_tpl->tpl_vars['artista']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['artista']->value->nombre;?>
"><?php echo $_smarty_tpl->tpl_vars['artista']->value->nombre;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<input type="submit">
</form><?php }
}
