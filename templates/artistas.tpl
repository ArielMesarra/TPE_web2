<table class="table">
    <thead>
        <td>
            <h2>Artistas</h2>
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
        {if $sesion eq true}
        <form action="accionEditarArtista" method="POST">
            <td>
                <button type="submit" name="editar" value="{$artista->id_artistas}">Editar</button>
            </td>
        </form>
        <form action="accionBorrarArtista" method="POST">
            <td>
                <button type="submit" name="borrar" value="{$artista->id_artistas}">Borrar</button>
            </td>
        </form>
        {/if}
    </tr>
    {/foreach}
</table>





