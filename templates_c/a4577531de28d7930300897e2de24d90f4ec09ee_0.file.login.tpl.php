<?php
/* Smarty version 4.2.1, created on 2022-10-17 16:29:36
  from '/opt/lampp/htdocs/TPE_web2/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d66d09ebbc8_38308196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4577531de28d7930300897e2de24d90f4ec09ee' => 
    array (
      0 => '/opt/lampp/htdocs/TPE_web2/templates/login.tpl',
      1 => 1665955075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d66d09ebbc8_38308196 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
    <label for="">Nombre de usuario</label>
    <input class="form-control" type="text" name="nombre_usuario">
    <label for="">Contraseña</label>
    <input class="form-control" type="password" name="contraseña">
    <input class="form-control" type="submit">
</form><?php }
}
