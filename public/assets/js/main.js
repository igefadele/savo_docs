/* ============================================================
   SAVADUB LIMITED — MAIN JS
   ============================================================ */

document.addEventListener('DOMContentLoaded', function () {

  // ---- AOS Init ----
  if (typeof AOS !== 'undefined') {
    AOS.init({
      duration: 700,
      easing: 'ease-out-cubic',
      once: true,
      offset: 60
    });
  }

  // ---- Sticky Header ----
  const header = document.getElementById('savadubHeader');
  if (header) {
    const onScroll = () => {
      header.classList.toggle('scrolled', window.scrollY > 40);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ---- Active Nav Highlight ----
  const currentPage = window.location.pathname.split('/').pop() || 'index/';
  document.querySelectorAll('.savadub-nav-link').forEach(link => {
    const href = link.getAttribute('href') || '';
    if (href && href.split('#')[0] === currentPage) {
      link.classList.add('active');
    }
  });

  // ---- Smooth Scroll for anchor links ----
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      const target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        const headerOffset = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--header-h')) || 72;
        const top = target.getBoundingClientRect().top + window.scrollY - headerOffset - 16;
        window.scrollTo({ top, behavior: 'smooth' });

        // Close mobile menu if open
        const navCollapse = document.getElementById('navbarMain');
        if (navCollapse && navCollapse.classList.contains('show')) {
          const bsCollapse = bootstrap.Collapse.getInstance(navCollapse);
          if (bsCollapse) bsCollapse.hide();
        }
      }
    });
  });

  // ---- Counter Animation for Stats ----
  const counters = document.querySelectorAll('.stat-number');
  const animateCounter = (el) => {
    const text = el.textContent.trim();
    // Only animate numeric counters
    const match = text.match(/^(\d+)/);
    if (!match) return;
    const target = parseInt(match[1]);
    const plus = el.querySelector('.stat-plus');
    const suffix = plus ? plus.outerHTML : '';
    let current = 0;
    const step = Math.ceil(target / 40);
    const interval = setInterval(() => {
      current = Math.min(current + step, target);
      el.innerHTML = current + suffix;
      if (current >= target) clearInterval(interval);
    }, 30);
  };

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    counters.forEach(el => observer.observe(el));
  }

});
