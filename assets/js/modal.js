const open = document.getElementById('icon');
const modal = document.getElementById('modal');
const close = document.getElementById('closeModal');

open.addEventListener('click', (event) => {
  event.preventDefault();
  modal.classList.add('showModal');
  console.log('click open');
});

close.addEventListener('click', (event) => {
  event.preventDefault();
  modal.classList.remove('showModal');
});
