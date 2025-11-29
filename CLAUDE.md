# Pensanta Website Enhancement Project

## Project Overview
Professional project management consultancy website with bilingual support (Spanish/English), focusing on minimal design, accessibility, and performance.

## Design System

### Core Philosophy
- **Mobile-first**: Design for mobile, enhance for larger screens
- **Semantic-first**: HTML5 elements over divs/spans
- **Minimal CSS**: Only essential styles, no bloat
- **Dark-theme default**: Modern, professional appearance
- **Accessibility-first**: WCAG 2.1 AA compliance minimum
- **Performance-focused**: Fast loading, minimal resources

### Color Palette
```css
:root {
  /* Primary Colors */
  --color-background: #000000;
  --color-surface: #111111;
  --color-surface-elevated: #222222;
  
  /* Text Colors */
  --color-text-primary: #ffffff;
  --color-text-secondary: #e0e0e0;
  --color-text-muted: #a0a0a0;
  
  /* Accent Colors */
  --color-accent: #4a9eff;
  --color-accent-hover: #2980ff;
  --color-success: #00d084;
  --color-warning: #ffb800;
  --color-error: #ff5722;
  
  /* Border Colors */
  --color-border-primary: #404040;
  --color-border-secondary: #606060;
}
```

### Spacing System (rem-based)
```css
:root {
  --space-xs: 0.25rem;    /* 4px */
  --space-sm: 0.5rem;     /* 8px */
  --space-md: 1rem;       /* 16px */
  --space-lg: 1.5rem;     /* 24px */
  --space-xl: 2rem;       /* 32px */
  --space-2xl: 3rem;      /* 48px */
  --space-3xl: 4rem;      /* 64px */
}
```

### Typography Scale
```css
:root {
  --font-family-primary: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", sans-serif;
  --font-family-mono: "SF Mono", "Monaco", "Inconsolata", "Fira Code", "Droid Sans Mono", monospace;
  
  --font-size-xs: 0.75rem;   /* 12px */
  --font-size-sm: 0.875rem;  /* 14px */
  --font-size-base: 1rem;    /* 16px */
  --font-size-lg: 1.125rem;  /* 18px */
  --font-size-xl: 1.25rem;   /* 20px */
  --font-size-2xl: 1.5rem;   /* 24px */
  --font-size-3xl: 2rem;     /* 32px */
  --font-size-4xl: 2.5rem;   /* 40px */
  
  --line-height-tight: 1.25;
  --line-height-normal: 1.5;
  --line-height-relaxed: 1.75;
}
```

### Border Radius System
```css
:root {
  --radius-sm: 0.25rem;    /* 4px */
  --radius-md: 0.5rem;     /* 8px */
  --radius-lg: 1rem;       /* 16px */
  --radius-xl: 1.5rem;     /* 24px */
  --radius-full: 9999px;   /* Full rounded */
}
```

## Semantic HTML Guidelines

### Required Elements
- `<header>` with proper `role="banner"`
- `<nav>` with `role="navigation"` and `aria-label`
- `<main>` with `role="main"` and `id="main-content"`
- `<section>` for distinct content areas with headings
- `<footer>` with `role="contentinfo"`

### Accessibility Requirements
- Skip navigation links
- Proper heading hierarchy (h1 → h2 → h3)
- ARIA labels for interactive elements
- Focus management and keyboard navigation
- Color contrast ratio 4.5:1 minimum
- Alternative text for images
- Form labels and descriptions

## Performance Standards

### Core Web Vitals Targets
- **LCP (Largest Contentful Paint)**: < 2.5s
- **FID (First Input Delay)**: < 100ms
- **CLS (Cumulative Layout Shift)**: < 0.1

### Optimization Strategies
- Minimize CSS and eliminate unused styles
- Optimize images (WebP format, proper sizing)
- Use system fonts to avoid font loading delays
- Implement critical CSS inlining
- Minimize JavaScript usage

## Browser Support
- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Mobile Safari (iOS 14+)
- Chrome Mobile (Android 10+)

## Tech Stack

### Frontend
- **HTML5**: Semantic markup with proper ARIA attributes
- **CSS3**: Custom properties (CSS variables), modern layouts (Flexbox)
- **JavaScript**: Minimal - only for Font Awesome lazy loading and language redirect
- **Icons**: Font Awesome 6.5.1 (CDN with preload optimization)

### Development Tools
- **Package Manager**: pnpm
- **Dev Server**: http-server (port 3098)
- **CSS Optimization**: PurgeCSS (for removing unused styles)
- **Testing/Automation**: Puppeteer (for browser automation and testing)

### Deployment
- Static site (no build process required)
- SEO configured with robots.txt, sitemap.xml, and Bing verification
- Spanish as default language with auto-redirect from root

