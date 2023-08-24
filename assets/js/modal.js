// Costante para el boton de abrir el modal
const openProduct = document.getElementById('iconProduct');
const openVideo = document.getElementById('iconVideo');
// Costante para referirnos al modal
const modalProduct = document.getElementById('modalProduct');
const modalVideo = document.getElementById('modalVideo');
// Costante para el boton de cerrar el modal
const closeProduct = document.getElementById('closeModalProduct');
const closeVideo = document.getElementById('closeModalVideo');

// Evento para abrir el modal cuando se le de clic al item y este crea en el elemento una nueva clase la cual muestra el modal realizado en HTML y CSS
openProduct.addEventListener('click', (event) => {
  event.preventDefault();
  modalProduct.classList.add('showModal');
});

openVideo.addEventListener('click', (event) => {
  event.preventDefault();
  modalVideo.classList.add('showModal');
});

// Evento para cerrar el modal cuando se le de clic al item y este elimina del elemento modal la clase
closeProduct.addEventListener('click', (event) => {
  event.preventDefault();
  modalProduct.classList.remove('showModal');
});
closeVideo.addEventListener('click', (event) => {
  event.preventDefault();
  modalVideo.classList.remove('showModal');
});