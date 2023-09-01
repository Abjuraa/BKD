document.addEventListener('DOMContentLoaded', function() {
  const slider = document.querySelector('.slider');
  const slides = document.querySelectorAll('.slide');
  const slideWidth = slides[0].clientWidth;
  let currentIndex = 0;

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
  }

  setInterval(nextSlide, 3000); // Cambia el slide cada 3 segundos
});
