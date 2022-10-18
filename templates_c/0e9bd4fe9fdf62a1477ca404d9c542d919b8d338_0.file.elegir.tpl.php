<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:22:05
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\elegir.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dffbd41f6f0_86673153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e9bd4fe9fdf62a1477ca404d9c542d919b8d338' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\elegir.tpl',
      1 => 1666056116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dffbd41f6f0_86673153 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Elegir artista</h2>
<form method="POST">
    <select name="opcionElegida" id="" value="*">
    <option value="*">Todos</option>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artistas']->value, 'artista');
$_smarty_tpl->tpl_vars['artista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['artista']->value) {
$_smarty_tpl->tpl_vars['artista']->do_else = false;
?>
    
    <option value="<?php echo $_smarty_tpl->tpl_vars['artista']->value->id_artistas;?>
"><?php echo $_smarty_tpl->tpl_vars['artista']->value->nombre;?>
</option>
        
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
    <button type="submit">Elegir</button>
</form><?php }
}
