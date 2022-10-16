<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:20:28
  from '/opt/lampp/htdocs/TPE_web2/templates/editarCancion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c759cddc964_19005840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8fd99423b03945d9b28cc3175409fb0f7e9a6ab' => 
    array (
      0 => '/opt/lampp/htdocs/TPE_web2/templates/editarCancion.tpl',
      1 => 1665955075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c759cddc964_19005840 (Smarty_Internal_Template $_smarty_tpl) {
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
    <input class="form-control" type="text" name="nombreCancionEditar">
    <label for="">Descripcion</label>
    <textarea class="form-control" name="descripcionCancionEditar" cols="30" rows="5"></textarea>
    <label for="">Fecha de estreno</label>
    <input class="form-control" type="date" name="fechaCancionEditar">
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
