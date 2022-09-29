<?php
class View{
    
    function showItems($canciones){
        echo '<ul>';
        foreach($canciones as $cancion){
            echo '<li>'.$cancion->nombre.'</li>';
            echo '<li>'.$cancion->descripcion.'</li>';
            echo '<li>'.$cancion->fecha_estreno.'</li>';
            echo '<li>'.$cancion->fk_id_artistas.'</li>';
        }
        echo '</ul>';
    }
}

?>