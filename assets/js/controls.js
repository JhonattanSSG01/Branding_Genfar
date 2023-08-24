// Funcion flcha la cual se captura el boton y se le agrega un evento
const autoPlay = () => {
  let button = document.getElementById('button');
  button.addEventListener('click', click, false);
}

// Funcion flecha que valida si el boton es clickeado o no lo cual cambia el valor de HTML para su visualizacion
const click = () => {
  let video = document.getElementById('video');
  if (!video.paused && !video.ended) {
    video.pause();
    button.innerHTML = '\u25BA';
    button.style.opacity = '.5';
  }
  else {
    video.play();
    button.innerHTML = '||';
    button.style.opacity = '.5';
  }
}
// Inicializa la funcion de reproducir video
window.addEventListener('load', autoPlay, false); 