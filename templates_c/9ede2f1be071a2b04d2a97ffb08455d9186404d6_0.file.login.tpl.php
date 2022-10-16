<?php
/* Smarty version 4.2.1, created on 2022-10-15 16:10:16
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634abf480892b9_86084813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ede2f1be071a2b04d2a97ffb08455d9186404d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\login.tpl',
      1 => 1665788147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634abf480892b9_86084813 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
    <label for="">Nombre de usuario</label>
    <input class="form-control" type="text" name="nombre_usuario">
    <label for="">Contraseña</label>
    <input class="form-control" type="password" name="contraseña">
    <input class="form-control" type="submit">
</form><?php }
}
