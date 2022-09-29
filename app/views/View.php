<?php
class View{
    
    function showItems($canciones){
        echo '<ul>';
        foreach($canciones as $cancion){
           
            echo '<li>Nombre: '.$cancion->nombre.'</li>';
            echo '<li>Descripcion: '.$cancion->descripcion.'</li>';
            echo '<li>Fecha'.$cancion->fecha_estreno.'</li>';
            echo '<li>Artista: '.$cancion->nombreDeArtista.'</li>';
            echo '-----------------------------------';
        }
        echo '</ul>';
    }
}

?>