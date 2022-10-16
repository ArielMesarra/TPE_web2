<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:29:52
  from '/opt/lampp/htdocs/TPE_web2/templates/confirmarBorrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c77d0c7e5f2_23522673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7707ff1cc9aef0a4f415473a90dd4cc958d7cb4' => 
    array (
      0 => '/opt/lampp/htdocs/TPE_web2/templates/confirmarBorrar.tpl',
      1 => 1665955787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c77d0c7e5f2_23522673 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
    <h1>¿Estas seguro que queres borrar ese artista?</h1>
    <h2>¡Vas a borrar todas las canciones de este artista!</h2>
    <input for="" name="artista" value="<?php echo $_smarty_tpl->tpl_vars['artistas']->value;?>
"></input>
    <button type="submit" value="true" name="confirm">Si</button>
    <button type="submit" value="false" name="confirm">No</button>
</form><?php }
}
