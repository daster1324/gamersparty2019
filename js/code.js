var color_count = 1;
var anterior = "";
var siguiente= "azul";
function explode(){

  switch (color_count) {
    case 0: //actual -> amarillo
      anterior = siguiente;
      siguiente = "azul";
      color_count++;
    break;
  
    case 1: //actual -> azul
      anterior = siguiente;
      siguiente = "rojo";
      color_count++;
    break;
  
    case 2: //actual -> rojo
      anterior = siguiente;
      siguiente = "blanco";
      color_count++;
    break;
  
    case 3: //actual -> blanco
      anterior = siguiente;
      siguiente = "verde";
      color_count++;
    break;
  
    case 4: //actual -> verde
      anterior = siguiente;
      siguiente = "amarillo";
      color_count = 0;
    break;
  
    default:
      break;
  }
  $("#donar").toggleClass(siguiente);
  $("#donar").toggleClass(anterior);
}
setInterval(explode, 200);