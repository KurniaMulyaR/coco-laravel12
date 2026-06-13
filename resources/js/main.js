/* ===== COCO Digital Agency - Main JS ===== */

document.addEventListener('DOMContentLoaded', () => {

  // ── Navbar scroll ──────────────────────────────────────
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 40);
  }, { passive: true });

  // ── Active nav link by current route ───────────────
  const navLinks = document.querySelectorAll('.nav-links a');
  const path = window.location.pathname;

  navLinks.forEach(a => {
    const href = a.getAttribute('href');
    // normalize
    const normalizedHref = href === '/' ? '/' : href.replace(/\/$/, '');
    const normalizedPath = path === '/' ? '/' : path.replace(/\/$/, '');
    const isActive = normalizedHref === normalizedPath;

    a.classList.toggle('active', isActive);
  });


// Scroll effect
window.addEventListener('scroll', () => {
  document.getElementById('mainNavbar').classList.toggle('scrolled', window.scrollY > 10);
});


  // ── Bubble Generator ───────────────────────────────────
  const heroSection = document.querySelector('.hero-section, .hero-section-services');
  const bubbleCount = 18;

  function createBubble() {
    const b = document.createElement('div');
    b.classList.add('bubble');
    const size = Math.random() * 80 + 20;
    const x    = Math.random() * 95;
    const dur  = Math.random() * 10 + 10;
    const delay= Math.random() * 12;
    b.style.cssText = `
      width: ${size}px; height: ${size}px;
      left: ${x}%; bottom: -${size + 20}px;
      animation-duration: ${dur}s;
      animation-delay: -${delay}s;
    `;
    heroSection.appendChild(b);
    setTimeout(() => b.remove(), (dur + delay) * 1000);
  }

  if (heroSection) {
    // Reveal cards in staggered order
    document.querySelectorAll('.card').forEach((card, index) => {
      card.classList.add('reveal', `reveal-delay-${(index % 4) + 1}`);
    });

    // Initial bubbles
    for (let i = 0; i < bubbleCount; i++) createBubble();
    setInterval(createBubble, 1200);
  }

  // ── Scroll Reveal ──────────────────────────────────────
  const revealEls = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver(
    entries => entries.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('in-view'); observer.unobserve(e.target); }
    }),
    { threshold: 0.12 }
  );
  revealEls.forEach(el => observer.observe(el));

  // ── Ticker duplicate ───────────────────────────────────
  const track = document.querySelector('.ticker-track');
  if (track) {
    track.innerHTML += track.innerHTML;
  }

  // ── Smooth parallax on hero elements ──────────────────
  window.addEventListener('scroll', () => {
    const y = window.scrollY;
    const planeR = document.querySelector('.plane-right');
    const planeL = document.querySelector('.plane-left');
    if (planeR) planeR.style.transform = `translate(${y * 0.08}px, ${-y * 0.12}px) rotate(-6deg)`;
    if (planeL) planeL.style.transform = `scaleX(-1) translate(${y * 0.06}px, ${y * 0.08}px) rotate(4deg)`;
  }, { passive: true });

});