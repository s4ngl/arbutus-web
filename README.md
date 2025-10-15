# Arbutus Yearbook Website

A modern, responsive website for the Arbutus yearbook - Indiana University's student-run yearbook publication under Indiana University Student Media.

## 📋 Table of Contents

- [Project Overview](#project-overview)
- [Technology Stack](#technology-stack)
- [Project Structure](#project-structure)
- [Design System](#design-system)
- [Web Page Structure](#web-page-structure)
- [Features & Functionality](#features--functionality)
- [Deployment Guide](#deployment-guide)
- [Maintenance Guide](#maintenance-guide)
- [Development Guidelines](#development-guidelines)
- [Contact Information](#contact-information)

## 🎯 Project Overview

The Arbutus yearbook website serves as the digital presence for Indiana University's official yearbook publication. Founded in 1894, the Arbutus has been documenting campus life for over 130 years. This website provides:

- **Yearbook ordering system** for current students and alumni
- **Digital archive access** to historical yearbooks (1894-present)
- **Staff recruitment** and involvement opportunities
- **Portrait scheduling** and information
- **Organization information** and contact details

### Key Statistics
- **Founded**: 1894
- **Organization**: Indiana University Student Media
- **Publication**: Annual yearbook
- **Digital Archive**: 63+ years available online
- **Current Year**: 2026

## 🛠 Technology Stack

### Frontend Technologies
- **HTML5** - Semantic markup with accessibility features
- **CSS3** - Custom properties, modern layout techniques
- **JavaScript (ES6+)** - Vanilla JS for interactivity
- **Tailwind CSS** - Utility-first CSS framework (CDN)

### External Dependencies
- **Google Fonts** - Inter (sans-serif)
- **Tailwind CSS** - Via CDN for rapid development
- **Issuu** - Digital archive hosting platform

### Browser Support
- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile responsive design
- Progressive enhancement approach

## 📁 Project Structure

```
arbutus-web/
├── css/
│   ├── globals.css          # Main stylesheet with design system
│   ├── navbar.css           # Navigation component styles
│   └── reset.css            # CSS reset for cross-browser consistency
├── js/
│   ├── navbar.js            # Navigation functionality and accessibility
│   └── script.js            # General site functionality and partials
├── images/
│   ├── icons/               # Favicon and logo assets
│   │   ├── favicon.png
│   │   ├── ids-logo.svg
│   │   ├── logo-block-filled-16x16.png
│   │   ├── logo-block-filled-32x32.png
│   │   ├── logo-block-filled-android-chrome-192x192.png
│   │   ├── logo-block-filled-android-chrome-512x512.png
│   │   ├── logo-block-filled-apple-touch-icon.png
│   │   ├── logo-block-transparent.svg
│   │   └── logo.svg
│   ├── arbutus-flower-logo.svg
│   ├── arbutus-text-logo.svg
│   ├── hero-background.jpg
│   ├── home-subhero.jpg
│   ├── mockup.png
│   ├── natalie-fitzgibbons.jpg
│   └── yearbook-archive.jpg
├── partials/
│   ├── navbar.html          # Reusable navigation component
│   └── footer.html          # Reusable footer component
├── about.html               # Organization information
├── advertise.html           # Advertising opportunities
├── archive.html             # Digital archive access
├── contact.html             # Contact information
├── get-involved.html        # Staff recruitment
├── index.html               # Homepage
├── order.html               # Yearbook ordering
├── portraits.html           # Portrait information
├── privacy.html             # Privacy policy
├── sneakpeek.html           # Yearbook preview
└── staff.html               # Staff information
```

## 🎨 Design System

### Color Palette (CSS Custom Properties)

The design system uses Indiana University's official brand colors:

```css
:root {
  /* Indiana University Brand Colors */
  --iu-red: #990000;           /* Primary brand color */
  --iu-red-dark: #6D0808;      /* Darker variant for gradients */
  --iu-cream: #F8EFE2;         /* Light background/accent */
  --iu-cream-dark: #F5E3CC;    /* Darker cream variant */
  --iu-light-gray: #EEEEF0;    /* Light borders/backgrounds */
  --iu-dark-gray: #B9C1C6;     /* Medium gray */
  --iu-white: #FFFFFF;         /* Pure white */
  --iu-black: #072332;         /* Primary text color */
}
```

### Typography System

**Primary Font:**
- **Sans-serif**: Inter (headings, body text, UI elements)
  - Weights: 300, 400, 500, 600, 700

**Font Hierarchy:**
```css
h1 { font-size: 2.5rem; font-weight: 700; }  /* Page titles */
h2 { font-size: 2rem; font-weight: 600; }    /* Section headers */
h3 { font-size: 1.75rem; font-weight: 600; } /* Subsection headers */
h4 { font-size: 1.5rem; font-weight: 600; }  /* Card titles */
h5 { font-size: 1.25rem; font-weight: 600; } /* Small headers */
h6 { font-size: 1.125rem; font-weight: 600; } /* Minor headers */
```

### Component Library

**Buttons:**
- `.btn-primary` - Red background, cream text
- `.btn-light` - Cream background, red text
- Hover states with shadow effects

**Cards:**
- `.card-filled` - White background with subtle shadow
- Consistent padding and border radius

**Utility Classes:**
- Color utilities: `.text-iu-red`, `.bg-iu-cream`, etc.
- Responsive typography: `.text-responsive-xl`, `.text-responsive-2xl`
- Screen reader only: `.sr-only`

### Spacing & Layout
- **Border Radius**: `0.375rem` (6px)
- **Transition Speed**: `0.3s`
- **Shadows**: Three levels (sm, md, lg)
- **Max Width**: `80rem` (1280px) for content containers

## 🌐 Web Page Structure

### Navigation Structure
```
Home (index.html)
├── Order Now (order.html)
├── Gallery
│   ├── Sneak Peek (sneakpeek.html)
│   ├── Portraits (portraits.html)
│   └── Archive (archive.html)
├── Opportunities
│   ├── Get Involved (get-involved.html)
│   └── Advertise (advertise.html)
├── About
│   ├── Organization (about.html)
│   └── Staff (staff.html)
└── Contact (contact.html)
```

### Page Templates

**Standard Page Structure:**
1. **Header** - Navigation bar (loaded via partial)
2. **Hero Section** - Page title with gradient background
3. **Main Content** - Page-specific content sections
4. **Footer** - Contact info and links (loaded via partial)

**Homepage Special Features:**
- Enhanced hero with 3D book mockup
- Auto-scrolling archive gallery
- Editor-in-chief spotlight
- Call-to-action sections

### Responsive Breakpoints
- **Mobile**: < 768px
- **Tablet**: 768px - 1023px
- **Desktop**: ≥ 1024px

## ⚡ Features & Functionality

### Navigation System
- **Responsive Design**: Mobile-first approach
- **Accessibility**: ARIA labels, keyboard navigation, screen reader support
- **Dropdown Menus**: Hover and click interactions
- **Mobile Menu**: Slide-out navigation with overlay
- **Focus Management**: Proper focus trapping and restoration

### Interactive Elements
- **Auto-scrolling Archive Gallery**: Continuous horizontal scroll animation
- **3D Book Effects**: CSS transforms for yearbook covers
- **Smooth Scrolling**: Anchor link navigation
- **Dynamic Page Titles**: JavaScript-powered title updates

### Content Management
- **Partial Loading**: Navbar and footer loaded via JavaScript
- **Error Handling**: Graceful fallbacks for missing images
- **SEO Optimization**: Meta tags, Open Graph, Twitter Cards

### Archive Integration
- **Issuu Embed**: Digital yearbook viewer
- **External Links**: Archive access via issuu.com
- **Research Support**: Information for researchers and alumni

## 🚀 Deployment Guide

### Prerequisites
- Web server (Apache, Nginx, or similar)
- HTTPS certificate (recommended)
- Domain name pointing to server

### Deployment Steps

1. **Upload Files**
   ```bash
   # Upload all files to web server root directory
   scp -r * user@server:/var/www/html/
   ```

2. **Configure Web Server**
   ```nginx
   # Nginx configuration example
   server {
       listen 80;
       server_name iuyearbook.com www.iuyearbook.com;
       root /var/www/html;
       index index.html;

       # Enable gzip compression
       gzip on;
       gzip_types text/css application/javascript;

       # Cache static assets
       location ~* \.(css|js|png|jpg|jpeg|gif|svg)$ {
           expires 1y;
           add_header Cache-Control "public, immutable";
       }
   }
   ```

3. **SSL Configuration** (Recommended)
   ```bash
   # Using Let's Encrypt
   certbot --nginx -d iuyearbook.com -d www.iuyearbook.com
   ```

4. **Test Deployment**
   - Verify all pages load correctly
   - Test responsive design on mobile devices
   - Check navigation functionality
   - Validate external links

### Environment Variables
No environment variables required - this is a static site.

### CDN Considerations
- Consider using a CDN for global performance
- Ensure external dependencies (Google Fonts, Tailwind) load reliably
- Monitor Issuu embed performance

## 🔧 Maintenance Guide

### Regular Maintenance Tasks

**Weekly:**
- Check for broken external links
- Monitor site performance
- Review contact form submissions (if implemented)

**Monthly:**
- Update yearbook information (current year, pricing)
- Review and update staff information
- Check archive links and Issuu integration

**Annually:**
- Update year references (2026 → 2027)
- Review and update content for new academic year
- Archive old yearbook information
- Update staff photos and bios

### Content Updates

**Updating Year Information:**
1. Search for "2026" across all HTML files
2. Update to current year
3. Update pricing if changed
4. Update shipping dates

**Adding New Staff Members:**
1. Update `staff.html` with new member information
2. Add photos to `images/` directory
3. Update contact information if needed

**Archive Updates:**
1. Coordinate with Issuu for new yearbook uploads
2. Update archive links if needed
3. Test embedded viewer functionality

### Performance Monitoring

**Key Metrics to Monitor:**
- Page load times
- Mobile responsiveness
- External dependency availability
- Archive viewer functionality

**Tools for Monitoring:**
- Google PageSpeed Insights
- GTmetrix
- Browser developer tools
- Mobile device testing

### Backup Strategy
- Regular file backups of entire site
- Version control (Git) for code changes
- Document all content updates
- Backup contact information and forms

## 👨‍💻 Development Guidelines

### Code Standards

**HTML:**
- Use semantic HTML5 elements
- Include proper ARIA labels for accessibility
- Validate markup with W3C validator
- Use consistent indentation (2 spaces)

**CSS:**
- Follow BEM methodology for custom classes
- Use CSS custom properties for theming
- Mobile-first responsive design
- Comment complex CSS rules

**JavaScript:**
- Use modern ES6+ features
- Implement proper error handling
- Follow accessibility guidelines
- Comment complex functionality

### File Organization
- Keep related files together
- Use descriptive file names
- Maintain consistent directory structure
- Document any special configurations

### Testing Checklist
- [ ] All pages load without errors
- [ ] Navigation works on all devices
- [ ] External links function correctly
- [ ] Archive viewer loads properly
- [ ] Contact information is current
- [ ] Mobile responsiveness verified
- [ ] Accessibility standards met

### Browser Testing
Test on the following browsers:
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 📞 Contact Information

### Development Team
- **Design**: Sky Angeles ([GitHub](https://github.com/s4ngl))
- **Organization**: Arbutus Yearbook Staff

### Arbutus Yearbook
- **Email**: arbutuseditor@idsnews.com
- **Phone**: 812-855-9737
- **Address**: 601 E. Kirkwood Ave., Bloomington, IN 47405
- **Website**: https://www.iuyearbook.com

### Indiana University Student Media
- **Advertising**: advertise@idsnews.com
- **Advertising Phone**: 812-855-0763
- **Location**: Franklin Hall, Room 129

### Technical Support
For technical issues with the website:
1. Check this README for common solutions
2. Contact the development team
3. Escalate to Indiana University IT if needed

---

**Last Updated**: January 2025
**Version**: 1.0
**Maintained by**: Arbutus Yearbook Staff
