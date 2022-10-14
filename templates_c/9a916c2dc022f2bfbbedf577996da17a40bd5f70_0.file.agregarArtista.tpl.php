<?php
/* Smarty version 4.2.1, created on 2022-10-14 21:01:13
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\agregarArtista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349b1f96fa6c2_37573671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a916c2dc022f2bfbbedf577996da17a40bd5f70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\agregarArtista.tpl',
      1 => 1665774066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349b1f96fa6c2_37573671 (Smarty_Internal_Template $_smarty_tpl) {
?><h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 artista</h2>
<form method="POST">
    <label for="">Nombre</label>
    <input type="text" name="nombreArtistaAgregar">
    <label for="">Lugar</label>
    <input type="text" name="lugarArtistaAgregar">
    <label for="">Numero de integrantes</label>
    <input type="number" name="integrantesArtistaAgregar">
    <button type="submit"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</button>
</form><?php }
}
