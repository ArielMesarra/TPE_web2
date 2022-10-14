<h2>Borrar cancion</h2>
<form method="POST">
    <select name="cancionSelec" id="">
        {foreach from = $canciones item = $cancion}
        <option value="{$cancion->nombre}">{$cancion->nombre}</option>
        {/foreach}
    </select>
    <input class="form-control" type="submit">
</form>