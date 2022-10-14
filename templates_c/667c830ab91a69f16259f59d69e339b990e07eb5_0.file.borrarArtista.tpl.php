<?php
/* Smarty version 4.2.1, created on 2022-10-15 00:56:01
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\borrarArtista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349e901be40d2_45855844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '667c830ab91a69f16259f59d69e339b990e07eb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\borrarArtista.tpl',
      1 => 1665788150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349e901be40d2_45855844 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Borrar artista</h2>
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
    <input class="form-control" type="submit">
</form>

<?php }
}
