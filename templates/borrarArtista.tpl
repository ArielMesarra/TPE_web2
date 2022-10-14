<h2>Borrar artista</h2>
<form method="POST">
    <select name="artistaSelec" id="">
        {foreach from = $artistas item = $artista}
        <option value="{$artista->nombre}">{$artista->nombre}</option>
        {/foreach}
    </select>
    <input class="form-control" type="submit">
</form>

