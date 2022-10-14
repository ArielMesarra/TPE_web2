<h2>Editar artistas</h2>

<form method="POST">
    <select name="artistaEditar" value="">Artista
        {foreach from = $artistas item = $artista}
        <option value="{$artista->id_artistas}">{$artista->nombre}</option>
        {/foreach}
    </select>
    <input type="submit">
</form>

