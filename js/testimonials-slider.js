/**
 * Testimonials Slider JavaScript
 *
 * Handles the testimonial carousel functionality with smooth transitions
 */

(function() {
    'use strict';

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initTestimonialsSlider);
    } else {
        initTestimonialsSlider();
    }

    function initTestimonialsSlider() {
        const sliderContainers = document.querySelectorAll('.testimonials-slider');

        // Initialize each slider independently
        sliderContainers.forEach(function(sliderContainer) {
            initSingleSlider(sliderContainer);
        });
    }

    function initSingleSlider(sliderContainer) {
        if (!sliderContainer) {
            return;
        }

        const slides = sliderContainer.querySelectorAll('.testimonial-slide');
        const prevButton = sliderContainer.querySelector('.prev-arrow');
        const nextButton = sliderContainer.querySelector('.next-arrow');
        const totalSlides = slides.length;

        if (totalSlides === 0) {
            return;
        }

        // State
        let currentSlide = 0;
        let isAnimating = false;

        /**
         * Show a specific slide by index
         */
        function showSlide(index) {
            if (isAnimating) {
                return;
            }

            // Ensure index is within bounds
            if (index < 0) {
                index = totalSlides - 1;
            } else if (index >= totalSlides) {
                index = 0;
            }

            isAnimating = true;

            // Remove active from all
            for (let i = 0; i < slides.length; i++) {
                slides[i].classList.remove('active');
            }

            // Add active to current
            slides[index].classList.add('active');
            currentSlide = index;

            // Release animation lock
            setTimeout(function() {
                isAnimating = false;
            }, 600);
        }

        /**
         * Go to next slide
         */
        function nextSlide(e) {
            if (e) {
                e.preventDefault();
                e.stopPropagation();
            }

            const nextIndex = (currentSlide + 1) % totalSlides;
            showSlide(nextIndex);
        }

        /**
         * Go to previous slide
         */
        function prevSlide(e) {
            if (e) {
                e.preventDefault();
                e.stopPropagation();
            }

            const prevIndex = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(prevIndex);
        }

        // Attach event listeners (only once)
        if (nextButton && !nextButton.hasAttribute('data-slider-initialized')) {
            nextButton.setAttribute('data-slider-initialized', 'true');
            nextButton.addEventListener('click', nextSlide, false);
        }

        if (prevButton && !prevButton.hasAttribute('data-slider-initialized')) {
            prevButton.setAttribute('data-slider-initialized', 'true');
            prevButton.addEventListener('click', prevSlide, false);
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (!isElementInViewport(sliderContainer)) {
                return;
            }

            if (e.key === 'ArrowLeft') {
                e.preventDefault();
                prevSlide();
            } else if (e.key === 'ArrowRight') {
                e.preventDefault();
                nextSlide();
            }
        });

        // Touch/Swipe support
        let touchStartX = 0;
        let touchEndX = 0;

        sliderContainer.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        sliderContainer.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) < swipeThreshold) {
                return;
            }

            if (diff > 0) {
                // Swiped left - next slide
                nextSlide();
            } else {
                // Swiped right - previous slide
                prevSlide();
            }
        }

        /**
         * Check if element is in viewport
         */
        function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Fade-in animation when visible
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('testimonials-visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            observer.observe(sliderContainer);
        } else {
            // Fallback for older browsers
            sliderContainer.classList.add('testimonials-visible');
        }

        // Ensure first slide is active
        showSlide(0);
    }

})();
