<table class="table">
    <thead>
        <td>
            <h1>Artistas</h1>
        </td>
    </thead>
    <thead>
        <td>Nombre</td>
        <td>Lugar</td>
        <td>Cantidad de integrantes</td>
    </thead>
    {foreach from = $artistas item = $artista}
    <tr>
        <td>
            {$artista->nombre}
        </td>
        <td>
            {$artista->lugar}
        </td>
        <td>
            {$artista->integrantes_num}
        </td>
    </tr>
    {/foreach}
</table>



<form method="POST">
    <select name="artista" id="" >Artista
        <option value="*">Todos</option>
        {foreach from = $artistas item = $artista}
        <option value="{$artista->nombre}">{$artista->nombre}</option>
        {/foreach}
    </select>
    <input type="submit">
</form> 




