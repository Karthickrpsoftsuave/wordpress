/**
 * Core CRM Sidebar Panel Functionality
 * Works with WordPress block-based pattern structure
 */

(function() {
    'use strict';

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    function init() {
        const sidebar = document.getElementById('core-crm-sidebar');
        if (!sidebar) return;

        const accordionItems = sidebar.querySelectorAll('.crm-accordion-item');

        // Add icons to accordion titles
        accordionItems.forEach(function(item) {
            const title = item.querySelector('.crm-accordion-title');
            if (!title || title.querySelector('.crm-accordion-icon')) return;

            // Create icon wrapper
            const iconSpan = document.createElement('span');
            iconSpan.className = 'crm-accordion-icon';
            iconSpan.innerHTML = '<svg class="icon-minus" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg><svg class="icon-plus" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>';

            // Wrap title content and add icon
            title.style.display = 'flex';
            title.style.justifyContent = 'space-between';
            title.style.alignItems = 'center';
            title.style.cursor = 'pointer';
            title.style.userSelect = 'none';
            title.appendChild(iconSpan);
        });

        // Open sidebar function
        window.openCRMSidebar = function() {
            sidebar.classList.add('active');
            document.body.classList.add('crm-sidebar-open');
        };

        // Close sidebar function
        window.closeCRMSidebar = function() {
            sidebar.classList.remove('active');
            document.body.classList.remove('crm-sidebar-open');
        };

        // Setup close button functionality
        function setupCloseButtons() {
            var closeSelectors = [
                '.crm-sidebar-close',
                '.crm-sidebar-close-btn a',
                '.crm-sidebar-close-btn .wp-block-button__link'
            ];

            closeSelectors.forEach(function(selector) {
                sidebar.querySelectorAll(selector).forEach(function(btn) {
                    btn.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        window.closeCRMSidebar();
                    });
                });
            });
        }

        setupCloseButtons();

        // Click on dark overlay area to close
        sidebar.addEventListener('click', function(e) {
            // Close if clicking directly on the sidebar panel (the overlay area)
            if (e.target === sidebar ||
                e.target.classList.contains('crm-sidebar-panel') ||
                e.target.id === 'core-crm-sidebar') {
                window.closeCRMSidebar();
            }
        });

        // ESC key to close
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && sidebar.classList.contains('active')) {
                window.closeCRMSidebar();
            }
        });

        // Accordion functionality - click on titles
        accordionItems.forEach(function(item) {
            const title = item.querySelector('.crm-accordion-title');
            if (!title) return;

            title.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const isActive = item.classList.contains('active');

                // Close all items
                accordionItems.forEach(function(accordionItem) {
                    accordionItem.classList.remove('active');
                });

                // Toggle current item
                if (!isActive) {
                    item.classList.add('active');
                }
            });
        });

        // Check URL hash on load and open sidebar if needed
        if (window.location.hash === '#crm-features') {
            setTimeout(function() {
                window.openCRMSidebar();
            }, 100);
        }

        // Listen for hash changes
        window.addEventListener('hashchange', function() {
            if (window.location.hash === '#crm-features') {
                window.openCRMSidebar();
            }
        });

        // Support for direct links anywhere on page
        document.addEventListener('click', function(e) {
            var link = e.target.closest('a[href="#crm-features"]');
            if (link) {
                e.preventDefault();
                window.openCRMSidebar();
            }
        });

        console.log('CRM Sidebar initialized');
    }
})();
