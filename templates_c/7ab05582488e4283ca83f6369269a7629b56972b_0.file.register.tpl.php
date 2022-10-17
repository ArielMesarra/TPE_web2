<?php
/* Smarty version 4.2.1, created on 2022-10-17 15:59:56
  from '/opt/lampp/htdocs/TPE_web2/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d5fdc180c06_09193439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ab05582488e4283ca83f6369269a7629b56972b' => 
    array (
      0 => '/opt/lampp/htdocs/TPE_web2/templates/register.tpl',
      1 => 1665955075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d5fdc180c06_09193439 (Smarty_Internal_Template $_smarty_tpl) {
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
