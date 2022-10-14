<?php
/* Smarty version 4.2.1, created on 2022-10-14 15:45:23
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\adminForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634967f3013f09_78475371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61531147af8e50bedaa00bf59d88655f60351916' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\adminForm.tpl',
      1 => 1665755116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634967f3013f09_78475371 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST">
    <select name="artistaSelec" id="">
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
</form>

<?php }
}
