// Mobile menu toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');
    
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('hidden');
            
            // Update aria-expanded attribute
            const isExpanded = !navMenu.classList.contains('hidden');
            navToggle.setAttribute('aria-expanded', isExpanded);
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!navToggle.contains(event.target) && !navMenu.contains(event.target)) {
                navMenu.classList.add('hidden');
                navToggle.setAttribute('aria-expanded', 'false');
            }
        });
        
        // Close mobile menu when pressing Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && !navMenu.classList.contains('hidden')) {
                navMenu.classList.add('hidden');
                navToggle.setAttribute('aria-expanded', 'false');
            }
        });
    }
});

// Smooth scrolling for anchor links
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});