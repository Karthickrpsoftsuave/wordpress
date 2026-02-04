/**
 * Mobile Menu JavaScript
 *
 * Handles mobile menu toggle for pattern-based header
 *
 * @package Edun_Child
 */

(function() {
    'use strict';

    function initMobileMenu() {
        var mobileMenu = document.querySelector('.edun-mobile-menu-overlay');
        var menuToggleBtn = document.querySelector('.edun-menu-toggle a');
        var header = document.querySelector('.edun-header-navbar');
        var body = document.body;

        if (!mobileMenu || !menuToggleBtn) {
            return;
        }

        // Move menu to body so position:fixed works properly
        body.appendChild(mobileMenu);

        var menuIcon = menuToggleBtn.querySelector('.menu-icon');
        var closeIcon = menuToggleBtn.querySelector('.close-icon');
        var hambergerClose = document.querySelector('.hamberger-close');


        // Toggle menu on button click
        menuToggleBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
           setMenu();
        });
        const setMenu =()=>{
             if (mobileMenu.classList.contains('menu-active')) {
                closeMenu();
            } else {
                openMenu();
            }
        }
        hambergerClose.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
           setMenu();
        });

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('menu-active')) {
                closeMenu();
            }
        });

        // Close menu when clicking menu links
        mobileMenu.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                closeMenu();
            });
        });

        function openMenu() {
            // Position menu right below the header
            var headerHeight = header ? header.offsetHeight : 70;
            mobileMenu.style.top = headerHeight + 'px';
            mobileMenu.style.height = 'calc(100vh - ' + headerHeight + 'px)';

            mobileMenu.classList.add('menu-active');
            body.classList.add('menu-open');

            if (menuIcon && closeIcon) {
                menuIcon.style.display = 'none';
                closeIcon.style.display = 'block';
            }
        }

        function closeMenu() {
            mobileMenu.classList.remove('menu-active');
            body.classList.remove('menu-open');

            if (menuIcon && closeIcon) {
                menuIcon.style.display = 'block';
                closeIcon.style.display = 'none';
            }

            menuToggleBtn.focus();
        }
    }

    // Run immediately if DOM is already ready, otherwise wait
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initMobileMenu);
    } else {
        initMobileMenu();
    }

})();
