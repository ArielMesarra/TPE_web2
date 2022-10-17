<?php
/* Smarty version 4.2.1, created on 2022-10-17 15:42:15
  from '/opt/lampp/htdocs/TPE_web2/templates/elegir.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d5bb7caf359_05859451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f753bd4fc5636fedc8b19c752697293cb072710' => 
    array (
      0 => '/opt/lampp/htdocs/TPE_web2/templates/elegir.tpl',
      1 => 1666014129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d5bb7caf359_05859451 (Smarty_Internal_Template $_smarty_tpl) {
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
