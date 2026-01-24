# AI HELPER DOCUMENT - Design Implementation Workflow

**Status:** Active Learning Guide  
**Last Updated:** January 23, 2026  
**Document Version:** 1.1

---

## PURPOSE

This document trains the AI assistant on your preferred design workflow and implementation methodology for future design requests. It ensures consistent, high-quality results (95%+ similarity to sample designs).

---

## USER'S DESIGN REQUEST WORKFLOW

### PHASE 1: DESIGN ANALYSIS

**Goal:** Extract all visual design elements from the sample image

**Process:**

1. Locate the sample image file (typically in `/lib/sample_[name].png` or `/resource/sample/`)
2. Analyze these specific elements:
   - **Background Color/Gradient:** Get hex values, gradient direction
   - **Logo:** Identify file name and location
   - **Icons:** Position, size, color, source
   - **Text:** Font size, weight, color, alignment
   - **Dimensions:** Height, width, padding, margins
   - **Visual Effects:** Shadows, borders, opacity, borders
   - **Layout:** Flexbox direction, alignment, spacing

**Questions to Answer:**

- What is the primary background color (hex code)?
- What is the gradient (if any)?
- Which logo file is used?
- What icons appear and where?
- What is the text content and styling?
- What are the exact spacing measurements?
- Are there hover effects or animations?

---

### PHASE 2: RESOURCE MAPPING

**Goal:** Find matching files in the `/resource/` folder structure

**Resource Folder Structure:**

```
/resource/
├── icons/              (chat-blue.svg, edit-blue.svg, etc.)
├── game-icons/         (game logos and banners)
├── main/               (background-blue.svg, background-orange.svg)
├── ui-elements/        (logo-white.svg, webs.svg, buttons, etc.)
└── sample/             (reference images, screenshots)
```

**Actions:**

1. Search for matching logo files by name
2. Identify icon colors and locate variants
3. Find background graphics if needed
4. Document exact file paths with relative paths
5. Note file formats (SVG, PNG, etc.)

**Example Resource Mapping:**

```
Logo: /resource/ui-elements/logo-white.svg (Height: 28px)
Icon (Language): /resource/ui-elements/webs.svg (Size: 20px)
Background: gradient linear-gradient(180deg, #3d3d7a 0%, #2a2a5a 100%)
```

---

### PHASE 3: THEME VARIABLES & CSS SETUP

**Goal:** Use existing CSS variables to avoid hardcoded values

**Available CSS Variables (from style2.css):**

```css
/* Header Styling */
--sp-header-gradient: linear-gradient(180deg, #3d3d7a 0%, #2a2a5a 100%);
--sp-header-gradient-dark: linear-gradient(180deg, #2d2d5a 0%, #1a1a2e 100%);
--sp-header-height: 56px;

/* Colors */
--sp-text-gold: #d4a84b;
--sp-text-white: #ffffff;
--sp-text-light: #e0e0e0;
--sp-text-dark: #333333;
--sp-border-gold: #d4a84b;
--sp-border-light: rgba(255, 255, 255, 0.1);

/* Spacing & Sizing */
--sp-content-padding: 16px;
--sp-card-radius: 12px;
--sp-btn-radius: 25px;

/* Effects */
--sp-shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.2);
--sp-shadow-md: 0 4px 12px rgba(0, 0, 0, 0.3);
--sp-shadow-lg: 0 8px 24px rgba(0, 0, 0, 0.4);
--sp-transition: all 0.3s ease;
```

**Principle:** Never use hardcoded colors. Always reference CSS variables first.

---

### PHASE 4: HTML STRUCTURE

**Goal:** Create semantic, accessible HTML structure

**Header Component Variants:**

#### Home Header (Featured)

```php
<header class="sp-home-header">
    <div class="sp-home-header-top">
        <div class="sp-logo-wrap">
            <img src="resource/ui-elements/logo-white.svg" class="sp-logo">
        </div>
        <div class="sp-header-actions">
            <button class="sp-lang-dropdown" id="langToggle">
                <img src="resource/ui-elements/webs.svg">
            </button>
        </div>
    </div>
    <!-- Optional: Points/Balance Bar -->
    <div class="sp-point-bar">
        <span>Points: <span id="userPoints">0</span></span>
    </div>
</header>
```

#### Inner Page Header (Standard)

```php
<header class="sp-page-header">
    <a href="javascript:history.back()" class="sp-header-back">
        <i class="fas fa-arrow-left"></i>
    </a>
    <h1 class="sp-header-title"><?php echo $pageTitle; ?></h1>
    <div class="sp-header-right">
        <!-- Optional Icon -->
        <a href="#" class="sp-header-icon-right">
            <i class="fas fa-icon-name"></i>
        </a>
    </div>
</header>
```

**Best Practices:**

- Use semantic HTML tags (`<header>`, `<h1>`, `<nav>`, etc.)
- Include proper `alt` attributes on images
- Add `title` attributes for tooltips
- Use ARIA labels for accessibility

---

### PHASE 5: CSS IMPLEMENTATION

**Goal:** Style the component to match the sample design 95%+

**Requirements:**

- ✓ Use CSS variables (no hardcoded colors)
- ✓ Mobile-first responsive design
- ✓ Flexbox for layout management
- ✓ Smooth transitions for interactions
- ✓ Match exact pixel measurements
- ✓ Support all required viewports (414px, 375px, etc.)

**Example CSS Structure:**

```css
.sp-home-header {
  background: var(--sp-header-gradient);
  height: 100px;
  padding: 12px var(--sp-content-padding);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.sp-home-header-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 40px;
}

.sp-logo {
  height: 28px;
  width: auto;
}

/* Mobile Responsive */
@media (max-width: 480px) {
  .sp-home-header {
    height: auto;
    padding: 10px var(--sp-content-padding);
  }
}
```

