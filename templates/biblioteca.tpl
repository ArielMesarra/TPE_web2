{include 'templates/header.tpl'}
<ul>
    {foreach from = $canciones item = $cancion}
           
        <li>Nombre: {$cancion->nombre}</li>
        <li>Descripcion: {$cancion->descripcion}</li>
        <li>Fecha {$cancion->fecha_estreno}</li>
        <li>Artista: {$cancion->nombreDeArtista}</li>
    
    {/foreach}
</ul>
{include 'templates/footer.tpl'}
