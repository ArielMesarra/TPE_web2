<?php
/* Smarty version 4.2.1, created on 2022-10-13 21:58:18
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\biblioteca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63486dda9fe514_01939234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bb3de9fda22971c48e1de5c3333cac00af8d099' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\biblioteca.tpl',
      1 => 1665691091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63486dda9fe514_01939234 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
    <thead>
        <td>
            <h1>Artistas</h1>
        </td>
    </thead>
    <thead>
        <td>Nombre</td>
        <td>Lugar</td>
        <td>Cantidad de integrantes</td>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artistas']->value, 'artista');
$_smarty_tpl->tpl_vars['artista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['artista']->value) {
$_smarty_tpl->tpl_vars['artista']->do_else = false;
?>
    <tr>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['artista']->value->nombre;?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['artista']->value->lugar;?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['artista']->value->integrantes_num;?>

        </td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<table>

    <thead>
        <tr>
        <td>
            <h1>Canciones</h1>
        </td>
        <td>
            <form method="POST">
                <select name="artista" id="">Artista
                <option value="*">Todos</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artistas']->value, 'artista');
$_smarty_tpl->tpl_vars['artista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['artista']->value) {
$_smarty_tpl->tpl_vars['artista']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['artista']->value->nombre;?>
"><?php echo $_smarty_tpl->tpl_vars['artista']->value->nombre;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <input type="submit">
            </form>
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

</table>
<?php echo '<script'; ?>
 src="js/tabla.js"><?php echo '</script'; ?>
>

<?php }
}
