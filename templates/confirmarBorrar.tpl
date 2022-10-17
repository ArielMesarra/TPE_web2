<form method="POST" action="accionConfirmarBorrarArtista/{$id}">
    <h1>¿Estas seguro que queres borrar ese artista?</h1>
    <h2>¡Vas a borrar todas estas canciones de este artista!</h2>

    <h2>Borrar artista</h2>
        {foreach from = $canciones item = $cancion}
        <h3>{$cancion->nombre}</h3>
        {/foreach}


    <button type="submit" value="true" name="confirm">Si</button>
    <button type="submit" value="false" name="confirm">No</button>
</form>