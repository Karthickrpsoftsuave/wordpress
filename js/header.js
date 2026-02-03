/**
 * Edun Header JavaScript
 * 
 * Handles:
 * - Mobile menu toggle
 * - Scroll effects
 * - Keyboard navigation
 *
 * @package Edun_Child
 */

(function() {
    'use strict';

    // Wait for DOM ready
    document.addEventListener('DOMContentLoaded', function() {
        initHeader();
    });

    /**
     * Initialize header functionality
     */
    function initHeader() {
        const menuToggle = document.getElementById('edun-menu-toggle');
        const menuClose = document.getElementById('edun-menu-close');
        const mobileMenu = document.getElementById('edun-mobile-menu');
        const header = document.getElementById('edun-header');
        const body = document.body;

        if (!menuToggle || !mobileMenu) return;

        // Toggle menu on hamburger click
        menuToggle.addEventListener('click', function() {
            toggleMenu();
        });

        // Close menu on X button click
        if (menuClose) {
            menuClose.addEventListener('click', function() {
                closeMenu();
            });
        }

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                closeMenu();
            }
        });

        // Close menu when clicking outside
        mobileMenu.addEventListener('click', function(e) {
            if (e.target === mobileMenu) {
                closeMenu();
            }
        });

        // Close menu when clicking a link
        const menuLinks = mobileMenu.querySelectorAll('a');
        menuLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                closeMenu();
            });
        });

        // Scroll effect for header
        let lastScroll = 0;
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            // Add shadow on scroll
            if (currentScroll > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            // Optional: Hide header on scroll down, show on scroll up
            // if (currentScroll > lastScroll && currentScroll > 200) {
            //     header.classList.add('header-hidden');
            // } else {
            //     header.classList.remove('header-hidden');
            // }

            lastScroll = currentScroll;
        });

        /**
         * Toggle mobile menu
         */
        function toggleMenu() {
            const isOpen = mobileMenu.classList.contains('active');
            
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        }

        /**
         * Open mobile menu
         */
        function openMenu() {
            mobileMenu.classList.add('active');
            menuToggle.classList.add('active');
            menuToggle.setAttribute('aria-expanded', 'true');
            mobileMenu.setAttribute('aria-hidden', 'false');
            body.classList.add('menu-open');

            // Focus first menu item for accessibility
            setTimeout(function() {
                const firstLink = mobileMenu.querySelector('a');
                if (firstLink) firstLink.focus();
            }, 100);
        }

        /**
         * Close mobile menu
         */
        function closeMenu() {
            mobileMenu.classList.remove('active');
            menuToggle.classList.remove('active');
            menuToggle.setAttribute('aria-expanded', 'false');
            mobileMenu.setAttribute('aria-hidden', 'true');
            body.classList.remove('menu-open');

            // Return focus to toggle button
            menuToggle.focus();
        }
    }

})();
