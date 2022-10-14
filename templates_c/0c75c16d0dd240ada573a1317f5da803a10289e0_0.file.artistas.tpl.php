<?php
/* Smarty version 4.2.1, created on 2022-10-14 21:25:05
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\artistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349b791bfd486_28062325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c75c16d0dd240ada573a1317f5da803a10289e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\artistas.tpl',
      1 => 1665775207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349b791bfd486_28062325 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
    <thead>
        <td>
            <h1>Artistas</h1>
        </td>
    </thead>
    <thead>
        <td>Nombre</td>
        <td>Lugar</td>
        <td>Cantidad de integrantes</td>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artistas']->value, 'artista');
$_smarty_tpl->tpl_vars['artista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['artista']->value) {
$_smarty_tpl->tpl_vars['artista']->do_else = false;
?>
    <tr>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['artista']->value->nombre;?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['artista']->value->lugar;?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['artista']->value->integrantes_num;?>

        </td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>



<form method="POST">
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
</form> 




<?php }
}
