/* NOVELLA SAFARIS — main.js */
(function () {
    'use strict';

    // Sticky nav shadow
    const nav = document.getElementById('mainNav');
    if (nav) {
        const onScroll = () => nav.classList.toggle('scrolled', window.scrollY > 8);
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    // Mobile menu toggle
    const toggle = document.getElementById('navToggle');
    const menu   = document.getElementById('primaryNav');
    if (toggle && menu) {
        toggle.addEventListener('click', () => {
            toggle.classList.toggle('open');
            menu.classList.toggle('open');
        });
        menu.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => {
                if (!a.parentElement.classList.contains('has-dropdown')) {
                    toggle.classList.remove('open');
                    menu.classList.remove('open');
                }
            });
        });
    }

    // Scroll reveal
    const targets = document.querySelectorAll(
        '.feature-card, .special-card, .top-card, .review-card, .video-card, .news-card, .cat-card, .trip-row, .charity-card, .why-portrait, .why-text, .section-title, .awards-strip .award-logo'
    );
    targets.forEach(el => el.classList.add('reveal'));

    if ('IntersectionObserver' in window) {
        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    io.unobserve(e.target);
                }
            });
        }, { threshold: 0.1 });
        targets.forEach(el => io.observe(el));
    } else {
        targets.forEach(el => el.classList.add('visible'));
    }
})();
