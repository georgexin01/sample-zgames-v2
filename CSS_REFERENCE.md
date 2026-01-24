# SUPERONG - CSS Quick Reference Guide

## Color Variables (All Available)

```css
/* ===== PRIMARY COLORS ===== */
--sp-purple-darkest: #1a1a2e; /* Darkest */
--sp-purple-dark: #2d2d5a; /* Dark */
--sp-purple-medium: #3d3d7a; /* Medium (MAIN) */
--sp-purple-light: #4a4a8a; /* Light */
--sp-purple-accent: #6b6bb5; /* Accent */

/* ===== GOLD/ORANGE (ACCENT) ===== */
--sp-gold: #d4a84b; /* Main gold */
--sp-gold-light: #e5c16e; /* Light gold */
--sp-gold-dark: #b8923f; /* Dark gold */
--sp-orange: #f39c12; /* Orange */
--sp-orange-dark: #e67e22; /* Dark orange */

/* ===== BACKGROUNDS ===== */
--sp-bg-primary: #1a1a2e;
--sp-bg-secondary: #16213e;
--sp-bg-dark: #0f0f1a;
--sp-bg-card: #252542;
--sp-bg-input: #1e1e3a;
--sp-bg-white: #ffffff;
--sp-bg-light: #f5f5f5;

/* ===== STATUS COLORS ===== */
--sp-success: #2ecc71; /* Green */
--sp-warning: #f39c12; /* Yellow/Orange */
--sp-error: #e74c3c; /* Red */
--sp-info: #3498db; /* Blue */

/* ===== TEXT COLORS ===== */
--sp-text-white: #ffffff;
--sp-text-light: #e0e0e0;
--sp-text-muted: #9999aa; /* Light gray text */
--sp-text-dark: #333333;
--sp-text-gold: #d4a84b;

/* ===== SHADOWS ===== */
--sp-shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.2);
--sp-shadow-md: 0 4px 12px rgba(0, 0, 0, 0.3);
--sp-shadow-lg: 0 8px 24px rgba(0, 0, 0, 0.4);
```

---

## Button Classes

### Primary Button

```html
<button class="sp-btn-primary">Click Me</button>
<button class="sp-btn-primary sp-btn-large">Large Button</button>
<button class="sp-btn-primary sp-btn-small">Small Button</button>
<button class="sp-btn-primary sp-btn-block">Full Width</button>
```

CSS: `gradient(#f5a623 → #e8851c), padding varies, gold text`

### Secondary Button

```html
<button class="sp-btn-secondary">Click Me</button>
```

CSS: `transparent bg, gold border & text`

---

## Card Components

### Game Card

```html
<a href="#" class="sp-game-card">
  <div class="sp-game-image">
    <img src="..." alt="" />
    <span class="sp-game-badge">HOT</span>
  </div>
  <div class="sp-game-body">
    <div class="sp-game-name">Game Name</div>
    <div class="sp-game-meta">
      <span class="sp-game-rating"> <i class="fas fa-star"></i> 4.8 </span>
    </div>
  </div>
</a>
```

Dimensions: 50% width (2 columns), aspect 0.85

### Category Card

```html
<a href="#" class="sp-category-card">
  <img src="..." alt="" />
  <div class="sp-category-overlay">
    <div class="sp-category-name">Category</div>
    <div class="sp-category-count">128 款</div>
  </div>
</a>
```

Dimensions: 33.33% width (3 columns), square

### Promo Card

```html
<a href="#" class="sp-promo-card">
  <img src="..." alt="" />
  <span class="sp-promo-label">HOT</span>
</a>
```

Dimensions: 25% width (4 columns), square

### List Item

```html
<a href="#" class="sp-list-item">
  <div class="sp-list-icon">
    <i class="fas fa-icon"></i>
  </div>
  <div class="sp-list-content">
    <div class="sp-list-title">Title</div>
    <div class="sp-list-desc">Description</div>
  </div>
  <div class="sp-list-arrow">
    <i class="fas fa-chevron-right"></i>
  </div>
</a>
```

---

## Section Titles

```html
<h2 class="sp-section-title">Section Title</h2>
```

Styling: 16px, bold, dark color, left border (4px gold)

---

## Badges & Labels

### Game Badge

```html
<span class="sp-game-badge">HOT</span>
```

