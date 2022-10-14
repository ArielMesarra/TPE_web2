<?php
/* Smarty version 4.2.1, created on 2022-10-14 21:49:56
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\editarArtista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349bd64b836c3_14565603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '422544fc7492a90641d5746aa2c587edd344e410' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\editarArtista.tpl',
      1 => 1665776989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349bd64b836c3_14565603 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Editar artistas</h2>

<form method="POST">
    <select name="artistaEditar" value="">Artista
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artistas']->value, 'artista');
$_smarty_tpl->tpl_vars['artista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['artista']->value) {
$_smarty_tpl->tpl_vars['artista']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['artista']->value->id_artistas;?>
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
