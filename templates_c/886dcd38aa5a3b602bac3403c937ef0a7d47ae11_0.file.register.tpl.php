<?php
/* Smarty version 4.2.1, created on 2022-10-11 01:44:47
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344ae6f0c9553_58126045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '886dcd38aa5a3b602bac3403c937ef0a7d47ae11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\register.tpl',
      1 => 1665445464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6344ae6f0c9553_58126045 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
    <label for="">Nombre de usuario</label>
    <input type="text" name="nombre_usuario">
    <label for="">Email</label>
    <input type="email" name="email">
    <label for="">Contraseña</label>
    <input type="password" name="contraseña">
    <input type="submit">
</form><?php }
}
