<?php
/* Smarty version 4.2.1, created on 2022-10-14 18:03:33
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\mostrarOpciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349885565a4b6_29680195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55073d7f911b30c8254c1d58f9f2a8014fa82456' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\mostrarOpciones.tpl',
      1 => 1665763410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349885565a4b6_29680195 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Elegir accion</h2>
<form method="POST">
    <select name="opcionElegida" id="" value="">
        <option value="borrarC">Borrar cancion</option>
        <option value="borrarA">Borrar artista</option>
        <option value="editarC">Editar cancion</option>
        <option value="editarA">Editar artista</option>
        <option value="agregarC">Agregar cancion</option>
        <option value="agregarA">Agregar artista</option>
    </select>
    <button type="submit">Elegir</button>
</form><?php }
}
