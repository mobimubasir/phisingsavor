// Navbar Scroll Effect
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled', 'bg-dark');
    } else {
      navbar.classList.remove('scrolled', 'bg-dark');
    }
  });
  