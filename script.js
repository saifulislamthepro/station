// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

const menuBtn = document.getElementById('menuBtn');
const crossBtn = document.getElementById('crossBtn');
const navList = document.getElementById('nav-list');

// Toggle menu open
menuBtn.addEventListener('click', () => {
  navList.classList.add('active');
  menuBtn.classList.add('menu-hide');
  crossBtn.classList.add('cross-active');
});

// Toggle menu close
crossBtn.addEventListener('click', () => {
  navList.classList.remove('active');
  menuBtn.classList.remove('menu-hide');
  crossBtn.classList.remove('cross-active');
});

// Close menu when clicking outside
document.addEventListener('click', (event) => {
  const isClickInsideMenu = navList.contains(event.target);
  const isClickOnToggle = menuBtn.contains(event.target) || crossBtn.contains(event.target);

  if (!isClickInsideMenu && !isClickOnToggle) {
    navList.classList.remove('active');
    menuBtn.classList.remove('menu-hide');
    crossBtn.classList.remove('cross-active');
  }
});