<?php
/* Smarty version 4.2.1, created on 2022-10-17 15:08:49
  from '/opt/lampp/htdocs/TPE_web2/templates/confirmarBorrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d53e1586d28_19917019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7707ff1cc9aef0a4f415473a90dd4cc958d7cb4' => 
    array (
      0 => '/opt/lampp/htdocs/TPE_web2/templates/confirmarBorrar.tpl',
      1 => 1666012124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d53e1586d28_19917019 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" action="accionConfirmarBorrarArtista/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <h1>¿Estas seguro que queres borrar ese artista?</h1>
    <h2>¡Vas a borrar todas estas canciones de este artista!</h2>

    <h2>Borrar artista</h2>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['canciones']->value, 'cancion');
$_smarty_tpl->tpl_vars['cancion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cancion']->value) {
$_smarty_tpl->tpl_vars['cancion']->do_else = false;
?>
        <h3><?php echo $_smarty_tpl->tpl_vars['cancion']->value->nombre;?>
</h3>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    <button type="submit" value="true" name="confirm">Si</button>
    <button type="submit" value="false" name="confirm">No</button>
</form><?php }
}
