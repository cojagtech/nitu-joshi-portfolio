(function () {
  var menu = document.getElementById('site-menu'), open = document.getElementById('menu-open'), close = document.getElementById('menu-close');
  function setMenu(on) {
    if (!menu || !open || !close) return;
    menu.hidden = !on; open.setAttribute('aria-expanded', on ? 'true' : 'false');
    document.body.style.overflow = on ? 'hidden' : '';
    (on ? close : open).focus();
  }
  if (open) open.addEventListener('click', function () { setMenu(true); });
  if (close) close.addEventListener('click', function () { setMenu(false); });
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && menu && !menu.hidden) setMenu(false); });

  // Header shrink-on-scroll
  var header = document.querySelector('.ab-header');
  if (header) {
    var onScroll = function () { header.classList.toggle('is-scrolled', window.scrollY > 40); };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }
})();
