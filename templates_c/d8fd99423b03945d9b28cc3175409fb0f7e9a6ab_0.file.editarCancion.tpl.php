<?php
/* Smarty version 4.2.1, created on 2022-10-17 03:02:29
  from '/opt/lampp/htdocs/TPE_web2/templates/editarCancion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ca9a5ed6fa4_21914378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8fd99423b03945d9b28cc3175409fb0f7e9a6ab' => 
    array (
      0 => '/opt/lampp/htdocs/TPE_web2/templates/editarCancion.tpl',
      1 => 1665968545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634ca9a5ed6fa4_21914378 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Editar cancion</h2>

 <form method="POST">
    <input class="nover" type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['cancion']->value->id_canciones;?>
">
    
    
    <label for="">Nombre</label>
    <input class="form-control" type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['cancion']->value->nombre;?>
">
 
    <label for="">Descripcion</label>
    <input class="form-control" type="text" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['cancion']->value->descripcion;?>
">
 
    <label for="">Fecha de Estreno</label>
    <input class="form-control" type="date" name="fecha" value="<?php echo $_smarty_tpl->tpl_vars['cancion']->value->fecha_estreno;?>
">

    <select name="artista" id="" value="1">
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
    
    <button type="submit">Editar</button>
</form>
 
<?php }
}
