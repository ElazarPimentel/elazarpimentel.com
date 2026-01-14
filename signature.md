# Footer Signature - ElazarPimentel.com

Standard footer credit for sites built by Elazar Pimentel.

## Important: Link Attributes

**DO NOT add `rel="noopener noreferrer"` to the signature link.**

The link should allow:
- **Referrer**: So ElazarPimentel.com can see traffic sources in analytics
- **Opener**: Standard link behavior

---

## Text

```
Diseño y Desarrollo: ElazarPimentel.com
```

---

## SVG Icon (Layers/Stack)

```svg
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
  <path d="M12 2L2 7l10 5 10-5-10-5z" />
  <path d="M2 17l10 5 10-5M2 12l10 5 10-5" />
</svg>
```

---

## HTML

Structure: `<small>` wraps SVG + text, only domain is linked.

```html
<small>
  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
    <path d="M12 2L2 7l10 5 10-5-10-5z" />
    <path d="M2 17l10 5 10-5M2 12l10 5 10-5" />
  </svg>
  Diseño y Desarrollo: <a href="https://elazarpimentel.com" target="_blank">ElazarPimentel.com</a>
</small>
```

---

## TSX (React/Next.js)

```tsx
<small className={styles.signature}>
  <svg
    width="16"
    height="16"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    strokeWidth="2"
  >
    <path d="M12 2L2 7l10 5 10-5-10-5z" />
    <path d="M2 17l10 5 10-5M2 12l10 5 10-5" />
  </svg>
  Diseño y Desarrollo:{" "}
  <a href="https://elazarpimentel.com" target="_blank">
    ElazarPimentel.com
  </a>
</small>
```

---

## CSS

```css
/* Footer signature - pill/badge style */
footer small {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.5rem 1rem;
  background: linear-gradient(135deg, #3a3a3a 0%, #2d2d2d 100%);
  border: 1px solid #505050;
  border-radius: 2rem;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3),
    inset 0 1px 0 rgba(255, 255, 255, 0.1);
  font-size: 0.875rem;
  font-weight: 500;
  color: #b3b3b3;
  transition: all 0.3s ease;
}

footer small:hover {
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4),
    inset 0 1px 0 rgba(255, 255, 255, 0.15);
  border-color: #606060;
}

footer small svg {
  flex-shrink: 0;
  opacity: 0.8;
}

footer small a {
  color: #e0e0e0;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.2s ease;
}

footer small a:hover {
  color: white;
  text-shadow: 0 0 8px rgba(255, 255, 255, 0.3);
}
```

---

## SCSS Module (React/Next.js)

```scss
.signature {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.5rem 1rem;
  background: linear-gradient(135deg, #3a3a3a 0%, #2d2d2d 100%);
  border: 1px solid #505050;
  border-radius: 2rem;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3),
    inset 0 1px 0 rgba(255, 255, 255, 0.1);
  font-size: 0.875rem;
  font-weight: 500;
  color: #b3b3b3;
  transition: all 0.3s ease;

  &:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4),
      inset 0 1px 0 rgba(255, 255, 255, 0.15);
    border-color: #606060;
  }

  svg {
    flex-shrink: 0;
    opacity: 0.8;
  }

  a {
    color: #e0e0e0;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.2s ease;

    &:hover {
      color: white;
      text-shadow: 0 0 8px rgba(255, 255, 255, 0.3);
    }
  }
}
```

---

## Light Theme Variant

For light theme sites, adjust colors:

```css
footer small {
  background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
  border: 1px solid #d0d0d0;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.8);
  color: #666666;
}

footer small:hover {
  border-color: #b0b0b0;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15),
    inset 0 1px 0 rgba(255, 255, 255, 0.9);
}

footer small a {
  color: #333333;
}

footer small a:hover {
  color: #000000;
  text-shadow: none;
}
```

---

## Notes for CCS

1. Use `<small>` element as wrapper (semantic, indicates fine print)
2. SVG icon is the "layers/stack" icon - NOT code brackets
3. Only "ElazarPimentel.com" is wrapped in `<a>`, not the whole text
4. NO `rel="noopener noreferrer"` - we want referrer data
5. Pill/badge style with gradient background and rounded corners
6. Hover effect lifts the badge slightly (`translateY(-2px)`)

---

**Last Updated**: 2026-01-10
