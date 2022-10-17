<h2>Editar artistas</h2>
{* {$artista->nombre} *}
<form action="accionProcederEditarArtista/{$artista->id_artistas}" method="POST">
    <label for="">Nombre</label>
    <input class="form-control" type="text" name="nombre" value="{$artista->nombre}">
    <label for="">Lugar</label>
    <input class="form-control" type="text" name="lugar" value="{$artista->lugar}">
    <label for="">Numero de integrantes</label>
    <input class="form-control" type="number" name="integrantes" value="{$artista->integrantes_num}">
    <button type="submit">Editar</button>
</form>

