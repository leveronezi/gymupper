document.addEventListener('DOMContentLoaded', () => {

  // ── Header scroll effect ─────────────────────────────────────────
  const header = document.getElementById('site-header');
  if (header) {
    const tick = () => header.classList.toggle('scrolled', window.scrollY > 50);
    window.addEventListener('scroll', tick, { passive: true });
    tick();
  }

  // ── Mobile menu (animated height) ────────────────────────────────
  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  const menuBars   = menuToggle ? menuToggle.querySelectorAll('.menu-bar') : [];

  if (menuToggle && mobileMenu) {
    menuToggle.addEventListener('click', () => {
      const isOpen = mobileMenu.classList.contains('open');

      mobileMenu.classList.toggle('open');
      menuToggle.setAttribute('aria-expanded', String(!isOpen));

      // Animate burger → X
      if (!isOpen) {
        menuBars[0]?.classList.add('rotate-45', 'translate-y-[7px]');
        menuBars[1]?.classList.add('opacity-0');
        menuBars[2]?.classList.add('-rotate-45', '-translate-y-[7px]');
      } else {
        menuBars[0]?.classList.remove('rotate-45', 'translate-y-[7px]');
        menuBars[1]?.classList.remove('opacity-0');
        menuBars[2]?.classList.remove('-rotate-45', '-translate-y-[7px]');
      }
    });

    // Close on anchor click
    mobileMenu.querySelectorAll('a[href^="#"]').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuBars[0]?.classList.remove('rotate-45', 'translate-y-[7px]');
        menuBars[1]?.classList.remove('opacity-0');
        menuBars[2]?.classList.remove('-rotate-45', '-translate-y-[7px]');
      });
    });
  }

  // ── Smooth scroll (offset for fixed header) ───────────────────────
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const id = link.getAttribute('href');
      if (id === '#') return;
      const target = document.querySelector(id);
      if (!target) return;
      e.preventDefault();
      const offset = 80;
      window.scrollTo({
        top: target.getBoundingClientRect().top + window.scrollY - offset,
        behavior: 'smooth',
      });
    });
  });

  // ── Scroll reveal ─────────────────────────────────────────────────
  const revealEls = document.querySelectorAll('.reveal');

  if ('IntersectionObserver' in window && revealEls.length) {
    const io = new IntersectionObserver(
      entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            io.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    );
    revealEls.forEach(el => io.observe(el));
  } else {
    revealEls.forEach(el => el.classList.add('visible'));
  }

  // ── Stagger: trigger children after parent becomes visible ────────
  const staggerWrappers = document.querySelectorAll('.stagger');
  if ('IntersectionObserver' in window && staggerWrappers.length) {
    const staggerIO = new IntersectionObserver(
      entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.querySelectorAll('.reveal').forEach(child => {
              child.classList.add('visible');
            });
            staggerIO.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.08 }
    );
    staggerWrappers.forEach(el => staggerIO.observe(el));
  }

});
