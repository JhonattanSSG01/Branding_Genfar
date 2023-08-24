// Costante para el boton de abrir el modal
const open = document.getElementById('icon');
// Costante para referirnos al modal
const modal = document.getElementById('modal');
// Costante para el boton de cerrar el modal
const close = document.getElementById('closeModal');

// Evento para abrir el modal cuando se le de clic al item y este crea en el elemento una nueva clase la cual muestra el modal realizado en HTML y CSS
open.addEventListener('click', (event) => {
  event.preventDefault();
  modal.classList.add('showModal');
});

// Evento para cerrar el modal cuando se le de clic al item y este elimina del elemento modal la clase
close.addEventListener('click', (event) => {
  event.preventDefault();
  modal.classList.remove('showModal');
});
