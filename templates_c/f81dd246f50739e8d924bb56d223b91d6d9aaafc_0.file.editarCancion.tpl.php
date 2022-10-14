<?php
/* Smarty version 4.2.1, created on 2022-10-14 23:25:34
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\editarCancion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349d3ce1c32f9_95741647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f81dd246f50739e8d924bb56d223b91d6d9aaafc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\editarCancion.tpl',
      1 => 1665782730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349d3ce1c32f9_95741647 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Editar canciones</h2>

<form method="POST">
    <select name="cancionId" value="">Cancion
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['canciones']->value, 'cancion');
$_smarty_tpl->tpl_vars['cancion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cancion']->value) {
$_smarty_tpl->tpl_vars['cancion']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['cancion']->value->id_canciones;?>
"><?php echo $_smarty_tpl->tpl_vars['cancion']->value->nombre;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <label for="">Nombre</label>
    <input type="text" name="nombreCancionEditar">
    <label for="">Descripcion</label>
    <textarea name="descripcionCancionEditar" cols="30" rows="5"></textarea>
    <label for="">Fecha de estreno</label>
    <input type="date" name="fechaCancionEditar">
    <select name="artistaIdEditarC" value="">Artista
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
    <button type="submit">Editar</button>
</form><?php }
}
