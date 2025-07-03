/**
 * DGM Theme JavaScript
 *
 * @package dgm-theme
 * @since 1.0.0
 */

(function ($) {
  'use strict';

  // Initialize when DOM is ready
  $(document).ready(function () {
    initMenu();
    initLenis();
    initFadeInUp();
  });

  /**
   * Initialize mobile menu functionality
   */
  function initMenu() {
    const toggle = document.getElementById('menu-toggle');
    const bars = toggle ? toggle.querySelectorAll('.bar') : [];
    const menu = document.getElementById('mobile-menu');
    const submenuToggle = document.querySelector('.submenu-toggle');
    const submenuDropdown = document.querySelector('.submenu-dropdown');

    if (toggle && menu) {
      let menuOpen = false;

      toggle.addEventListener('click', function () {
        menuOpen = !menuOpen;

        // Update ARIA attributes
        toggle.setAttribute('aria-expanded', menuOpen.toString());

        if (menuOpen) {
          // Animate to "X"
          bars[0].classList.add('rotate-45', 'translate-y-0');
          bars[1].classList.add('opacity-0');
          bars[2].classList.add('-rotate-45', 'translate-y-0');
        } else {
          // Back to hamburger
          bars[0].classList.remove('rotate-45', 'translate-y-0');
          bars[1].classList.remove('opacity-0');
          bars[2].classList.remove('-rotate-45', 'translate-y-0');
        }

        // Show/hide menu with animation
        if (menu.classList.contains('hidden')) {
          menu.classList.remove('hidden');
          setTimeout(() => {
            menu.classList.remove('max-h-0', 'opacity-0');
            menu.classList.add('max-h-96', 'opacity-100');
          }, 10);
        } else {
          menu.classList.remove('max-h-96', 'opacity-100');
          menu.classList.add('max-h-0', 'opacity-0');
          setTimeout(() => {
            menu.classList.add('hidden');
          }, 400);
        }
      });
    }

    // Desktop submenu functionality
    if (submenuToggle && submenuDropdown) {
      submenuToggle.addEventListener('click', function (e) {
        e.preventDefault();
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', (!isExpanded).toString());
        submenuDropdown.classList.toggle('hidden');
      });

      // Close submenu when clicking outside
      document.addEventListener('click', function (e) {
        if (
          !submenuToggle.contains(e.target) &&
          !submenuDropdown.contains(e.target)
        ) {
          submenuToggle.setAttribute('aria-expanded', 'false');
          submenuDropdown.classList.add('hidden');
        }
      });
    }
  }

  /**
   * Initialize Lenis smooth scrolling
   */
  function initLenis() {
    if (typeof Lenis !== 'undefined') {
      const lenis = new Lenis({
        autoRaf: true,
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        direction: 'vertical',
        gestureDirection: 'vertical',
        smooth: true,
        smoothTouch: false,
        touchMultiplier: 2,
      });

      function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
      }

      requestAnimationFrame(raf);
    }
  }

  /**
   * Initialize fade in up animations
   * Note: GSAP is currently disabled, so this uses CSS transitions as fallback
   */
  function initFadeInUp() {
    const elements = document.querySelectorAll('.gsap-fade-in-up');

    if (!elements.length) return;

    // Check if GSAP is available
    if (typeof gsap !== 'undefined') {
      // GSAP implementation
      const observer = new IntersectionObserver(
        (entries, obs) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              gsap.from(entry.target, {
                duration: 1,
                y: 50,
                opacity: 0,
                ease: 'power1.out',
              });
              obs.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.1 }
      );

      elements.forEach((el) => observer.observe(el));
    } else {
      // CSS fallback implementation
      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add('fade-in-visible');
            }
          });
        },
        { threshold: 0.1 }
      );

      elements.forEach((el) => {
        el.classList.add('fade-in-up');
        observer.observe(el);
      });
    }
  }

  /**
   * Initialize Swiper sliders
   */
  function initSwipers() {
    if (typeof Swiper !== 'undefined') {
      // Initialize any Swiper instances here
      const swiperElements = document.querySelectorAll('.swiper');
      swiperElements.forEach((element) => {
        new Swiper(element, {
          loop: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          autoplay: {
            delay: 5000,
            disableOnInteraction: false,
          },
          slidesPerView: 1,
          spaceBetween: 0,
          speed: 500, // Transición más lenta
        });
      });
    }
  }

  /**
   * Initialize Fancybox galleries
   */
  function initFancybox() {
    if (typeof Fancybox !== 'undefined') {
      Fancybox.bind('[data-fancybox]', {
        // Fancybox options
      });
    }
  }

  // Initialize additional libraries when they're loaded
  $(window).on('load', function () {
    initSwipers();
    initFancybox();
  });
})(jQuery);
