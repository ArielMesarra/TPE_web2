<h2>Editar canciones</h2>

<form method="POST">
    <select name="cancionId" value="">Cancion
        {foreach from = $canciones item = $cancion}
        <option value="{$cancion->id_canciones}">{$cancion->nombre}</option>
        {/foreach}
    </select>
    <label for="">Nombre</label>
    <input type="text" name="nombreCancionEditar">
    <label for="">Descripcion</label>
    <textarea name="descripcionCancionEditar" cols="30" rows="5"></textarea>
    <label for="">Fecha de estreno</label>
    <input type="date" name="fechaCancionEditar">
    <select name="artistaIdEditarC" value="">Artista
        {foreach from = $artistas item = $artista}
        <option value="{$artista->id_artistas}">{$artista->nombre}</option>
        {/foreach}
    </select>
    <button type="submit">Editar</button>
</form>