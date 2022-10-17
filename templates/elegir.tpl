<h2>Elegir artista</h2>
<form method="POST">
    <select name="opcionElegida" id="" value="*">
    <option value="*">Todos</option>

    {foreach from = $artistas item = $artista}
    
    <option value="{$artista->id_artistas}">{$artista->nombre}</option>
        
{/foreach}
</select>
    <button type="submit">Elegir</button>
</form>