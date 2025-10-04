const puppeteer = require('puppeteer');
const fs = require('fs');

async function analyzeStyles() {
  const browser = await puppeteer.launch();
  const page = await browser.newPage();

  // Change this to your local server URL
  await page.goto('http://localhost:8000/es/');

  // Get viewport info
  const viewportInfo = await page.evaluate(() => {
    return {
      scrollY: window.scrollY,
      bodyOffsetTop: document.body.offsetTop,
      bodyClientTop: document.body.clientTop,
      htmlMargin: window.getComputedStyle(document.documentElement).margin,
      bodyMargin: window.getComputedStyle(document.body).margin
    };
  });

  // Extract computed styles for all elements
  const styleData = await page.evaluate(() => {
    const elements = document.querySelectorAll('*');
    const results = [];

    elements.forEach((el) => {
      const computed = window.getComputedStyle(el);
      const rect = el.getBoundingClientRect();

      // Build a useful selector
      let selector = el.tagName.toLowerCase();
      if (el.id) selector += `#${el.id}`;
      if (el.className && typeof el.className === 'string') {
        const classes = el.className.trim().split(/\s+/).join('.');
        if (classes) selector += `.${classes}`;
      }

      // Get matched CSS rules
      const matchedRules = [];
      const sheets = Array.from(document.styleSheets);

      sheets.forEach(sheet => {
        try {
          const rules = Array.from(sheet.cssRules || sheet.rules || []);
          rules.forEach(rule => {
            if (rule.selectorText && el.matches(rule.selectorText)) {
              const ruleStyles = {};
              Array.from(rule.style).forEach(prop => {
                ruleStyles[prop] = rule.style[prop];
              });
              matchedRules.push({
                selector: rule.selectorText,
                styles: ruleStyles,
                href: sheet.href || 'inline'
              });
            }
          });
        } catch (e) {
          // CORS or other errors, skip
        }
      });

      results.push({
        selector,
        tag: el.tagName.toLowerCase(),
        text: el.textContent?.trim().substring(0, 50) || '',
        position: {
          top: rect.top,
          left: rect.left,
          width: rect.width,
          height: rect.height
        },
        computedStyles: {
          // Box model
          margin: computed.margin,
          marginTop: computed.marginTop,
          marginRight: computed.marginRight,
          marginBottom: computed.marginBottom,
          marginLeft: computed.marginLeft,
          padding: computed.padding,
          paddingTop: computed.paddingTop,
          paddingRight: computed.paddingRight,
          paddingBottom: computed.paddingBottom,
          paddingLeft: computed.paddingLeft,
          border: computed.border,
          borderTop: computed.borderTop,
          borderRight: computed.borderRight,
          borderBottom: computed.borderBottom,
          borderLeft: computed.borderLeft,

          // Typography
          fontSize: computed.fontSize,
          fontFamily: computed.fontFamily,
          fontWeight: computed.fontWeight,
          lineHeight: computed.lineHeight,

          // Colors
          color: computed.color,
          backgroundColor: computed.backgroundColor,

          // Layout
          display: computed.display,
          position: computed.position,
          top: computed.top,
          right: computed.right,
          bottom: computed.bottom,
          left: computed.left,
          width: computed.width,
          height: computed.height,
          flex: computed.flex,
          flexDirection: computed.flexDirection,
          gap: computed.gap,
          justifyContent: computed.justifyContent,
          alignItems: computed.alignItems
        },
        matchedCSSRules: matchedRules
      });
    });

    return results;
  });

  // Save to JSON file for LLM analysis
  const output = {
    timestamp: new Date().toISOString(),
    url: 'http://localhost:8000/es/',
    viewportInfo,
    totalElements: styleData.length,
    elements: styleData
  };

  fs.writeFileSync('style-analysis.json', JSON.stringify(output, null, 2));
  console.log(`✓ Analysis complete! Found ${styleData.length} elements.`);
  console.log('✓ Results saved to style-analysis.json');

  await browser.close();
}

analyzeStyles().catch(err => {
  console.error('Error:', err);
  process.exit(1);
});
