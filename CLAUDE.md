# Nitu Joshi — Official Portfolio Website

Context handoff from a long design session in Claude chat (Nov 2026). **Read this whole file before writing code.**

## 1. What this is
A rebuild of **nitujoshiofficial.com** (current site: WordPress + Elementor, Kortez theme).
Nitu Joshi is a dynamic public figure — creative professional, entrepreneur, film producer and social entrepreneur.
This is a **personal portfolio for a person, not a product or company site**. She is the hero of every screen.
Audience can include celebrities, ministers and international dignitaries, so it must feel
**modern luxury + corporate trust + professional elegance**, and it must be **engaging** (people should enjoy coming back).

## 2. Approved design → `site/index.html` ("Royal Silver")
Open `site/index.html` in a browser — it is the source of truth for look, layout and motion. Rebuild it faithfully.

### Hard rules from the client (do not break)
- **Portrait must be fully visible on the first screen** at every desktop size — never half on landing, half on scroll.
- **No cut-out (background-removed) photos.** Use a normal rectangular photograph in a frame.
- **No gold** in this theme. Accents are silver/white.
- **Homepage content is fixed** — only the items in §4. Don't add sections, stats or invented copy to the homepage.
- The two journey pages must open **both** from the homepage buttons **and** from the menu.

### Colour system — Blue + Silver, ratio 55 : 25 : 15 : 5
| Colour | Hex | Share | Used for |
|---|---|---|---|
| Royal Blue | `#173A70` | 55% | Hero left panel (over video), menu overlay, footer (`#102A52` deeper shade), name letters on silver, headings |
| Silver Grey | `#BFC7D1` | 25% | Right hero panel behind the photo, borders/dividers, outline button, role text |
| Soft White | `#F5F7FA` | 15% | Photo backing, light body text, section backgrounds on inner pages |
| Pure White | `#FFFFFF` | 5% | Name on blue, photo frame/mat, primary button |

Supporting: hero body text `#DCE3EC`; video overlay `linear-gradient(100deg, rgba(23,58,112,.9), rgba(23,58,112,.72) 45%, rgba(23,58,112,.6))`;
frame outline `rgba(23,58,112,.55)`. All text pairs pass WCAG AA (≥4.5:1).

### Typography (Google Fonts)
- **Cormorant Garamond** 500/600/700 + italic 500 — name, tagline, menu links.
- **Jost** 300/400/500 — body, buttons, small caps labels (letter-spacing .14–.3em, uppercase).
- **Mrs Saint Delafield** — handwritten signature "Nitu Joshi".

## 3. Layout spec (desktop > 900px)
Hero = `100vh` (min 640px), footer below it. Nothing else on the homepage.
- **Split:** left 58% royal blue with background video; right 42% solid silver panel (slides in from the right on load).
- **Name "NITU JOSHI":** one line, Cormorant 700, `font-size: min(13.5vw, 23vh)`, line-height .86, at `top: 82px`,
  spanning both panels. Implemented as **two stacked copies** clipped at the 58% line: white copy `clip-path: inset(0 42% 0 0)`,
  royal-blue copy `clip-path: inset(0 0 0 58%)` (second copy `aria-hidden`). Only the white copy is the `<h1>`.
- **Photo:** in the silver panel, **below the name** (top padding = `100px + name size × .9`), height fills the remaining space,
  aspect 4:5, white 8px mat + soft shadow, plus a thin royal outline offset 16px down-right. Signature sits on the photo's bottom-left.
- **Left content column** (starts below the name, vertically centred in remaining space, max-width 540px):
  roles line → tagline → 3 intro paragraphs → two buttons.
- **Header:** "NJ" monogram circle (top-left, links home) and a **"Menu" pill button** (top-right) that opens a **full-screen royal-blue menu**
  (all pages in large Cormorant, socials + tagline at the bottom, Close button, Esc closes, focus moves to Close).
- **Video pause/play button** bottom-left of the hero (required for accessibility with moving backgrounds).
- Footer: `#102A52`, silver top border, © line + socials.

### Responsive
- **≤ 900px:** stack — name (2 lines, `21vw`) → photo on silver block (full width, max 460px, 4:5) → text → buttons. Silver side-panel and
  second name copy hidden; menu button turns white.
- **Short laptops (height ≤ 760px):** intro font 15px.
- Verified (prototype) at 1280×720, 1366×768, 1440×900, 1920×1080, 768×1024, 390×844 — photo, name and both buttons fully visible on first screen on all desktops.