---

### PHASE 6: QUALITY ASSURANCE CHECKLIST

Before finalizing any design, verify ALL items:

```
VISUAL MATCH:
  ☐ Background color/gradient matches sample exactly
  ☐ Logo positioned correctly with right dimensions
  ☐ All icons visible and in correct positions
  ☐ Icon colors match sample
  ☐ Text styling matches (font size, weight, color)
  ☐ Spacing/padding matches sample pixel-perfectly
  ☐ Overall layout matches sample structure
  ☐ Visual similarity is 95%+ to sample image

CODE QUALITY:
  ☐ No hardcoded colors (all use CSS variables)
  ☐ All assets properly linked with correct paths
  ☐ Responsive on mobile (414px, 375px viewports)
  ☐ Semantic HTML used throughout
  ☐ Proper ARIA labels and alt text
  ☐ No console errors
  ☐ Clean, readable code structure

FUNCTIONALITY:
  ☐ All interactive elements working
  ☐ Hover effects smooth and visible
  ☐ Links navigating correctly
  ☐ Images loading without errors
  ☐ Cross-browser compatible (Chrome, Firefox, Safari)
  ☐ Touch-friendly on mobile devices
```

---

## WORKFLOW FOR FUTURE REQUESTS

### When User Provides New Sample Image:

1. **RECEIVE & ACKNOWLEDGE**
   - User provides `sample_[name].png`
   - Note the component being designed (header, card, footer, etc.)

2. **EXTRACT DESIGN DETAILS** (Phase 1-2)
   - Identify background color/gradient
   - Locate logo and icon files
   - Map all resources from `/resource/` folders
   - Document measurements and spacing

3. **IMPLEMENT COMPONENT** (Phase 3-5)
   - Create/update the component file
   - Use only CSS variables
   - Follow semantic HTML structure
   - Mobile-first responsive design
   - Add proper accessibility attributes

4. **VERIFY QUALITY** (Phase 6)
   - Run through complete checklist
   - Compare to sample image
   - Test on multiple viewports
   - Verify all assets load correctly

5. **ITERATE & REFINE**
   - Ask user: "Does this match your sample 95%?"
   - Adjust colors, spacing, positioning as needed
   - Repeat until user confirms satisfaction

6. **DOCUMENT COMPLETION**
   - Update this document with new design approach
   - Add example to "Implementation Examples" section
   - Note any special considerations

---

## IMPLEMENTATION EXAMPLES

### Example 1: Simple Inner Page Header

```php
<header class="sp-page-header">
    <a href="javascript:history.back()" class="sp-header-back">
        <i class="fas fa-arrow-left"></i>
    </a>
    <h1 class="sp-header-title">Profile</h1>
    <a href="profile.php?edit=1" class="sp-header-icon-right">
        <i class="fas fa-edit"></i>
    </a>
</header>
```

### Example 2: Home Header with Logo + Language Selector

```php
<header class="sp-home-header">
    <div class="sp-home-header-top">
        <img src="resource/ui-elements/logo-white.svg" class="sp-logo">
        <button class="sp-lang-dropdown" id="langToggle">
            <img src="resource/ui-elements/webs.svg" alt="Language">
        </button>
    </div>
    <div class="sp-point-bar">
        Points: <span id="userPoints">0</span> ⭐
    </div>
</header>
```

### Example 3: Custom Card Component

```php
<div class="sp-card">
    <img src="resource/sample/image.png" class="sp-card-image">
    <div class="sp-card-content">
        <h3 class="sp-card-title">Title</h3>
        <p class="sp-card-text">Description</p>
    </div>
</div>
```

---

## KEY DESIGN PRINCIPLES

1. **Color Consistency:** Always use CSS variables from style2.css
2. **Mobile First:** Design for mobile (414px) then scale up
3. **Semantic HTML:** Use proper tags for accessibility
4. **Resource Management:** Link all assets from `/resource/` folders
5. **Visual Hierarchy:** Proper spacing, sizing, and contrast
6. **Accessibility:** ARIA labels, alt text, keyboard navigation
7. **Performance:** Optimize images, minimize CSS
8. **Responsiveness:** Test on 375px, 414px, 768px, 1024px viewports

---

## ACCEPTED FILE LOCATIONS

**Components:**

- `/lib/header.php`
- `/lib/footer.php`
- `/lib/sidebar.php`

**Styles:**

- `/css/style.css` (main styles)
- `/css/style2.css` (SUPERONG theme)

**Resources:**

- `/resource/ui-elements/` (logos, icons, buttons)
- `/resource/icons/` (icon SVGs)
- `/resource/sample/` (reference images)

---

## COMMUNICATION STANDARD

**What AI Assistant Should Ask:**

- "I cannot view the PNG directly. Can you describe the header design?"
- "What is the background color (hex code)?"
- "Which icons appear in the header?"
- "What is the header layout (vertical/horizontal)?"

**What AI Assistant Should Do:**

- Show progress with visual comparisons
- Ask for feedback: "Is this 95% similar?"
- Iterate based on user feedback
- Document all decisions in this file

---

## VERSION HISTORY

| Version | Date       | Changes                                       |
| ------- | ---------- | --------------------------------------------- |
| 1.0     | 2026-01-23 | Initial workflow document created             |
| 1.1     | 2026-01-23 | Added Phase 6 checklist, examples, principles |
| -       | TBD        | Future design implementations documented here |

---

**END OF AI HELPER DOCUMENT**
