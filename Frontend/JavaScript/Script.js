function MasInfo(Info){//mostrar el Modal
    var Ver = "";//variable que alamacenara el mensaje a mostrar en el Modal, validado mediante un if
    if(Info=='M1'){
        Ver = "Todo nuestro personal esta en constante capacitación para poder brindarte siempre la mejor atención, además de contar con la información más actualizada en el area de la salud.";
    }
    else if(Info=='M2'){
        Ver = "Contamos con la tecnologia más avanza para poder brindarte un mejor diagnostico, para que puedas conocer a detalle cada uno de los diferentes diagnosticos que se te realizan";
    }
    else if(Info=='M3'){
        Ver = "Poder realizar y analizar muestras es algo importante, por ello el area de laboratorio cuenta con equipo actualizado, a fin de que no debas acudir a otro lugar a realizarlas, ademas de que tendras los resultados del analisis de una forma rapida";
    }
    document.getElementById('MessageVer').innerHTML=Ver;
    document.getElementById('Modal').style.display = 'block'; 
}
function MasInfoCerrar(){
    document.getElementById('Modal').style.display = 'none';//Cerrar el modal
}
/*Cerrar El Modal al hacer click afuera*/
var modal;
window.onload = function(){
    modal = document.getElementById("Modal");//Obtener el objeto al cargar la ventana
}
window.onclick = function(event) {
  if (event.target == modal) {//Validar que el evento se da al hacer click fuera, invalidando el click en el cuadro mensaje
    modal.style.display = "none";
  }
}