## 4. Homepage content (verbatim)
- Roles: `Creative Professional | Entrepreneur | Film Producer | Social Entrepreneur`
- Name: **NITU JOSHI**
- Tagline: *Two Journeys. One Purpose.*
- Intro:
  - One journey shaped by creativity, professional growth and entrepreneurship.
  - Another inspired by values, compassion and the desire to create meaningful change.
  - Together, they define my vision — combining entrepreneurial thinking with social responsibility to create sustainable and lasting impact.
- Buttons: **My Professional Journey →** (white fill, royal text) · **My Journey of Purpose →** (silver outline, white text)
- Signature: "Nitu Joshi"

## 5. Motion & interaction (keep it slow and refined)
Load sequence (≈3.5 s): silver panel slides in (1.4s) → name rises from a mask (starts .7s) → photo rises (1s) and a royal "curtain"
lifts off it (1.3s) with a slow 9s ken-burns → outline frame settles (1.5s) → text fades up in a stagger (1.5–2.2s) →
signature writes itself left→right (2.8s) → one light sheen across the photo (3s).
Continuous / interactive:
- **Role highlight:** the four roles light up one after another (white + underline), 10s cycle, 2.5s apart.
- **Mouse-parallax depth** on the hero (rAF-throttled, eased with a .9s transform transition). Travel at the screen edge:
  video −14/−8px, name −24/−8px, photo +12/+8px. Resets on mouse leave. Disabled with `prefers-reduced-motion`.
- Buttons lift 3px on hover, arrow slides 6px; outline button fills white on hover.
- Menu links stagger in; hover shifts them right and turns them silver.
- All animation off under `prefers-reduced-motion: reduce`.

## 6. Assets & placeholders
- `site/assets/bg-video.mp4` + `bg-video-poster.jpg` — **placeholder** (generated silver-blue bokeh loop, 12s).
  Replace with Nitu's real footage: 10–20s, 1080p, < 8 MB, no audio, slow cinematic clips (film sets, events, MIAM work). Keep a poster JPG.
- **Portrait photo:** placeholder box now. Needs a professional photo: portrait orientation, ≥ 1600×2000 px, crop to 4:5, normal background (no cut-out).
  Use `<img>` with `object-fit: cover`, good `alt`, and responsive `srcset`.

## 7. Site map
Home · About Me · Professional Journey (business) · Journey of Purpose (MIAM) · Vision & Voice · Media · Awards · Blog · Contact.
"Social Impact" is **not** a separate page — it's an "Impact" section inside Journey of Purpose.

`site/professional.html` and `site/purpose.html` are earlier drafts in an old ivory/gold style. **Keep their content structure but restyle them
to the Royal Silver system.** Their placeholders still need real content: company one-liners, timeline years, MIAM impact numbers `[N]`, photos.
Still to build: About Me, Vision & Voice, Media, Awards, Blog, Contact.

## 8. Facts you may use (from her current site — never invent others)
- 20+ years in film, media & entertainment production (another section says 25+ years across business, entertainment & socio-cultural work).
- Fashion, costume & contemporary jewellery designer for film, TV and social-media personalities; has worked with Geeta Kapur, Sanjay Dutt,
  Namrata Shirodkar, Jackie Shroff, Bhagyashree.
- Ventures: Ebina Entertainment, Vedansh Entertainment, Aayush Telefilms, Ebina Jewel, Ebina Hotel.
- MIAM Charitable Trust, est. 2022 — child education, reforestation, animal welfare, water conservation, library revival, student welfare,
  women empowerment. Site: miamcharitabletrust.com
- Socials: instagram.com/nitujoshiofficial · linkedin.com/in/nitu-joshi · facebook.com/nitu.joshi1 · x.com/nitujoshi_india
- Missing facts (awards, press, numbers, quotes) stay as clear `[PLACEHOLDER]`s.

## 9. Alternate (not chosen, for reference only)
`alternates/royal-portrait-gold.html` — same layout idea with Royal Blue `#142B55` + Ivory + Champagne Gold `#C6A66B`, arch frame and a
cut-out silhouette. The client moved away from gold and from cut-outs; use it only if they ask to compare.

## 10. Build notes
- Tech stack and hosting are **not decided** — ask first. Options: plain HTML/CSS/JS (fits shared cPanel hosting) or React + Vite / Next.js static export.
- Keep everything accessible: real `<a>`/`<button>`, visible focus, `aria-label`s on icon buttons, menu as `role="dialog"` with focus handling.
- Performance: lazy-load below-the-fold images, preload the hero poster, keep the hero video small, `font-display: swap`.
- Test the hero at the six viewport sizes in §3 after every layout change — the portrait must never be cut off.