## File Organization
```
/
├── index.html (redirects to /es/)
├── en/
│   ├── index.html
│   ├── about-me.html
│   ├── portfolio.html
│   └── tools/
│       ├── index.html
│       └── aiql/
├── es/
│   ├── index.html
│   ├── about-me.html
│   ├── portfolio.html
│   └── tools/
│       ├── index.html
│       └── aiql/
├── css/
│   └── styles.css (comprehensive stylesheet with design tokens)
├── img/
│   ├── *.webp (optimized images)
│   ├── *.png (legacy images)
│   └── *.svg (icons and graphics)
├── assets/
│   ├── *.pdf (CVs, certificates, documents)
│   └── doNotScan/ (excluded from search indexing)
├── robots.txt
├── sitemap.xml
├── BingSiteAuth.xml
├── package.json (dev dependencies: http-server, puppeteer, purgecss)
└── pnpm-lock.yaml
```

## Implementation Status

### ✅ Completed (Phase 1 - Foundation)
- [x] Semantic HTML across both language versions with proper ARIA roles
- [x] Comprehensive accessibility features (skip links, keyboard nav, screen reader support)
- [x] CSS custom properties for all design tokens
- [x] Mobile-first responsive design with multiple breakpoints
- [x] Dark theme implementation with high-contrast mode support
- [x] Reduced motion preferences support
- [x] SEO metadata consistency across pages (Open Graph, Twitter Cards, Schema.org)
- [x] Language alternates and canonical URLs
- [x] Performance optimizations (hardware acceleration, font rendering)

### ✅ Completed (Phase 2 - Polish)
- [x] Micro-interactions (breathing animations, hover effects, transitions)
- [x] Advanced responsive breakpoints (mobile, tablet, desktop, large desktop)
- [x] Touch device optimizations
- [x] Landscape orientation handling
- [x] Forced colors mode support

### 🔄 Potential Enhancements (Optional)
1. **Performance Optimizations**
   - Implement critical CSS inlining for above-the-fold content
   - Replace Font Awesome CDN with local SVG icons
   - Convert remaining PNG images to WebP format
   - Implement service worker for offline functionality

2. **Advanced Features**
   - Advanced analytics and tracking integration
   - A/B testing capabilities
   - Progressive Web App (PWA) manifest
   - Automated accessibility testing in CI/CD

3. **Content Additions**
   - Portfolio page content implementation
   - Tools section expansion
   - Blog or articles section

## Page Structure

### Landing Page (`/en/index.html`, `/es/index.html`)
- Professional introduction
- Key value proposition (Program/Project/Product Management)
- Primary navigation to About Me page
- Contact links (Email, WhatsApp, LinkedIn, X/Twitter, GitHub)
- Language switcher

### About Me Page (`/en/about-me.html`, `/es/about-me.html`)
- Detailed professional background
- Notable projects (MovilBA, Ecbici, $480M tender)
- Technical expertise (Full-stack development, SAFe RTE)
- Unique background (Registered Nurse)
- Certifications section with downloadable PDFs
- CV download link
- Full contact section

### Portfolio Page (`/en/portfolio.html`, `/es/portfolio.html`)
- Project showcase (content to be implemented)

### Tools Section (`/en/tools/`, `/es/tools/`)
- Index page with tools listing
- AIQL tool subdirectory

## Code Quality Standards

### CSS
- Use CSS custom properties for all design tokens
- Follow BEM methodology for class naming
- Group related styles logically
- Use progressive enhancement approach
- Minimize specificity conflicts

### HTML
- Validate against HTML5 standards
- Ensure semantic meaning over visual appearance
- Use appropriate ARIA attributes
- Maintain consistent indentation (2 spaces)
- Include proper meta tags and structured data

### General
- Mobile-first responsive design
- Progressive enhancement over graceful degradation
- Performance budget: < 100KB initial page load
- Accessibility testing with screen readers
- Cross-browser testing on target browsers

## Testing Checklist

### Accessibility
- [x] Semantic HTML with proper ARIA roles implemented
- [x] Keyboard navigation functionality (skip links, focus management)
- [x] Color contrast ratios verified (exceeds WCAG AA 4.5:1)
- [x] Focus indicator visibility implemented
- [x] ARIA attributes added to interactive elements
- [ ] Screen reader testing (NVDA, JAWS, VoiceOver) - manual testing recommended
- [ ] Automated accessibility audit (axe, WAVE, Lighthouse)

### Performance
- [x] Performance optimizations implemented (GPU acceleration, font rendering)
- [x] System fonts used (no external font loading)
- [x] Image formats optimized (WebP primary, PNG legacy)
- [x] CSS organized with no unused design tokens
- [ ] Lighthouse audit score validation
- [ ] WebPageTest analysis
- [ ] Critical CSS extraction and inlining
- [ ] PurgeCSS execution to remove unused styles

### Compatibility
- [x] Responsive design tested across breakpoints
- [x] High contrast mode support (@media prefers-contrast)
- [x] Reduced motion preferences (@media prefers-reduced-motion)
- [x] Forced colors mode support
- [x] Touch device optimizations
- [ ] Cross-browser testing on all target browsers
- [ ] Physical mobile device testing (iOS, Android)
- [ ] Print stylesheet validation

## Deployment Considerations
- Use semantic versioning for releases
- Implement proper caching strategies
- Ensure HTTPS certificate validity
- Monitor Core Web Vitals in production
- Regular accessibility audits

---
*This document serves as the source of truth for all design and development decisions on the elazarpimentel.com website project.*

**Last Updated:** 2025-11-29 - Synchronized with actual implementation