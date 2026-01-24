# RESOURCE INVENTORY - Design Elements Available

**Generated:** January 23, 2026

---

## UI-ELEMENTS FOLDER

Location: `/resource/ui-elements/`

### Logo Files

- ✅ `logo-white.svg` - White logo (28px height recommended)
- ✅ `logo-transparent.svg` - Transparent logo variant

### Icon Files (SVG)

- 🔵 `webs.svg` - Globe/Language icon (20px recommended)
- 🔵 `back.svg` - Back arrow icon
- 🔵 `close-black.svg`, `close-blue.svg`, `close-red.svg` - Close buttons
- 🔵 `user-alt.svg`, `user-alt-2.svg`, `user.svg` - User profile icons
- 🔵 `edit-blue.svg` - Edit/Pencil icon
- 🔵 `menu-1.svg` - Menu/hamburger icon
- 🔵 `phone.svg` - Phone icon
- 🔵 `wallet.svg`, `wallet-orange.svg` - Wallet/Payment icons
- 🔵 `check.svg` - Check/Success icon
- 🔵 `gift.svg` - Gift icon
- 🔵 `fire.svg` - Fire/Hot icon
- 🔵 `history.svg` - History icon
- 🔵 `question.svg` - Help/Question icon
- 🔵 `transfer.svg` - Transfer icon
- 🔵 `copy.svg` - Copy icon
- 🔵 `file.svg`, `file-orange.svg` - File icons
- 🔵 `contact-blue.svg` - Contact icon
- 🔵 `customer-service.svg` - Support icon
- 🔵 `dropdown-blue.svg`, `dropdown-white.svg` - Dropdown indicators
- 🔵 `alert.svg`, `alert-orange.svg` - Alert icons
- 🔵 `logout-blue.svg` - Logout icon
- 🔵 `cash-orange.svg` - Cash/Money icon
- 🔵 `champion.svg` - Champion/Award icon
- 🔵 `user-plus.svg` - Add user icon
- 🔵 `pool.svg` - Pool/Betting icon
- 🔵 `button-generic.svg` - Generic button
- 🔵 `button-orange.svg` - Orange button

### Background/Decoration

- `background-1.svg` - Background element
- `bg-purple-botton.svg` - Purple bottom background
- `item-blue-7.svg`, `item-blue-8.svg` - Blue decorative items
- `item-orange-1.svg` - Orange decorative item
- `level-1.png`, `level-2.png`, `level-3.png` - Level indicators

---

## ICONS FOLDER

Location: `/resource/icons/`

- `chat-blue.svg` - Chat bubble icon
- `edit-blue.svg` - Edit icon
- `Icon-purple.svg` - Purple icon variant
- `microphone-gray.svg` - Microphone icon
- `trash-blue.svg` - Delete/Trash icon

---

## MAIN FOLDER

Location: `/resource/main/`

- `background-blue.svg` - Blue background graphic
- `background-orange.svg` - Orange background graphic

---

## GAME-ICONS FOLDER

Location: `/resource/game-icons/`

Gaming/Gambling Related Icons (27 assets)

- `3x-catch.png`, `918kiss-genie.png`, `ae-sexy-live.png`
- `ag-asia-gaming-live.png`, `allbet-live.png`, etc.
- `spade-icon-orange.svg` - Spade card suit icon
- `spadegaming-logo.png` - Spade Gaming logo

---

## SAMPLE FOLDER

Location: `/resource/sample/`

### Home Sample Images

- `home.png` - Home page reference
- `2.png`, `3.png` - Sample images

### Screenshots (Various UI Elements)

- `Snipaste_2026-01-23_10-15-16.png` through `10-22-09.png`
- 76 total screenshot samples for reference

---

## RECOMMENDED COMBINATIONS FOR HEADERS

### Option A: Minimal Professional

```
Background: --sp-header-gradient (#3d3d7a → #2a2a5a)
Logo:       logo-white.svg
Icon:       webs.svg (Language)
Colors:     Gold (#d4a84b) + White (#ffffff)
```

### Option B: Gaming Theme

```
Background: --sp-header-gradient-dark (#2d2d5a → #1a1a2e)
Logo:       logo-white.svg or logo-transparent.svg
Icon:       menu-1.svg or spade-icon-orange.svg
Colors:     Gold (#d4a84b) + White (#ffffff)
Accent:     Orange from ui-elements
```

### Option C: Bold & Colorful

```
Background: background-orange.svg or background-blue.svg overlay
Logo:       logo-white.svg
Icons:      Multiple (user, gift, wallet, etc.)
Colors:     Multi-color with gold accents
```

---

## COLOR PALETTE SUMMARY

**Gold/Accent:** #d4a84b `--sp-text-gold`
**White:** #ffffff `--sp-text-white`
**Dark Purple:** #3d3d7a → #2a2a5a (header gradient)
**Darker Purple:** #2d2d5a → #1a1a2e (dark variant)
**Light Gray:** #e0e0e0 `--sp-text-light`
**Muted:** #9999aa `--sp-text-muted`
**Border Light:** rgba(255,255,255,0.1)

---

## INTEGRATION GUIDE

### For Header Design:

1. Use `logo-white.svg` from `/resource/ui-elements/`
2. Use `webs.svg` for language selector
3. Apply `--sp-header-gradient` CSS variable
4. Maintain 28px logo height, 20px icon size
5. Use gold (#d4a84b) for text highlights

### For Custom Icons:

- All SVG icons support color changes via CSS `fill` property
- PNG icons use `opacity` for transparency effects
- Combine multiple icons for complex layouts

### For Backgrounds:

- Use gradient variables instead of static images
- Layer SVG backgrounds for depth
- Apply `background-size: cover` for responsive fit

---

## FILE PATHS (Copy-Paste Ready)

```
Logo:                   resource/ui-elements/logo-white.svg
Language Icon:          resource/ui-elements/webs.svg
Back Arrow:             resource/ui-elements/back.svg
Menu:                   resource/ui-elements/menu-1.svg
User Icon:              resource/ui-elements/user.svg
Edit Icon:              resource/ui-elements/edit-blue.svg
Wallet:                 resource/ui-elements/wallet.svg
Blue Background:        resource/main/background-blue.svg
Orange Background:      resource/main/background-orange.svg
```

---

## NOTES FOR NEXT DESIGN REQUEST

When requesting design changes:

1. Reference which icon/logo from this inventory
2. Specify hex color or CSS variable
3. Note exact sizes and positions
4. Describe layout arrangement
5. Mention any hover effects needed

All resources are production-ready SVG/PNG files.
No modifications needed - use as-is or apply CSS styling.

---

**This inventory helps ensure 95%+ visual similarity to sample designs**
