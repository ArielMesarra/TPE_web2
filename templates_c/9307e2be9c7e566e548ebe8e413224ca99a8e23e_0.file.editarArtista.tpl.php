<?php
/* Smarty version 4.2.1, created on 2022-10-17 18:41:18
  from '/opt/lampp/htdocs/TPE_web2/templates/editarArtista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d85ae3d6169_77083358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9307e2be9c7e566e548ebe8e413224ca99a8e23e' => 
    array (
      0 => '/opt/lampp/htdocs/TPE_web2/templates/editarArtista.tpl',
      1 => 1666024804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d85ae3d6169_77083358 (Smarty_Internal_Template $_smarty_tpl) {
?><h2><?php echo $_smarty_tpl->tpl_vars['modo']->value;?>
 artistas</h2>

<form action="accion/ProcederEditarArtista/<?php echo $_smarty_tpl->tpl_vars['modo']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['artista']->value->id_artistas;?>
" method="POST">
    <label for="">Nombre</label>
    <input class="form-control" type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['artista']->value->nombre;?>
">
    <label for="">Lugar</label>
    <input class="form-control" type="text" name="lugar" value="<?php echo $_smarty_tpl->tpl_vars['artista']->value->lugar;?>
">
    <label for="">Numero de integrantes</label>
    <input class="form-control" type="number" name="integrantes" value="<?php echo $_smarty_tpl->tpl_vars['artista']->value->integrantes_num;?>
">
    <button type="submit"><?php echo $_smarty_tpl->tpl_vars['modo']->value;?>
</button>
</form>

<?php }
}
