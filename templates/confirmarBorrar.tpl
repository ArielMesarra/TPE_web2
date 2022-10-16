<form method="POST">
    <h1>¿Estas seguro que queres borrar ese artista?</h1>
    <h2>¡Vas a borrar todas las canciones de este artista!</h2>
    <label for="" name="artista" value="{$artistas['borrar']}"></label>
    <button type="submit" value="true" name="confirm">Si</button>
    <button type="submit" value="false" name="confirm">No</button>
</form>