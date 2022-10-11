
<ul>
    {foreach from = $canciones item = $cancion}
        
        Nombre: {$cancion->nombre}
        Descripcion: {$cancion->descripcion}
        Fecha {$cancion->fecha_estreno}
        Artista: {$cancion->nombreDeArtista}
    
    {/foreach}
</ul>

