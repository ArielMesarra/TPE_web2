<?php
/* Smarty version 4.2.1, created on 2022-10-14 22:57:28
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\editarArtista2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349cd38300f98_51348386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0175e7ae08e6698082ee15d667d245fb9047abf7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\editarArtista2.tpl',
      1 => 1665780939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349cd38300f98_51348386 (Smarty_Internal_Template $_smarty_tpl) {
?><h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 artista</h2>
<form method="POST">
    <label for="">Nombre</label>
    <input type="text" name="nombreArtistaEditar" value="<?php echo $_smarty_tpl->tpl_vars['artista']->value[0]->nombre;?>
">
    <label for="">Lugar</label>
    <input type="text" name="lugarArtistaEditar" value="<?php echo $_smarty_tpl->tpl_vars['artista']->value[0]->lugar;?>
">
    <label for="">Numero de integrantes</label>
    <input type="number" name="integrantesArtistaEditar" value="<?php echo $_smarty_tpl->tpl_vars['artista']->value[0]->integrantes_num;?>
">
    <button type="submit"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</button>
</form><?php }
}
