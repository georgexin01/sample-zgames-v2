# SUPERONG - Design System & Specifications

## Color Palette (Theme Colors)

```
Primary Color:     #6c5ce7 (Purple/Violet)
Primary Dark:      #5b4cdb (Dark Purple)
Secondary Color:   #00cec9 (Teal/Cyan)
Accent Color:      #fd79a8 (Pink/Rose)
Dark Color:        #2d3436 (Charcoal)
Light Color:       #f5f6fa (Off-white)
Gray Color:        #636e72 (Gray)
White Color:       #ffffff (White)
Success Color:     #00b894 (Green)
Danger Color:      #d63031 (Red)
Warning Color:     #fdcb6e (Yellow/Orange)
```

## Typography

```
Font Family:       Poppins, sans-serif
Base Font Size:    14px
Line Height:       1.6
Font Weights:      400 (regular), 500 (medium), 600 (semibold), 700 (bold)
```

## Border Radius (Rounded Corners)

```
Radius Small:      8px
Radius Medium:     12px
Radius Large:      16px
Radius Full:       50px (for circular elements)
```

## Spacing & Sizing

```
Section Padding:   40px (top/bottom)
Container Gap:     15-20px
Card Padding:      15px
Button Padding:    10px 20px
Element Spacing:   8px, 10px, 15px, 20px, 25px
```

## Shadow Effects

```
Shadow Small:      0 2px 4px rgba(0,0,0,0.08)
Shadow Medium:     0 4px 12px rgba(0,0,0,0.1)
Shadow Large:      0 8px 24px rgba(0,0,0,0.12)
```

## Responsive Breakpoints

```
Mobile (< 576px):       Extra small devices
Tablet (576-991px):     Small to medium devices
Desktop (≥992px):       Large devices
```

## Component Dimensions

### Header

- Height: ~60px (sticky)
- Logo Height: 40px
- Logo Mobile: 32px
- Logo Width: auto (aspect ratio preserved)

### Banner/Slider

- Height: 200-250px (mobile responsive)
- Image Cover: object-fit: cover
- Overlay Opacity: rgba(0,0,0,0.3-0.5)

### Cards

- Image Height: 180px
- Padding: 15px
- Hover Effect: translateY(-3px), shadow elevation

### Feature Icons

- Icon Size: 48-64px
- Label Font Size: 11-12px
- Label Color: #2d3436 or #636e72

### Buttons

- Height: ~40px
- Min Width: 80px
- Border Radius: 8px
- Font Weight: 500

### Footer

- Padding: 50px 0 30px (desktop), 30px 0 20px (mobile)
- Background: #2d3436
- Text Color: rgba(255,255,255,0.8)
- Link Hover Color: #00cec9

### Mobile Bottom Navigation

- Height: 60-70px (fixed)
- Icon Size: 1.2rem
- Center Button: 50px diameter, #6c5ce7

## Image Assets Locations

```
Game Icons:        /resource/game-icons/
UI Elements:       /resource/ui-elements/
Icons:             /resource/icons/
Main Resources:    /resource/main/
Backgrounds:       /resource/main/
Sample Images:     /resource/sample/ (77 reference designs)
```

## Layout Patterns

### Grid Layout (Multi-column cards)

- Desktop: 4 columns (25% width each)
- Tablet: 3 columns (33.33% width each)
- Mobile: 2 columns (50% width each) or 1 column
- Gap: 15-20px

### Flex Layout (Feature bars, menus)

- Direction: row (horizontal) or column (vertical)
- Align Items: center
- Justify Content: space-between or center
- Gap: 10-15px

### Section Spacing

- Margin Top: 40px
- Margin Bottom: 40px
- Padding Top: 20px (inside container)
- Padding Bottom: 20px (inside container)

## Navigation Elements

### Header Navigation

- Background: linear-gradient(135deg, #6c5ce7, #5b4cdb)
- Position: sticky, z-index: 1000
- Links: white color with 0.9 opacity, hover background rgba(255,255,255,0.15)

### Mobile Bottom Navigation

- Position: fixed bottom
- Z-index: 999
- Background: white
- Icons have labels below
- Center icon is highlighted

### Breadcrumb/Page Title

- Font Size: 1.8rem (desktop), 1.4rem (mobile)
- Font Weight: 700
- Color: #2d3436
- Margin Bottom: 20px

## Form Elements

- Border Radius: 8px
- Padding: 12px 16px
- Border: 1px solid #dfe6e9
- Focus: border #6c5ce7, shadow rgba(108, 92, 231, 0.1)
- Label Font Weight: 500

## Special Elements

### Point/Balance Bar

- Background: white or light color
- Text Color: #2d3436
- Font Weight: 600
- Icon/Dropdown: #636e72
- Height: 50-60px
- Padding: 10-15px

### Notification/Alert

- Success: #00b894
- Warning: #fdcb6e
- Danger: #d63031
- Border Radius: 8px
- Padding: 12px 16px

## Transitions & Animations

- Standard Transition: all 0.3s ease
- Hover Transform: translateY(-3px)
- Loading Spinner: 360deg rotation, 0.8s linear infinite

## Mobile Optimization

- Safe area padding for notched devices
- Touch target size: 40-50px minimum
- Bottom navigation spacer: 80px (to avoid content overlap)
- Font size adjustments for mobile readability

## WhatsApp Floating Button

- Position: fixed, bottom 90px, right 20px
- Size: 55x55px (mobile: 50x50px)
- Background: #25D366
- Hover: #128C7E
- Z-index: 998
