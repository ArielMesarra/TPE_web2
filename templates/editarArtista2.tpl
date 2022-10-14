<h2>{$titulo} artista</h2>
<form method="POST">
    <label for="">Nombre</label>
    <input type="text" name="nombreArtistaEditar" value="{$artista[0]->nombre}">
    <label for="">Lugar</label>
    <input type="text" name="lugarArtistaEditar" value="{$artista[0]->lugar}">
    <label for="">Numero de integrantes</label>
    <input type="number" name="integrantesArtistaEditar" value="{$artista[0]->integrantes_num}">
    <button type="submit">{$titulo}</button>
</form>