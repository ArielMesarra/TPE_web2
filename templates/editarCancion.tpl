<h2>{$modo} cancion</h2>

 <form action="accion/ProcederCancion/{$modo}/{$cancion->id_canciones}" method="POST">
    {* <input type="" name="id" value="{$cancion->id_canciones}"> *}
    
    
    <label for="">Nombre</label>
    <input class="form-control" type="text" name="nombre" value="{$cancion->nombre}">
 
    <label for="">Descripcion</label>
    <input class="form-control" type="text" name="descripcion" value="{$cancion->descripcion}">
 
    <label for="">Fecha de Estreno</label>
    <input class="form-control" type="date" name="fecha" value="{$cancion->fecha_estreno}">

    <select name="artista" id="" value="1">
    {foreach from = $artistas item = $artista}
        <option value="{$artista->id_artistas}">{$artista->nombre}
            
        </option>
    {/foreach}
    </select>
    
    <button type="submit">{$modo}</button>
</form>
 
