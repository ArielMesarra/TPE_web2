"use strict"; 
let selector = document.querySelector("#selector_artista");
selector.addEventListener("change",seleccionar);

function seleccionar(){
    console.log(selector.value);
    
}
