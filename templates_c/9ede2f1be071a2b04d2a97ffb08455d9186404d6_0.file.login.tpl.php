<?php
/* Smarty version 4.2.1, created on 2022-10-11 01:26:33
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344aa296d5d95_65493604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ede2f1be071a2b04d2a97ffb08455d9186404d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\login.tpl',
      1 => 1665444268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6344aa296d5d95_65493604 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
    <label for="">Nombre de usuario</label>
    <input type="text" name="nombre_usuario">
    <label for="">Contraseña</label>
    <input type="password" name="contraseña">
    <input type="submit">
</form><?php }
}
