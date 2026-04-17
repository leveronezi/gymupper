document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.getElementById('menu-toggle');
  const menu   = document.getElementById('mobile-menu');
  if (toggle && menu) toggle.addEventListener('click', () => menu.classList.toggle('hidden'));

  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const target = document.querySelector(link.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        menu?.classList.add('hidden');
      }
    });
  });

  const header = document.querySelector('header');
  if (header) window.addEventListener('scroll', () => header.classList.toggle('shadow-md', window.scrollY > 10));
});
