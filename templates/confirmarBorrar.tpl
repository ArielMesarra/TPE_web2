<form method="POST" action="accion/ConfirmarBorrarArtista/{$id}">
    <h1>¿Estas seguro que queres borrar ese artista?</h1>
    <h2>¡Vas a borrar todas estas canciones de este artista!</h2>

    <div>
        {foreach from = $canciones item = $cancion}
        <h3>{$cancion->nombre}</h3>
        {/foreach}
    </div>

    <button type="submit" value="true" name="confirm">Si</button>
    <button type="submit" value="false" name="confirm">No</button>
</form>