Gold background, positioned top-left

### Promo Label

```html
<span class="sp-promo-label">HOT</span>
```

Positioned bottom

### Status Badge

```html
<span class="sp-badge">Text</span>
<span class="sp-badge sp-badge-success">Success</span>
<span class="sp-badge sp-badge-error">Error</span>
```

---

## Form Elements

### Text Input

```html
<input class="sp-form-input" type="text" placeholder="..." />
```

Height: 48px, padding: 12px 16px, radius: 8px

### Select Dropdown

```html
<select class="sp-form-input">
  <option>Option 1</option>
</select>
```

### Textarea

```html
<textarea class="sp-form-textarea" placeholder="..."></textarea>
```

Min height: 100px

### Checkbox

```html
<label class="sp-form-checkbox">
  <input type="checkbox" />
  Label text
</label>
```

### Radio

```html
<label class="sp-form-checkbox">
  <input type="radio" name="group" />
  Label text
</label>
```

---

## Navigation

### Tab Navigation

```html
<div class="sp-tab-bar">
  <a href="#" class="sp-tab-item active">Tab 1</a>
  <a href="#" class="sp-tab-item">Tab 2</a>
</div>
```

Active state: Gold underline

### Feature Icons (Horizontal Scroll)

```html
<section class="sp-feature-section">
  <div class="sp-feature-scroll">
    <a href="#" class="sp-feature-item">
      <div class="sp-feature-icon">
        <i class="fas fa-icon"></i>
      </div>
      <span class="sp-feature-label">Label</span>
    </a>
  </div>
</section>
```

Icon: 50x50px, gold gradient background

---

## Sections

### Banner Section

```html
<section class="sp-banner-section">
  <div class="sp-banner-slider">
    <div class="sp-banner-slide active">
      <img src="..." alt="" />
      <div class="sp-banner-overlay">
        <span class="sp-banner-label">Label</span>
        <h3 class="sp-banner-title">Title</h3>
        <a href="#" class="sp-banner-btn">Button</a>
      </div>
    </div>
  </div>
  <div class="sp-banner-indicators">
    <span class="sp-indicator active"></span>
    <span class="sp-indicator"></span>
  </div>
</section>
```

Height: 200-220px, full width, overlay gradient

### Point Bar Section

```html
<div class="sp-point-section">
  <div class="sp-point-bar">
    <span class="sp-point-label">Label</span>
    <div class="sp-point-value-wrap">
      <span class="sp-point-value">¥ 0.00</span>
    </div>
  </div>
</div>
```

Height: 50px, gradient background

### Game Grid Section

```html
<div class="sp-game-section">
  <h2 class="sp-section-title">Title</h2>
  <div class="sp-game-grid">
    <!-- Game cards -->
  </div>
</div>
```

Grid: 2 columns, 16px gap

### Category Grid Section

```html
<div class="sp-category-section">
  <h2 class="sp-section-title">Title</h2>
  <div class="sp-category-grid">
    <!-- Category cards -->
  </div>
</div>
```

Grid: 3 columns, 12px gap

### Promo Grid Section

```html
<div class="sp-promo-section">
  <h2 class="sp-section-title">Title</h2>
  <div class="sp-promo-grid">
    <!-- Promo cards -->
  </div>
</div>
```

Grid: 4 columns, 12px gap

---

## Profile Components

### Profile Card (Header)

```html
<div class="sp-profile-card">
  <div class="sp-profile-header">
    <div class="sp-profile-avatar">P</div>
    <div class="sp-profile-info">
      <div class="sp-profile-name">Username</div>
      <div class="sp-profile-id">ID: 123456</div>
    </div>
  </div>
  <div class="sp-profile-stats">
    <div class="sp-stat-item">
      <div class="sp-stat-value">¥0.00</div>
      <div class="sp-stat-label">余额</div>
    </div>
  </div>
</div>
```

Background: Purple gradient, gold text values

---

## Utility Classes

### Text Colors

```css
.sp-text-gold       /* #d4a84b */
.sp-text-purple     /* #3d3d7a */
.sp-text-muted      /* #9999aa */
.sp-text-center     /* text-align: center */
```

### Background Colors

```css
.sp-bg-light        /* #f5f5f5 */
.sp-rounded         /* border-radius: 12px */
.sp-shadow          /* box-shadow: medium */
```

