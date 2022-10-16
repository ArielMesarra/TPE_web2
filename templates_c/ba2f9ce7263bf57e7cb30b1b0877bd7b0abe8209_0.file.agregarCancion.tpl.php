<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:20:28
  from '/opt/lampp/htdocs/TPE_web2/templates/agregarCancion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c759cdcb550_08588565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba2f9ce7263bf57e7cb30b1b0877bd7b0abe8209' => 
    array (
      0 => '/opt/lampp/htdocs/TPE_web2/templates/agregarCancion.tpl',
      1 => 1665955075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c759cdcb550_08588565 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Agregar cancion</h2>
<form method="POST">
    <label for="">Nombre</label>
    <input class="form-control" type="text" name="nombreAgregarCancion">
    <label for="">Descripcion</label>
    <textarea class="form-control" name="descripcionAgregarCancion" id="" cols="30" rows="5"></textarea>
    <label for="">Fecha de estreno</label>
    <input class="form-control" type="date" name="fechaAgregarCancion">
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
