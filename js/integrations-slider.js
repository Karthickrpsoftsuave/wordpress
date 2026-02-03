/**
 * Edun Integrations/Partners Logo Slider
 *
 * Handles logo slider functionality with responsive behavior
 *
 * @package Edun_Child
 */

(function() {
    'use strict';

    /**
     * Initialize all logo sliders on the page
     */
    function initLogoSliders() {
        const sliders = document.querySelectorAll('.edun-logo-slider-container');

        sliders.forEach(slider => {
            new LogoSlider(slider);
        });
    }

    /**
     * Logo Slider Class
     */
    class LogoSlider {
        constructor(container) {
            this.container = container;
            this.track = container.querySelector('.edun-logo-slider-track');
            this.items = container.querySelectorAll('.edun-logo-item');
            this.prevBtn = container.querySelector('.edun-slider-prev');
            this.nextBtn = container.querySelector('.edun-slider-next');

            if (!this.track || this.items.length === 0) {
                return;
            }

            this.currentIndex = 0;
            this.itemsPerView = this.getItemsPerView();
            this.totalPages = Math.ceil(this.items.length / this.itemsPerView);

            this.init();
        }

        /**
         * Initialize slider
         */
        init() {
            this.setupStyles();
            this.bindEvents();
            this.updateSlider();
            this.updateButtons();
        }

        /**
         * Get number of items to show based on screen width
         */
        getItemsPerView() {
            const width = window.innerWidth;

            if (width >= 1024) {
                return 6; // Desktop: 6 logos
            } else if (width >= 768) {
                return 4; // Tablet: 4 logos
            } else if (width >= 480) {
                return 2; // Mobile: 2 logos
            } else {
                return 1; // Small mobile: 1 logo
            }
        }

        /**
         * Setup CSS styles for slider
         */
        setupStyles() {
            // Set track as flex container
            this.track.style.display = 'flex';
            this.track.style.transition = 'transform 0.5s ease-in-out';
            this.track.style.gap = '20px';

            // Set item widths
            this.updateItemWidths();
        }

        /**
         * Update item widths based on items per view
         */
        updateItemWidths() {
            const gap = 20;
            const totalGaps = (this.itemsPerView - 1) * gap;
            const itemWidth = `calc((100% - ${totalGaps}px) / ${this.itemsPerView})`;

            this.items.forEach(item => {
                item.style.flex = `0 0 ${itemWidth}`;
                item.style.minWidth = '0';
            });
        }

        /**
         * Bind event listeners
         */
        bindEvents() {
            // Navigation buttons
            if (this.prevBtn) {
                this.prevBtn.addEventListener('click', () => this.prev());
            }

            if (this.nextBtn) {
                this.nextBtn.addEventListener('click', () => this.next());
            }

            // Handle window resize
            let resizeTimer;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(() => {
                    const oldItemsPerView = this.itemsPerView;
                    this.itemsPerView = this.getItemsPerView();

                    if (oldItemsPerView !== this.itemsPerView) {
                        this.totalPages = Math.ceil(this.items.length / this.itemsPerView);
                        this.currentIndex = 0; // Reset to first page on resize
                        this.updateItemWidths();
                        this.updateSlider();
                        this.updateButtons();
                    }
                }, 250);
            });

            // Keyboard navigation
            this.container.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') {
                    this.prev();
                } else if (e.key === 'ArrowRight') {
                    this.next();
                }
            });
        }

        /**
         * Go to previous page
         */
        prev() {
            if (this.currentIndex > 0) {
                this.currentIndex--;
            } else {
                // Loop to last page
                this.currentIndex = this.totalPages - 1;
            }

            this.updateSlider();
            this.updateButtons();
        }

        /**
         * Go to next page
         */
        next() {
            if (this.currentIndex < this.totalPages - 1) {
                this.currentIndex++;
            } else {
                // Loop back to first page
                this.currentIndex = 0;
            }

            this.updateSlider();
            this.updateButtons();
        }

        /**
         * Update slider position
         */
        updateSlider() {
            const gap = 20;
            const itemWidth = this.items[0].offsetWidth;
            const offset = this.currentIndex * this.itemsPerView * (itemWidth + gap);

            this.track.style.transform = `translateX(-${offset}px)`;
        }

        /**
         * Update button states
         */
        updateButtons() {
            // Update button disabled state
            if (this.prevBtn) {
                this.prevBtn.disabled = false; // Always enabled for looping
                this.prevBtn.style.opacity = '1';
            }

            if (this.nextBtn) {
                this.nextBtn.disabled = false; // Always enabled for looping
                this.nextBtn.style.opacity = '1';
            }

            // If only one page, disable both buttons
            if (this.totalPages <= 1) {
                if (this.prevBtn) {
                    this.prevBtn.disabled = true;
                    this.prevBtn.style.opacity = '0.3';
                }
                if (this.nextBtn) {
                    this.nextBtn.disabled = true;
                    this.nextBtn.style.opacity = '0.3';
                }
            }
        }
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initLogoSliders);
    } else {
        initLogoSliders();
    }
})();