### Visibility

```css
.sp-hidden          /* display: none */
.sp-visible         /* display: block */
```

### Spacing

```css
.sp-mb-section      /* margin-bottom: 40px */
.sp-mt-section      /* margin-top: 40px */
.mobile-nav-spacer  /* height: 80px (for bottom nav) */
```

---

## Responsive Breakpoints

### Mobile (< 576px)

- Promo grid: 3 columns
- Category: 2 columns
- Games: 1 column
- Font sizes reduced

### Tablet (576-991px)

- Promo grid: 4 columns
- Category: 3 columns
- Games: 2 columns
- Standard spacing

### Desktop (≥992px)

- Promo grid: 5 columns
- Category: 4 columns
- Games: 3 columns
- Max width container

---

## Animations & Effects

### Hover Effects

```css
/* Card hover */
transform: translateY(-3px);
box-shadow: 0 8px 20px rgba(0,0,0,0.15);

/* Button hover */
transform: translateY(-2px);
box-shadow: 0 8px 20px rgba(212,168,75,0.3);

/* Icon hover */
color change only
```

### Transitions

```css
/* Standard */
all 0.3s ease;

/* Fast */
all 0.15s ease;

/* Spinner */
transform: rotate(360deg);
animation: 0.8s linear infinite;
```

---

## Common Component Combinations

### Complete Game Card Section

```html
<div class="sp-game-section">
  <h2 class="sp-section-title">热门游戏</h2>
  <div class="sp-game-grid">
    <a href="#" class="sp-game-card">
      <div class="sp-game-image">
        <img src="..." alt="" />
        <span class="sp-game-badge">HOT</span>
      </div>
      <div class="sp-game-body">
        <div class="sp-game-name">Game Name</div>
        <div class="sp-game-meta">
          <span class="sp-game-rating"> <i class="fas fa-star"></i> 4.8 </span>
          <span>1000 人</span>
        </div>
      </div>
    </a>
  </div>
</div>
```

### Complete List Section

```html
<div style="padding: 16px;">
  <h3 class="sp-section-title">标题</h3>
  <a href="#" class="sp-list-item">
    <div class="sp-list-icon">
      <i class="fas fa-icon"></i>
    </div>
    <div class="sp-list-content">
      <div class="sp-list-title">Title</div>
      <div class="sp-list-desc">Description</div>
    </div>
    <div class="sp-list-arrow">
      <i class="fas fa-chevron-right"></i>
    </div>
  </a>
</div>
```

### Complete Tab Section

```html
<div class="sp-tab-bar">
  <a href="#" class="sp-tab-item active">Tab 1</a>
  <a href="#" class="sp-tab-item">Tab 2</a>
  <a href="#" class="sp-tab-item">Tab 3</a>
</div>

<div style="padding: 16px;">
  <!-- Content here -->
</div>
```

---

## Color Combinations

### For Positive Actions

- Background: `#2ecc71` (green)
- Text: `#ffffff` (white)

### For Negative Actions

- Background: `#e74c3c` (red)
- Text: `#ffffff` (white)

### For Info/Neutral

- Background: `#3498db` (blue)
- Text: `#ffffff` (white)

### For Primary CTA

- Background: Gold gradient
- Text: `#2d2d5a` (dark)

---

## Default Spacing

```
Page padding:       16px
Section padding:    16-20px
Card padding:       12-15px
Gap between items:  12-16px
Icon spacing:       8-10px
Text spacing:       4-8px
```

---

## Typography Quick Reference

| Element       | Size    | Weight  | Color   |
| ------------- | ------- | ------- | ------- |
| Page Title    | 18px    | 700     | #2d2d5a |
| Section Title | 16px    | 700     | #2d2d5a |
| Card Title    | 14px    | 700     | #2d2d5a |
| Body Text     | 14px    | 400-500 | #2d2d5a |
| Helper Text   | 12px    | 400     | #9999aa |
| Small Text    | 10-11px | 400     | #9999aa |
| Button Text   | 14px    | 600     | #ffffff |
| Label         | 12px    | 600     | varies  |

---

**Quick tip:** Use `.sp-` prefix for all custom classes!  
**Responsive:** Mobile-first, then add `@media (min-width: 768px)`  
**Colors:** Extract from CSS variables for consistency!
