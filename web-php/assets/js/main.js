'use strict';

document.addEventListener('DOMContentLoaded', () => {
  document.documentElement.classList.add('js');

  initNavbar();
  initTyping();
  initFilters();
  initDemoForms();
});

/** Menú offcanvas móvil (open/close + clic en overlay y en enlaces). */
function initNavbar() {
  const offcanvas = document.getElementById('nav-offcanvas');
  const overlay = document.querySelector('.nav-overlay');
  if (!offcanvas || !overlay) return;

  const open = () => {
    offcanvas.classList.add('open');
    overlay.classList.add('show');
  };
  const close = () => {
    offcanvas.classList.remove('open');
    overlay.classList.remove('show');
  };

  document.querySelectorAll('[data-open-menu]').forEach((btn) => btn.addEventListener('click', open));
  document.querySelectorAll('[data-close-menu]').forEach((btn) => btn.addEventListener('click', close));
  document.querySelectorAll('.nav-offcanvas-links a').forEach((link) => link.addEventListener('click', close));
}

/** Efecto de tipeo del hero (mismo comportamiento que la versión React). */
function initTyping() {
  const root = document.querySelector('[data-typing]');
  if (!root) return;

  const leadEl = root.querySelector('[data-role="lead"]');
  const accentEl = root.querySelector('[data-role="accent"]');
  const subEl = root.querySelector('[data-role="sub"]');
  const titleCaret = root.querySelector('[data-role="title-caret"]');
  const subCaret = root.querySelector('[data-role="sub-caret"]');
  if (!leadEl || !accentEl || !subEl) return;

  const lead = root.dataset.lead || '';
  const accent = root.dataset.accent || '';
  const sub = subEl.dataset.text || '';

  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Sin animación: se muestra el texto completo de inmediato.
  if (prefersReducedMotion) {
    leadEl.textContent = lead;
    accentEl.textContent = accent;
    subEl.textContent = sub;
    titleCaret.classList.add('is-hidden');
    return;
  }

  root.classList.add('hero-typing');

  const typePart = (el, text, ms, onDone) => {
    let i = 0;
    const timer = setInterval(() => {
      i += 1;
      el.textContent = text.slice(0, i);
      if (i >= text.length) {
        clearInterval(timer);
        onDone();
      }
    }, ms);
  };

  typePart(leadEl, lead, 17.5, () => {
    typePart(accentEl, accent, 17.5, () => {
      titleCaret.classList.add('is-hidden');
      subCaret.classList.remove('is-hidden');
      typePart(subEl, sub, 2.5, () => {
        subCaret.classList.add('is-hidden');
        root.classList.remove('hero-typing'); // revela el buscador
      });
    });
  });
}

/** Toggle del panel de filtros en resultados (móvil). */
function initFilters() {
  const toggle = document.querySelector('[data-action="toggle-filters"]');
  const panel = document.getElementById('results-filters');
  if (!toggle || !panel) return;

  toggle.addEventListener('click', () => {
    const hidden = panel.classList.toggle('d-none');
    const icon = toggle.querySelector('.bi');
    icon.classList.toggle('bi-funnel-fill', !hidden);
    icon.classList.toggle('bi-funnel', hidden);
  });
}

/** Formularios demo (Pagar con MercadoPago). */
function initDemoForms() {
  document.querySelectorAll('form[data-demo]').forEach((form) => {
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      alert('Redirigiendo a MercadoPago para completar el pago...');
    });
  });
}