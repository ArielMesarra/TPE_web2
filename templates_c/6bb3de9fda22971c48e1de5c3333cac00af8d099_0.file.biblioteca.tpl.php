<?php
/* Smarty version 4.2.1, created on 2022-10-05 21:26:26
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\biblioteca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633dda62cd3c95_01623492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bb3de9fda22971c48e1de5c3333cac00af8d099' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\biblioteca.tpl',
      1 => 1664997898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_633dda62cd3c95_01623492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['canciones']->value, 'cancion');
$_smarty_tpl->tpl_vars['cancion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cancion']->value) {
$_smarty_tpl->tpl_vars['cancion']->do_else = false;
?>
           
        <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['cancion']->value->nombre;?>
</li>
        <li>Descripcion: <?php echo $_smarty_tpl->tpl_vars['cancion']->value->descripcion;?>
</li>
        <li>Fecha <?php echo $_smarty_tpl->tpl_vars['cancion']->value->fecha_estreno;?>
</li>
        <li>Artista: <?php echo $_smarty_tpl->tpl_vars['cancion']->value->nombreDeArtista;?>
</li>
    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
