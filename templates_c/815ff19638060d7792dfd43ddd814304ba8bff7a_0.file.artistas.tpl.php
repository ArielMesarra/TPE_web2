<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:53:35
  from '/opt/lampp/htdocs/TPE_web2/templates/artistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c7d5f54c714_80437589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '815ff19638060d7792dfd43ddd814304ba8bff7a' => 
    array (
      0 => '/opt/lampp/htdocs/TPE_web2/templates/artistas.tpl',
      1 => 1665957202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c7d5f54c714_80437589 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form action="accionEditarArtista" method="POST">
            <td>
                <button type="submit" name="editar" value="<?php echo $_smarty_tpl->tpl_vars['artista']->value->id_artistas;?>
">Editar</button>
            </td>
        </form>
        <form action="accionBorrarArtista" method="POST">
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
