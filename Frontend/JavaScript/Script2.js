/*Script para ventana inicio de sesion*/
function OpSesionAbrir(){
    document.getElementById('Credenciales').style.transform='translate(-483px,0)';
    document.getElementById('Credenciales').style.transition='all 1s';
    document.getElementById('OpcionesSesion').style.transform='translate(-483px,0)';
    document.getElementById('OpcionesSesion').style.transition='all 1s';
    document.getElementById('OpcionesSesion').style.transitionDelay= '0.25s';
    /**/
    document.getElementById('Sesion2').style.transform='translate(-481px,0)';
    document.getElementById('Sesion2').style.transition='all 0.5s';
    document.getElementById('Sesion2').style.transitionDelay='1s'; 
}
function OpSesionCerrar(){
    document.getElementById('Sesion2').style.transform='translate(481px,0)';
    document.getElementById('Sesion2').style.transition='all 1s';
    /**/
    document.getElementById('Credenciales').style.transform='translate(0px,0)';
    document.getElementById('Credenciales').style.transition='all 1s';
    document.getElementById('Credenciales').style.transitionDelay='0.75s';
    document.getElementById('OpcionesSesion').style.transform='translate(0px,0)';
    document.getElementById('OpcionesSesion').style.transition='all 1s';
    document.getElementById('OpcionesSesion').style.transitionDelay= '1.25s';
}
function AyudaModal(){
    document.getElementById('Ayuda').style.display='block';
}
function AyudaModalCerrar(){
    document.getElementById('Ayuda').style.display='none';
}
/**/
var modal;
window.onload = function(){
    modal = document.getElementById("Ayuda");//Obtener el objeto al cargar la ventana
}
window.onclick = function(event) {
    if (event.target == modal) {//Validar que el evento se da al hacer click fuera, invalidando el click en el cuadro mensaje
      modal.style.display = "none";
    }
}
if(window.history.replaceState){/*Para evitar el mensaje reenviar datos del formulario cuando actualiza la pagina*/
    window.history.replaceState(null,null,window.location.href);
}