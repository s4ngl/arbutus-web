/**
 * Arbutus Yearbook - Complete Navbar JavaScript
 * Implementing all accessibility and interactive requirements
 */

(function() {
    'use strict';

    // ================================================
    // PHASE 1-5: Initialization and Setup
    // ================================================

    let isInitialized = false;
    let focusTrap = null;
    let lastFocusedElement = null;

    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeNavbar);
    } else {
        initializeNavbar();
    }

    function initializeNavbar() {
        if (isInitialized) return;

        // Check if navbar elements exist before initializing
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (!mobileMenuButton || !mobileMenu) {
            console.log('Navbar elements not found, will retry...');
            // Retry after a short delay
            setTimeout(initializeNavbar, 100);
            return;
        }

        setupMobileMenu();
        setupDropdowns();
        setupKeyboardNavigation();
        setupAccessibility();
        setupFocusTrap();

        isInitialized = true;
        console.log('Arbutus Navbar initialized successfully');
    }

    // ================================================
    // PHASE 6-10: Mobile Menu Functionality
    // ================================================

    function setupMobileMenu() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        const mobileMenuClose = document.getElementById('mobile-menu-close');

        if (!mobileMenuButton || !mobileMenu || !mobileMenuOverlay) {
            console.warn('Mobile menu elements not found');
            return;
        }

        // Mobile menu toggle
        mobileMenuButton.addEventListener('click', function(e) {
            e.preventDefault();
            toggleMobileMenu();
        });

        // Close button
        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', function(e) {
                e.preventDefault();
                closeMobileMenu();
            });
        }

        // Overlay click to close
        mobileMenuOverlay.addEventListener('click', function() {
            closeMobileMenu();
        });

        // Setup mobile dropdowns
        setupMobileDropdowns();
    }

    function toggleMobileMenu() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');

        const isOpen = mobileMenuButton.getAttribute('aria-expanded') === 'true';

        if (isOpen) {
            closeMobileMenu();
        } else {
            openMobileMenu();
        }
    }

    function openMobileMenu() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');

        // Store current focus
        lastFocusedElement = document.activeElement;

        // Update ARIA and classes
        mobileMenuButton.setAttribute('aria-expanded', 'true');
        mobileMenu.classList.add('active');
        mobileMenuOverlay.classList.add('active');

        // Prevent body scroll
        document.body.style.overflow = 'hidden';

        // Focus first focusable element in menu
        setTimeout(() => {
            const firstFocusable = mobileMenu.querySelector('a, button');
            if (firstFocusable) {
                firstFocusable.focus();
            }
        }, 100);

        // Announce to screen readers
        announceToScreenReader('Mobile menu opened');
    }

    function closeMobileMenu() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');

        // Update ARIA and classes
        mobileMenuButton.setAttribute('aria-expanded', 'false');
        mobileMenu.classList.remove('active');
        mobileMenuOverlay.classList.remove('active');

        // Restore body scroll
        document.body.style.overflow = '';

        // Close any open mobile dropdowns
        const openDropdowns = mobileMenu.querySelectorAll('.mobile-dropdown.active');
        openDropdowns.forEach(dropdown => {
            dropdown.classList.remove('active');
            const toggle = dropdown.querySelector('.mobile-nav-toggle');
            if (toggle) {
                toggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Restore focus
        if (lastFocusedElement) {
            lastFocusedElement.focus();
            lastFocusedElement = null;
        }

        // Announce to screen readers
        announceToScreenReader('Mobile menu closed');
    }

    // ================================================
    // PHASE 11-15: Mobile Dropdown Functionality
    // ================================================

    function setupMobileDropdowns() {
        const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');

        mobileDropdowns.forEach(dropdown => {
            const toggle = dropdown.querySelector('.mobile-nav-toggle');
            if (!toggle) return;

            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                toggleMobileDropdown(dropdown);
            });
        });
    }

    function toggleMobileDropdown(dropdown) {
        const toggle = dropdown.querySelector('.mobile-nav-toggle');
        const isOpen = dropdown.classList.contains('active');

        // Close other open dropdowns
        const otherDropdowns = document.querySelectorAll('.mobile-dropdown.active');
        otherDropdowns.forEach(otherDropdown => {
            if (otherDropdown !== dropdown) {
                otherDropdown.classList.remove('active');
                const otherToggle = otherDropdown.querySelector('.mobile-nav-toggle');
                if (otherToggle) {
                    otherToggle.setAttribute('aria-expanded', 'false');
                }
            }
        });

        // Toggle current dropdown
        if (isOpen) {
            dropdown.classList.remove('active');
            toggle.setAttribute('aria-expanded', 'false');
        } else {
            dropdown.classList.add('active');
            toggle.setAttribute('aria-expanded', 'true');
        }
    }

    // ================================================
    // PHASE 16-20: Desktop Dropdown Functionality
    // ================================================

    function setupDropdowns() {
        const dropdowns = document.querySelectorAll('.dropdown');

        dropdowns.forEach(dropdown => {
            const toggle = dropdown.querySelector('.dropdown-toggle');
            const menu = dropdown.querySelector('.dropdown-menu');

            if (!toggle || !menu) return;

            // Mouse events
            dropdown.addEventListener('mouseenter', function() {
                openDropdown(dropdown);
            });

            dropdown.addEventListener('mouseleave', function() {
                closeDropdown(dropdown);
            });

            // Click events for mobile-like behavior
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                toggleDropdown(dropdown);
            });

            // Focus events for keyboard navigation
            toggle.addEventListener('focus', function() {
                openDropdown(dropdown);
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!dropdown.contains(e.target)) {
                    closeDropdown(dropdown);
                }
            });
        });
    }

    function openDropdown(dropdown) {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        const menu = dropdown.querySelector('.dropdown-menu');

        // Close other open dropdowns
        const otherDropdowns = document.querySelectorAll('.dropdown.active');
        otherDropdowns.forEach(otherDropdown => {
            if (otherDropdown !== dropdown) {
                closeDropdown(otherDropdown);
            }
        });

        dropdown.classList.add('active');
        toggle.setAttribute('aria-expanded', 'true');

        // Focus first link if opened via keyboard
        if (document.activeElement === toggle) {
            setTimeout(() => {
                const firstLink = menu.querySelector('a');
                if (firstLink) {
                    firstLink.focus();
                }
            }, 50);
        }
    }

    function closeDropdown(dropdown) {
        const toggle = dropdown.querySelector('.dropdown-toggle');

        dropdown.classList.remove('active');
        toggle.setAttribute('aria-expanded', 'false');
    }

    function toggleDropdown(dropdown) {
        const isOpen = dropdown.classList.contains('active');

        if (isOpen) {
            closeDropdown(dropdown);
        } else {
            openDropdown(dropdown);
        }
    }

    // ================================================
    // PHASE 21-25: Keyboard Navigation
    // ================================================

    function setupKeyboardNavigation() {
        // Handle Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                handleEscapeKey();
            }
        });

        // Handle arrow keys in dropdowns
        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(dropdown => {
            const menu = dropdown.querySelector('.dropdown-menu');
            if (!menu) return;

            menu.addEventListener('keydown', function(e) {
                handleDropdownKeyNavigation(e, menu);
            });
        });

        // Handle arrow keys in mobile menu
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenu) {
            mobileMenu.addEventListener('keydown', function(e) {
                handleMobileMenuKeyNavigation(e);
            });
        }
    }

    function handleEscapeKey() {
        // Close mobile menu if open
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenu && mobileMenu.classList.contains('active')) {
            closeMobileMenu();
            return;
        }

        // Close any open dropdowns
        const openDropdowns = document.querySelectorAll('.dropdown.active');
        openDropdowns.forEach(dropdown => {
            closeDropdown(dropdown);
            const toggle = dropdown.querySelector('.dropdown-toggle');
            if (toggle) {
                toggle.focus();
            }
        });
    }

    function handleDropdownKeyNavigation(e, menu) {
        const links = menu.querySelectorAll('a');
        const currentIndex = Array.from(links).indexOf(document.activeElement);

        switch (e.key) {
            case 'ArrowDown':
                e.preventDefault();
                const nextIndex = currentIndex < links.length - 1 ? currentIndex + 1 : 0;
                links[nextIndex].focus();
                break;

            case 'ArrowUp':
                e.preventDefault();
                const prevIndex = currentIndex > 0 ? currentIndex - 1 : links.length - 1;
                links[prevIndex].focus();
                break;

            case 'Home':
                e.preventDefault();
                links[0].focus();
                break;

            case 'End':
                e.preventDefault();
                links[links.length - 1].focus();
                break;
        }
    }

    function handleMobileMenuKeyNavigation(e) {
        if (e.key === 'Tab') {
            // Let the browser handle tab navigation
            // Focus trap will contain it within the mobile menu
            return;
        }
    }

    // ================================================
    // PHASE 26-30: Accessibility Features
    // ================================================

    function setupAccessibility() {
        // Add role and ARIA attributes if missing
        const navbar = document.querySelector('.navbar');
        if (navbar && !navbar.getAttribute('role')) {
            navbar.setAttribute('role', 'navigation');
        }

        // Ensure all interactive elements have proper labels
        const buttons = document.querySelectorAll('button:not([aria-label]):not([aria-labelledby])');
        buttons.forEach(button => {
            if (!button.textContent.trim()) {
                console.warn('Button without accessible label found', button);
            }
        });

        // Setup live region for announcements
        createLiveRegion();
    }

    function createLiveRegion() {
        if (document.getElementById('navbar-live-region')) return;

        const liveRegion = document.createElement('div');
        liveRegion.id = 'navbar-live-region';
        liveRegion.setAttribute('aria-live', 'polite');
        liveRegion.setAttribute('aria-atomic', 'true');
        liveRegion.className = 'sr-only';
        document.body.appendChild(liveRegion);
    }

    function announceToScreenReader(message) {
        const liveRegion = document.getElementById('navbar-live-region');
        if (liveRegion) {
            liveRegion.textContent = message;
            // Clear after announcement
            setTimeout(() => {
                liveRegion.textContent = '';
            }, 1000);
        }
    }

    // ================================================
    // PHASE 31-35: Focus Trap and Final Features
    // ================================================

    function setupFocusTrap() {
        const mobileMenu = document.getElementById('mobile-menu');
        if (!mobileMenu) return;

        // Create focus trap for mobile menu
        focusTrap = {
            container: mobileMenu,
            focusableElements: [],
            firstElement: null,
            lastElement: null,

            updateElements: function() {
                this.focusableElements = this.container.querySelectorAll(
                    'a[href], button:not([disabled]), textarea:not([disabled]), input:not([disabled]), select:not([disabled]), [tabindex]:not([tabindex="-1"])'
                );
                this.firstElement = this.focusableElements[0];
                this.lastElement = this.focusableElements[this.focusableElements.length - 1];
            },

            handleTabKey: function(e) {
                if (!this.container.classList.contains('active')) return;

                this.updateElements();

                if (e.shiftKey) {
                    // Shift + Tab
                    if (document.activeElement === this.firstElement) {
                        e.preventDefault();
                        this.lastElement.focus();
                    }
                } else {
                    // Tab
                    if (document.activeElement === this.lastElement) {
                        e.preventDefault();
                        this.firstElement.focus();
                    }
                }
            }
        };

        // Listen for tab key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Tab') {
                focusTrap.handleTabKey(e);
            }
        });
    }

    // ================================================
    // Utility Functions
    // ================================================

    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // Handle window resize to close mobile menu if viewport becomes large
    window.addEventListener('resize', debounce(function() {
        if (window.innerWidth > 768) {
            closeMobileMenu();
        }
    }, 250));

    // Close dropdowns on scroll (optional)
    window.addEventListener('scroll', debounce(function() {
        const openDropdowns = document.querySelectorAll('.dropdown.active');
        openDropdowns.forEach(closeDropdown);
    }, 100));

    // Prevent clicks on disabled elements
    document.addEventListener('click', function(e) {
        if (e.target.disabled || e.target.getAttribute('aria-disabled') === 'true') {
            e.preventDefault();
            e.stopPropagation();
        }
    });

    // Add a function to reset initialization (for dynamic loading)
    function resetInitialization() {
        isInitialized = false;
    }

    // Public API for external use
    window.ArbutusNavbar = {
        openMobileMenu: openMobileMenu,
        closeMobileMenu: closeMobileMenu,
        openDropdown: openDropdown,
        closeDropdown: closeDropdown,
        announceToScreenReader: announceToScreenReader,
        isInitialized: function() { return isInitialized; },
        resetInitialization: resetInitialization
    };

    // Listen for navbar loaded event
    document.addEventListener('navbarLoaded', function() {
        if (!isInitialized) {
            initializeNavbar();
        }
    });

    // Development helper
    if (typeof console !== 'undefined' && console.log) {
        console.log('Arbutus Navbar script loaded. Use window.ArbutusNavbar for API access.');
    }

})();
