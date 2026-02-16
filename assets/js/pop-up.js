

// popups

const popupBg = document.querySelector('.popup-bg');
const popups = document.querySelectorAll('.popup');

function openModal(popup) {
  popupBg.style.display = 'block';
  popup.classList.add('activ');
  document.body.classList.add('no-scroll');
}

function closeModal(popup) {
  popupBg.style.display = 'none';
  popup.classList.remove('activ');
  document.body.classList.remove('no-scroll');
}

document.querySelectorAll('[data-popup-open]').forEach(button => {
  button.addEventListener('click', () => {
    const popupId = button.getAttribute('data-popup-open');
    const popup = document.getElementById(popupId);
    openModal(popup);
  });
});

document.querySelectorAll('[data-popup-close]').forEach(button => {
  button.addEventListener('click', () => {
    const popupId = button.getAttribute('data-popup-close');
    const popup = document.getElementById(popupId);
    closeModal(popup);
  });
});

popupBg.addEventListener('click', (event) => {
  if (event.target === popupBg) {
    popups.forEach(popup => popup.style.display = 'none');
    popupBg.style.display = 'none';
    document.body.classList.remove('no-scroll');
  }
});
