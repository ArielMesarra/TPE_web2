<table class="table">

    <thead>
        <tr>
        <td>
            <h2>Canciones</h2>
        </td>
        <td>
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
            <td>
                <a href="cancion/{$cancion->id_canciones}">Ver mas</a>
            </td>
        </tr>
    
    {/foreach}

</table>