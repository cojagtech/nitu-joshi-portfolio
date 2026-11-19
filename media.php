<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nitu Joshi — Media</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&amp;family=Jost:wght@300;400;500;600&amp;display=swap">
<link rel="stylesheet" href="assets/header.css">
<style>

body{margin:0;background:#F5F7FA}
a{color:#173A70}a:hover{color:#C9792F}
@keyframes mdRise{from{transform:translateY(108%)}to{transform:none}}
@keyframes mdFade{from{opacity:0;transform:translateY(28px)}to{opacity:1;transform:none}}
.md-mask{overflow:hidden;display:block}
.md-mask>span{display:block;animation:mdRise 1.2s cubic-bezier(.2,.75,.1,1) both}
.md-fade{animation:mdFade 1s cubic-bezier(.2,.75,.1,1) both}
@supports (animation-timeline: view()){
  .md-rv{animation:mdFade linear both;animation-timeline:view();animation-range:entry 0% cover 28%}
}
.md-nav a{text-decoration:none;position:relative;padding:6px 0;color:#173A70}
.md-nav a::after{content:"";position:absolute;left:0;right:0;bottom:0;height:1px;background:#C9792F;transform:scaleX(0);transform-origin:right;transition:transform .45s cubic-bezier(.2,.75,.1,1)}
.md-nav a:hover::after{transform:scaleX(1);transform-origin:left}
.md-row{transition:background-color .4s,border-color .4s}
.md-row:hover{background-color:#FFFFFF;border-color:#173A70}
@media (prefers-reduced-motion:reduce){*{animation:none!important;transition:none!important}}
</style>
</head>
<body>


<div style="background: #F5F7FA; color: #11223F; font-family: Jost, system-ui, sans-serif; font-weight: 300">

<?php $active = 'media'; include __DIR__ . '/partials/header.php'; ?>


  <main style="width: 100%; max-width: 1280px; margin: 0 auto; box-sizing: border-box; padding: 0 clamp(20px, 4vw, 56px)">

    <section style="padding: clamp(56px, 8vw, 120px) 0 clamp(48px, 6vw, 80px); display: flex; flex-direction: column; gap: 24px; max-width: 900px">
      <p class="md-fade" style="margin: 0; font-size: 13px; font-weight: 500; letter-spacing: .18em; text-transform: uppercase; color: #C9792F">Press &amp; Coverage</p>
      <h1 style="margin: 0; font-family: 'Cormorant Garamond', serif; font-weight: 600; font-size: clamp(44px, 5.6vw, 80px); line-height: .98; color: #173A70">
        <span class="md-mask"><span style="animation-delay: .1s">Media</span></span>
      </h1>
      <p class="md-fade" style="margin: 0; animation-delay: .4s; font-size: 18px; line-height: 1.7; color: #3C4A61; max-width: 700px">A selection of press coverage across business, entertainment and social work.</p>
    </section>

    <section style="padding: 0 0 clamp(72px, 8vw, 120px); display: flex; flex-direction: column; gap: 0; border-top: 1px solid rgba(23,58,112,.16)">
      <a href="#" class="md-row md-rv" style="display: flex; flex-wrap: wrap; align-items: baseline; justify-content: space-between; gap: 6px 24px; padding: 22px 16px; border-bottom: 1px solid rgba(23,58,112,.14); text-decoration: none; border-left: 2px solid transparent">
        <span style="display: flex; flex-direction: column; gap: 4px">
          <span style="font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 600; color: #173A70">Sangri Times</span>
          <span style="font-size: 14px; color: #5A6A82">Award recognition for social work contributions</span>
        </span>
        <span style="font-size: 13px; letter-spacing: .1em; text-transform: uppercase; color: #C9792F; flex-shrink: 0">Nov 23, 2023</span>
      </a>
      <a href="#" class="md-row md-rv" style="display: flex; flex-wrap: wrap; align-items: baseline; justify-content: space-between; gap: 6px 24px; padding: 22px 16px; border-bottom: 1px solid rgba(23,58,112,.14); text-decoration: none; border-left: 2px solid transparent">
        <span style="display: flex; flex-direction: column; gap: 4px">
          <span style="font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 600; color: #173A70">News 24 Think First</span>
          <span style="font-size: 14px; color: #5A6A82">Participation in Goa Film Festival</span>
        </span>
        <span style="font-size: 13px; letter-spacing: .1em; text-transform: uppercase; color: #C9792F; flex-shrink: 0">Nov 29, 2023</span>
      </a>
      <a href="#" class="md-row md-rv" style="display: flex; flex-wrap: wrap; align-items: baseline; justify-content: space-between; gap: 6px 24px; padding: 22px 16px; border-bottom: 1px solid rgba(23,58,112,.14); text-decoration: none; border-left: 2px solid transparent">
        <span style="display: flex; flex-direction: column; gap: 4px">
          <span style="font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 600; color: #173A70">Mid-Day</span>
          <span style="font-size: 14px; color: #5A6A82">Business and social entrepreneurship profile</span>
        </span>
        <span style="font-size: 13px; letter-spacing: .1em; text-transform: uppercase; color: #C9792F; flex-shrink: 0">Jan 5, 2024</span>
      </a>
      <a href="#" class="md-row md-rv" style="display: flex; flex-wrap: wrap; align-items: baseline; justify-content: space-between; gap: 6px 24px; padding: 22px 16px; border-bottom: 1px solid rgba(23,58,112,.14); text-decoration: none; border-left: 2px solid transparent">
        <span style="display: flex; flex-direction: column; gap: 4px">
          <span style="font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 600; color: #173A70">DNA Hindi</span>
          <span style="font-size: 14px; color: #5A6A82">Educational initiatives for tribal children</span>
        </span>
        <span style="font-size: 13px; letter-spacing: .1em; text-transform: uppercase; color: #C9792F; flex-shrink: 0">Jan 16, 2024</span>
      </a>
      <a href="#" class="md-row md-rv" style="display: flex; flex-wrap: wrap; align-items: baseline; justify-content: space-between; gap: 6px 24px; padding: 22px 16px; border-bottom: 1px solid rgba(23,58,112,.14); text-decoration: none; border-left: 2px solid transparent">
        <span style="display: flex; flex-direction: column; gap: 4px">
          <span style="font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 600; color: #173A70">IMDb</span>
          <span style="font-size: 14px; color: #5A6A82">Film trailer launch featuring Praful Patel</span>
        </span>
        <span style="font-size: 13px; letter-spacing: .1em; text-transform: uppercase; color: #C9792F; flex-shrink: 0">Feb 3, 2024</span>
      </a>
      <a href="#" class="md-row md-rv" style="display: flex; flex-wrap: wrap; align-items: baseline; justify-content: space-between; gap: 6px 24px; padding: 22px 16px; border-bottom: 1px solid rgba(23,58,112,.14); text-decoration: none; border-left: 2px solid transparent">
        <span style="display: flex; flex-direction: column; gap: 4px">
          <span style="font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 600; color: #173A70">Business Standard</span>
          <span style="font-size: 14px; color: #5A6A82">Trailer launch coverage</span>
        </span>
        <span style="font-size: 13px; letter-spacing: .1em; text-transform: uppercase; color: #C9792F; flex-shrink: 0">Mar 1, 2024</span>
      </a>
      <a href="#" class="md-row md-rv" style="display: flex; flex-wrap: wrap; align-items: baseline; justify-content: space-between; gap: 6px 24px; padding: 22px 16px; border-bottom: 1px solid rgba(23,58,112,.14); text-decoration: none; border-left: 2px solid transparent">
        <span style="display: flex; flex-direction: column; gap: 4px">
          <span style="font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 600; color: #173A70">The Hans India</span>
          <span style="font-size: 14px; color: #5A6A82">Film narrative about Maharashtra minister</span>
        </span>
        <span style="font-size: 13px; letter-spacing: .1em; text-transform: uppercase; color: #C9792F; flex-shrink: 0">Mar 2, 2024</span>
      </a>
      <a href="#" class="md-row md-rv" style="display: flex; flex-wrap: wrap; align-items: baseline; justify-content: space-between; gap: 6px 24px; padding: 22px 16px; border-bottom: 1px solid rgba(23,58,112,.14); text-decoration: none; border-left: 2px solid transparent">
        <span style="display: flex; flex-direction: column; gap: 4px">
          <span style="font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 600; color: #173A70">Daily Mail Express</span>
          <span style="font-size: 14px; color: #5A6A82">Student support in rural areas</span>
        </span>
        <span style="font-size: 13px; letter-spacing: .1em; text-transform: uppercase; color: #C9792F; flex-shrink: 0">Mar 20, 2024</span>
      </a>
      <a href="#" class="md-row md-rv" style="display: flex; flex-wrap: wrap; align-items: baseline; justify-content: space-between; gap: 6px 24px; padding: 22px 16px; border-bottom: 1px solid rgba(23,58,112,.14); text-decoration: none; border-left: 2px solid transparent">
        <span style="display: flex; flex-direction: column; gap: 4px">
          <span style="font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 600; color: #173A70">First India</span>
          <span style="font-size: 14px; color: #5A6A82">Founder profile</span>
        </span>
        <span style="font-size: 13px; letter-spacing: .1em; text-transform: uppercase; color: #C9792F; flex-shrink: 0">Apr 4, 2024</span>
      </a>
    </section>
  </main>

  <footer style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 12px 24px; padding: 22px clamp(20px, 5vw, 72px); background: #102A52; color: #DCE3EC; font-size: 12px; letter-spacing: .2em; text-transform: uppercase; border-top: 1px solid #BFC7D1">
    <span>© Nitu Joshi · Official website</span>
    <span style="display: flex; flex-wrap: wrap; gap: 20px">
      <a href="https://instagram.com/nitujoshiofficial" style="color:#DCE3EC">Instagram</a>
      <a href="https://linkedin.com/in/nitu-joshi" style="color:#DCE3EC">LinkedIn</a>
      <a href="https://facebook.com/nitu.joshi1" style="color:#DCE3EC">Facebook</a>
      <a href="https://x.com/nitujoshi_india" style="color:#DCE3EC">X</a>
    </span>
  </footer>
</div>



<script src="assets/nav.js"></script>
</body>
</html>
