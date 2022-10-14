<?php
/* Smarty version 4.2.1, created on 2022-10-15 00:56:38
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349e926095100_68690693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '886dcd38aa5a3b602bac3403c937ef0a7d47ae11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\register.tpl',
      1 => 1665788146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349e926095100_68690693 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
    <label for="">Nombre de usuario</label>
    <input class="form-control" type="text" name="nombre_usuario">
    <label for="">Email</label>
    <input class="form-control" type="email" name="email">
    <label for="">Contraseña</label>
    <input class="form-control" type="password" name="contraseña">
    <input class="form-control" type="submit">
</form><?php }
}
