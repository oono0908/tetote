// ===== Hero Swiper（フェードでふわっと切替）=====
const heroSwiper = new Swiper('#hero-swiper', {
  effect: 'fade',
  fadeEffect: { crossFade: true },
  speed: 1200,
  loop: true,
  allowTouchMove: false,
  autoplay: {
    delay: 4200,
    disableOnInteraction: false,
  },
});

// ===== Hamburger / Drawer =====
const hamburger = document.getElementById('hamburger');
const drawer = document.getElementById('drawer');

function setDrawer(open) {
  hamburger.classList.toggle('is-open', open);
  drawer.classList.toggle('is-open', open);
  hamburger.setAttribute('aria-expanded', String(open));
  drawer.setAttribute('aria-hidden', String(!open));
  // スクロール固定（簡易）
  document.documentElement.style.overflow = open ? 'hidden' : '';
  document.body.style.overflow = open ? 'hidden' : '';
}

hamburger.addEventListener('click', () => {
  const open = !hamburger.classList.contains('is-open');
  setDrawer(open);
});

drawer.addEventListener('click', (e) => {
  if (e.target === drawer) setDrawer(false); // 背景クリックで閉じる
});

window.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') setDrawer(false);
});
