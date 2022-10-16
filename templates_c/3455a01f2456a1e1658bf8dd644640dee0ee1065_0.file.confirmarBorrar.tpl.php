<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:12:11
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\confirmarBorrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c73abc43136_26792044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3455a01f2456a1e1658bf8dd644640dee0ee1065' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\confirmarBorrar.tpl',
      1 => 1665954726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c73abc43136_26792044 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
    <h1>¿Estas seguro que queres borrar ese artista?</h1>
    <h2>¡Vas a borrar todas las canciones de este artista!</h2>
    <input for="" name="artista" value="<?php echo $_smarty_tpl->tpl_vars['artistas']->value['borrar'];?>
"></input>
    <button type="submit" value="true" name="confirm">Si</button>
    <button type="submit" value="false" name="confirm">No</button>
</form><?php }
}
