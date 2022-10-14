<h2>Editar artistas</h2>

<form method="POST">
    <select name="artistaId" value="">Artista
        {foreach from = $artistas item = $artista}
        <option value="{$artista->id_artistas}">{$artista->nombre}</option>
        {/foreach}
    </select>
    <label for="">Nombre</label>
    <input class="form-control" type="text" name="nombreArtistaEditar">
    <label for="">Lugar</label>
    <input class="form-control" type="text" name="lugarArtistaEditar">
    <label for="">Numero de integrantes</label>
    <input class="form-control" type="number" name="integrantesArtistaEditar">
    <button type="submit">Editar</button>
</form>

