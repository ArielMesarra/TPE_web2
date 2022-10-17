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
            {if $sesion eq true}
                <form action="accion/EditarCancion" method="POST">
                    <td>
                        <button type="submit" name="editar" value="{$cancion->id_canciones}">Editar</button>
                    </td>
                </form>
                <form action="accion/BorrarCancion" method="POST">
                    <td>
                        <button type="submit" name="borrar" value="{$cancion->id_canciones}">Borrar</button>
                    </td>
                </form>
                {/if}
        </tr>
    
    {/foreach}

</table>