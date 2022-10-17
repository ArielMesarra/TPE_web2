<?php
/* Smarty version 4.2.1, created on 2022-10-17 03:41:33
  from '/opt/lampp/htdocs/TPE_web2/templates/mostrarOpciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cb2cd800470_41178397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e48f2076a3d44e817b63c840c7bc7afc9c94ee9' => 
    array (
      0 => '/opt/lampp/htdocs/TPE_web2/templates/mostrarOpciones.tpl',
      1 => 1665955075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634cb2cd800470_41178397 (Smarty_Internal_Template $_smarty_tpl) {
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
