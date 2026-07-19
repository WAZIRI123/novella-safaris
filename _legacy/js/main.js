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

    // Revolution-style hero slider with Ken Burns zoom
    const slidesRoot = document.getElementById('heroSlides');
    const dotsRoot   = document.getElementById('heroDots');
    const prevBtn    = document.getElementById('heroPrev');
    const nextBtn    = document.getElementById('heroNext');
    if (slidesRoot) {
        const slides = Array.from(slidesRoot.querySelectorAll('.hero-slide'));
        let current = 0;
        let timer;
        const SLIDE_MS = 6500;

        if (dotsRoot) {
            slides.forEach((_, i) => {
                const b = document.createElement('button');
                b.setAttribute('aria-label', 'Go to slide ' + (i + 1));
                if (i === 0) b.classList.add('active');
                b.addEventListener('click', () => goTo(i));
                dotsRoot.appendChild(b);
            });
        }

        const restartKenBurns = (el) => {
            el.style.animation = 'none';
            el.offsetWidth;
            el.style.animation = '';
        };
        const goTo = (i) => {
            if (i === current) return;
            slides[current].classList.remove('active');
            current = (i + slides.length) % slides.length;
            const next = slides[current];
            restartKenBurns(next);
            next.classList.add('active');
            if (dotsRoot) {
                dotsRoot.querySelectorAll('button').forEach((b, k) =>
                    b.classList.toggle('active', k === current)
                );
            }
            resetTimer();
        };
        const nextSlide = () => goTo(current + 1);
        const prevSlide = () => goTo(current - 1);
        const resetTimer = () => {
            clearInterval(timer);
            timer = setInterval(nextSlide, SLIDE_MS);
        };

        prevBtn && prevBtn.addEventListener('click', prevSlide);
        nextBtn && nextBtn.addEventListener('click', nextSlide);

        // pause on hover, resume on leave
        slidesRoot.parentElement.addEventListener('mouseenter', () => clearInterval(timer));
        slidesRoot.parentElement.addEventListener('mouseleave', resetTimer);

        resetTimer();
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
