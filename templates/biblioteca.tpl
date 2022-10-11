<table>
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
<table>

    <thead>
        <tr>
        <td>
            <h1>Canciones</h1>
        </td>
        <td>
            <select name="" id="selector_artista">Artista
            {foreach from = $artistas item = $artista}
            <option value="{$artista->nombre}">{$artista->nombre}</option>
            {/foreach}
            </select>
        </td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>Fecha</td>
            <td>Artista</td>
        </tr>
    </thead>
    {foreach from = $canciones item = $cancion}
        <tr>
            <td>
                {$cancion->nombre}
            </td>
            <td>
                {$cancion->fecha_estreno}
            </td>
            <td>
                {$cancion->nombreDeArtista}
            </td>
        </tr>
    
    {/foreach}

</table>
<script src="js/tabla.js"></script>

