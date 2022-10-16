<h2>Editar canciones</h2>

<form method="POST">
    <label for="">Nombre</label>
    <input class="form-control" type="text" name="nombreCancionEditar">
    <label for="">Descripcion</label>
    <textarea class="form-control" name="descripcionCancionEditar" cols="30" rows="5"></textarea>
    <label for="">Fecha de estreno</label>
    <input class="form-control" type="date" name="fechaCancionEditar">
    {* <select name="artistaIdEditarC" value="">Artista
        {foreach from = $artistas item = $artista}
        <option value="{$artista->id_artistas}">{$artista->nombre}</option>
        {/foreach}
    </select> *}
    <button type="submit">Editar</button>
</form>