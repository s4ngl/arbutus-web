// Function to load partials via fetch
async function loadPartial(partialPath, targetElementId) {
    try {
        const response = await fetch(partialPath);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const html = await response.text();
        const targetElement = document.getElementById(targetElementId);
        if (targetElement) {
            targetElement.innerHTML = html;

            // If navbar was loaded, trigger navbar initialization
            if (partialPath === 'partials/navbar.html') {
                // Dispatch a custom event to signal navbar is ready
                document.dispatchEvent(new CustomEvent('navbarLoaded'));
            }
        }
    } catch (error) {
        console.error('Error loading partial:', error);
    }
}

// Function to set page title dynamically
function setPageTitle(title) {
    const pageTitle = document.getElementById('page-title');
    const ogTitle = document.getElementById('og-title');
    const twitterTitle = document.getElementById('twitter-title');

    if (pageTitle) pageTitle.textContent = title + ' - Arbutus Yearbook';
    if (ogTitle) ogTitle.setAttribute('content', title + ' - Arbutus Yearbook');
    if (twitterTitle) twitterTitle.setAttribute('content', title + ' - Arbutus Yearbook');
}

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

// Phase 7: Auto-scrolling Archive Gallery
document.addEventListener('DOMContentLoaded', function() {
    const gallery = document.getElementById('archive-gallery');
    if (gallery) {
        // Generate book placeholders for years 2000-2025
        const years = [];
        for (let year = 2000; year <= 2025; year++) {
            years.push(year);
        }

        // Duplicate the years array to create seamless loop
        const allYears = [...years, ...years];

        allYears.forEach(year => {
            const book = document.createElement('div');
            book.className = 'book-placeholder';
            book.setAttribute('data-year', year);
            gallery.appendChild(book);
        });

        // Pause animation on hover
        gallery.addEventListener('mouseenter', function() {
            this.style.animationPlayState = 'paused';
        });

        gallery.addEventListener('mouseleave', function() {
            this.style.animationPlayState = 'running';
        });
    }
});
