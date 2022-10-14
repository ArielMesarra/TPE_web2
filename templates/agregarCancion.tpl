<h2>Agregar cancion</h2>
<form method="POST">
    <label for="">Nombre</label>
    <input type="text" name="nombreAgregarCancion">
    <label for="">Descripcion</label>
    <textarea name="descripcionAgregarCancion" id="" cols="30" rows="5"></textarea>
    <label for="">Fecha de estreno</label>
    <input type="date" name="fechaAgregarCancion">
    <select name="artistaAgregarCancion" id="">
        {foreach from = $artistas item = $artista}
            <option value="{$artista->id_artistas}">{$artista->nombre}</option>
        {/foreach}
    </select>
    <button type="submit">Agregar</button>
</form>