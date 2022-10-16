<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:51:32
  from '/opt/lampp/htdocs/TPE_web2/templates/canciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c7ce4147f79_72878896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '702f57fbe681ba1cef3fb8bdbc3f2a898f46aed7' => 
    array (
      0 => '/opt/lampp/htdocs/TPE_web2/templates/canciones.tpl',
      1 => 1665957028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c7ce4147f79_72878896 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">

    <thead>
        <tr>
        <td>
            <h2>Canciones</h2>
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
            <td>
                <a href="cancion/<?php echo $_smarty_tpl->tpl_vars['cancion']->value->id_canciones;?>
">Ver mas</a>
            </td>
            <?php if ($_smarty_tpl->tpl_vars['sesion']->value == true) {?>
                <form action="accionEditarCancion" method="POST">
                    <td>
                        <button type="submit" name="editar" value="<?php echo $_smarty_tpl->tpl_vars['cancion']->value->id_canciones;?>
">Editar</button>
                    </td>
                </form>
                <form action="accionBorrarCancion" method="POST">
                    <td>
                        <button type="submit" name="borrar" value="<?php echo $_smarty_tpl->tpl_vars['canciones']->value->id_canciones;?>
">Borrar</button>
                    </td>
                </form>
                <?php }?>
        </tr>
    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table><?php }
}
