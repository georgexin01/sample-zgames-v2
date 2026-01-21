/**
 * ZGames - Main JavaScript
 * Mobile Gaming WebApp
 */

(function($) {
    'use strict';

    // ============================================
    // Document Ready
    // ============================================
    $(document).ready(function() {
        initStickyHeader();
        initMobileMenu();
        initLazyLoading();
        initSmoothScroll();
        initBackToTop();
        initFormValidation();
    });

    // ============================================
    // Sticky Header on Scroll
    // ============================================
    function initStickyHeader() {
        var header = $('.zgames-header');
        var scrollThreshold = 50;

        $(window).on('scroll', function() {
            if ($(this).scrollTop() > scrollThreshold) {
                header.addClass('header-scrolled');
            } else {
                header.removeClass('header-scrolled');
            }
        });
    }

    // ============================================
    // Mobile Menu
    // ============================================
    function initMobileMenu() {
        // Close mobile menu when clicking a link
        $('.navbar-nav .nav-link').on('click', function() {
            if ($(window).width() < 992) {
                $('.navbar-collapse').collapse('hide');
            }
        });

        // Close dropdown on outside click (mobile)
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.navbar').length) {
                $('.navbar-collapse').collapse('hide');
            }
        });
    }

    // ============================================
    // Lazy Loading for Images
    // ============================================
    function initLazyLoading() {
        // Simple lazy loading using IntersectionObserver
        if ('IntersectionObserver' in window) {
            var lazyImages = document.querySelectorAll('img[data-src]');

            var imageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var img = entry.target;
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        img.classList.add('loaded');
                        observer.unobserve(img);
                    }
                });
            }, {
                rootMargin: '50px 0px'
            });

            lazyImages.forEach(function(img) {
                imageObserver.observe(img);
            });
        } else {
            // Fallback for older browsers
            $('img[data-src]').each(function() {
                $(this).attr('src', $(this).data('src'));
            });
        }
    }

    // ============================================
    // Smooth Scroll
    // ============================================
    function initSmoothScroll() {
        $('a[href^="#"]').on('click', function(e) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 70
                }, 600);
            }
        });
    }

    // ============================================
    // Back to Top Button
    // ============================================
    function initBackToTop() {
        // Create back to top button if not exists
        if (!$('.back-to-top').length) {
            $('body').append('<a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>');
        }

        var backToTop = $('.back-to-top');

        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 300) {
                backToTop.addClass('visible');
            } else {
                backToTop.removeClass('visible');
            }
        });

        backToTop.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 600);
        });
    }

    // ============================================
    // Form Validation
    // ============================================
    function initFormValidation() {
        // Bootstrap 5 form validation
        var forms = document.querySelectorAll('.needs-validation');

        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }

    // ============================================
    // Utility Functions
    // ============================================

    // Show loading spinner
    window.showLoading = function(container) {
        var spinner = '<div class="loading-overlay"><div class="spinner"></div></div>';
        $(container).append(spinner);
    };

    // Hide loading spinner
    window.hideLoading = function(container) {
        $(container).find('.loading-overlay').remove();
    };

    // Toast notification
    window.showToast = function(message, type) {
        type = type || 'info';
        var toast = $('<div class="toast-notification toast-' + type + '">' + message + '</div>');
        $('body').append(toast);

        setTimeout(function() {
            toast.addClass('show');
        }, 100);

        setTimeout(function() {
            toast.removeClass('show');
            setTimeout(function() {
                toast.remove();
            }, 300);
        }, 3000);
    };

    // Format number with commas
    window.formatNumber = function(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    };

    // Debounce function
    window.debounce = function(func, wait) {
        var timeout;
        return function() {
            var context = this;
            var args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                func.apply(context, args);
            }, wait);
        };
    };

    // ============================================
    // AJAX Helper
    // ============================================
    window.ajaxRequest = function(options) {
        var defaults = {
            method: 'POST',
            dataType: 'json',
            beforeSend: function() {
                if (options.loadingContainer) {
                    showLoading(options.loadingContainer);
                }
            },
            complete: function() {
                if (options.loadingContainer) {
                    hideLoading(options.loadingContainer);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
                showToast('An error occurred. Please try again.', 'error');
            }
        };

        return $.ajax($.extend({}, defaults, options));
    };

})(jQuery);

// ============================================
// Additional CSS for JS components
// ============================================
(function() {
    var style = document.createElement('style');
    style.textContent = `
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 90px;
            right: 80px;
            width: 45px;
            height: 45px;
            background: var(--primary-color, #6c5ce7);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 997;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background: var(--primary-dark, #5b4cdb);
            color: #fff;
            transform: translateY(-3px);
        }

        /* Loading Overlay */
        .loading-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255,255,255,0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 100;
        }

        /* Toast Notification */
        .toast-notification {
            position: fixed;
            bottom: 100px;
            left: 50%;
            transform: translateX(-50%) translateY(20px);
            padding: 12px 24px;
            border-radius: 8px;
            color: #fff;
            font-size: 14px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 9999;
        }

        .toast-notification.show {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        .toast-info { background: #6c5ce7; }
        .toast-success { background: #00b894; }
        .toast-error { background: #d63031; }
        .toast-warning { background: #fdcb6e; color: #333; }

        /* Lazy Loading */
        img[data-src] {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        img.loaded {
            opacity: 1;
        }

        /* Header Scrolled State */
        .header-scrolled {
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        @media (max-width: 991.98px) {
            .back-to-top {
                right: 20px;
                bottom: 150px;
            }
        }
    `;
    document.head.appendChild(style);
})();
