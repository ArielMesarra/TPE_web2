<?php
class View{
    
    function showItems($canciones){
        echo '<ul>';
        foreach($canciones as $cancion){
            // var_dump($cancion);
            echo '<li>Nombre: '.$cancion->nombre.'</li>';
            echo '<li>Descripcion: '.$cancion->descripcion.'</li>';
            echo '<li>Fecha'.$cancion->fecha_estreno.'</li>';
            echo '<li>artista nro: '.$cancion->fecha_estreno.'</li>';

            echo '<li>Artista: '.$cancion->nom.'</li>';
        }
        echo '</ul>';
    }
}

?>