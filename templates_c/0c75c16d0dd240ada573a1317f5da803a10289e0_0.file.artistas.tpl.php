<?php
/* Smarty version 4.2.1, created on 2022-10-16 22:30:17
  from 'C:\xampp\htdocs\proyectos\TPE_web2\templates\artistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c69d977b7e0_38211697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c75c16d0dd240ada573a1317f5da803a10289e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_web2\\templates\\artistas.tpl',
      1 => 1665952207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c69d977b7e0_38211697 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
    <thead>
        <td>
            <h2>Artistas</h2>
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
        <?php if ($_smarty_tpl->tpl_vars['sesion']->value == true) {?>
        <form action="accionEditar" method="POST">
            <td>
                <button type="submit" name="editar" value="<?php echo $_smarty_tpl->tpl_vars['artista']->value->id_artistas;?>
">Editar</button>
            </td>
        </form>
        <form action="accionBorrar" method="POST">
            <td>
                <button type="submit" name="borrar" value="<?php echo $_smarty_tpl->tpl_vars['artista']->value->id_artistas;?>
">Borrar</button>
            </td>
        </form>
        <?php }?>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>





<?php }
}
