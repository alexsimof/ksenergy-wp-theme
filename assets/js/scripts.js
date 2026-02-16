

// back-to-top

function backToTop () {
  let button = $('.back-to-top');

  $(window).on('scroll', () => {
    if ($(this).scrollTop() >= 550) {
      button.fadeIn();
    } else {
      button.fadeOut();
    }
  });

  button.on('click', (e) => {
    e.preventDefault();
    $('html').animate({scrollTop: 0}, 400);
  })
}

backToTop();



// ..анимация меню

const openBtn = document.querySelector('.header-menu-toggle');
const closeBtn = document.querySelector('.header-mobil-close');
const showMenu = document.querySelector('.header-mobil-menu');
openBtn.addEventListener('click', (e) => {
  e.preventDefault();
  showMenu.classList.add('show');
});
closeBtn.addEventListener('click', (e) => {
  e.preventDefault();
  showMenu.classList.remove('show');
})
