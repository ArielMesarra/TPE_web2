<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:20:28
  from '/opt/lampp/htdocs/TPE_web2/templates/editarArtista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c759cdd4ac4_21496824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9307e2be9c7e566e548ebe8e413224ca99a8e23e' => 
    array (
      0 => '/opt/lampp/htdocs/TPE_web2/templates/editarArtista.tpl',
      1 => 1665955075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c759cdd4ac4_21496824 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Editar artistas</h2>

<form method="POST">
    <select name="artistaId" value="">Artista
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
    <label for="">Nombre</label>
    <input class="form-control" type="text" name="nombreArtistaEditar">
    <label for="">Lugar</label>
    <input class="form-control" type="text" name="lugarArtistaEditar">
    <label for="">Numero de integrantes</label>
    <input class="form-control" type="number" name="integrantesArtistaEditar">
    <button type="submit">Editar</button>
</form>

<?php }
}
