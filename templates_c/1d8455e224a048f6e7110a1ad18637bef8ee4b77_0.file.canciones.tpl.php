<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:12:05
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\canciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348711577d2f8_44677242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d8455e224a048f6e7110a1ad18637bef8ee4b77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\canciones.tpl',
      1 => 1665691874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348711577d2f8_44677242 (Smarty_Internal_Template $_smarty_tpl) {
?><table>

    <thead>
        <tr>
        <td>
            <h1>Canciones</h1>
        </td>
        <td>
        </td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>Fecha</td>
            <td>Artista</td>
        </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['canciones']->value, 'cancion');
$_smarty_tpl->tpl_vars['cancion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cancion']->value) {
$_smarty_tpl->tpl_vars['cancion']->do_else = false;
?>
        <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['cancion']->value->nombre;?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['cancion']->value->fecha_estreno;?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['cancion']->value->nombreDeArtista;?>

            </td>
        </tr>
    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table><?php }
}
