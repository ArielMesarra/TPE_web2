<?php
/* Smarty version 4.2.1, created on 2022-10-14 20:30:29
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\agregarCancion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349aac51e8593_09508807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c1de1c109ea0b3ff6752c5b0126807d2475c995' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\agregarCancion.tpl',
      1 => 1665772223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349aac51e8593_09508807 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Agregar cancion</h2>
<form method="POST">
    <label for="">Nombre</label>
    <input type="text" name="nombreAgregarCancion">
    <label for="">Descripcion</label>
    <textarea name="descripcionAgregarCancion" id="" cols="30" rows="5"></textarea>
    <label for="">Fecha de estreno</label>
    <input type="date" name="fechaAgregarCancion">
    <select name="artistaAgregarCancion" id="">
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
    <button type="submit">Agregar</button>
</form><?php }
}
