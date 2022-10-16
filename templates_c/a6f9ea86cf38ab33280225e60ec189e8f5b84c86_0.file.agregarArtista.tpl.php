<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:20:28
  from '/opt/lampp/htdocs/TPE_web2/templates/agregarArtista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c759cdcec95_97003516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6f9ea86cf38ab33280225e60ec189e8f5b84c86' => 
    array (
      0 => '/opt/lampp/htdocs/TPE_web2/templates/agregarArtista.tpl',
      1 => 1665955075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c759cdcec95_97003516 (Smarty_Internal_Template $_smarty_tpl) {
?><h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 artista</h2>
<form method="POST">
    <label for="">Nombre</label>
    <input class="form-control" type="text" name="nombreArtistaAgregar">
    <label for="">Lugar</label>
    <input class="form-control" type="text" name="lugarArtistaAgregar">
    <label for="">Numero de integrantes</label>
    <input class="form-control" type="number" name="integrantesArtistaAgregar">
    <button type="submit"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</button>
</form><?php }
}
