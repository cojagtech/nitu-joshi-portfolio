<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nitu Joshi — Awards</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&amp;family=Jost:wght@300;400;500;600&amp;display=swap">
<link rel="stylesheet" href="assets/header.css">
<style>

body{margin:0;background:#F5F7FA}
a{color:#173A70}a:hover{color:#C9792F}
@keyframes awRise{from{transform:translateY(108%)}to{transform:none}}
@keyframes awFade{from{opacity:0;transform:translateY(28px)}to{opacity:1;transform:none}}
.aw-mask{overflow:hidden;display:block}
.aw-mask>span{display:block;animation:awRise 1.2s cubic-bezier(.2,.75,.1,1) both}
.aw-fade{animation:awFade 1s cubic-bezier(.2,.75,.1,1) both}
@supports (animation-timeline: view()){
  .aw-rv{animation:awFade linear both;animation-timeline:view();animation-range:entry 0% cover 28%}
}
.aw-nav a{text-decoration:none;position:relative;padding:6px 0;color:#173A70}
.aw-nav a::after{content:"";position:absolute;left:0;right:0;bottom:0;height:1px;background:#C9792F;transform:scaleX(0);transform-origin:right;transition:transform .45s cubic-bezier(.2,.75,.1,1)}
.aw-nav a:hover::after{transform:scaleX(1);transform-origin:left}
.aw-card{transition:transform .6s cubic-bezier(.2,.75,.1,1),box-shadow .6s,border-color .6s}
.aw-card:hover{transform:translateY(-6px);box-shadow:0 22px 44px -26px rgba(23,58,112,.35);border-color:#C9792F}
@media (prefers-reduced-motion:reduce){*{animation:none!important;transition:none!important}}
</style>
</head>
<body>


<div style="background: #F5F7FA; color: #11223F; font-family: Jost, system-ui, sans-serif; font-weight: 300">

<?php $active = 'awards'; include __DIR__ . '/partials/header.php'; ?>


  <main style="width: 100%; max-width: 1440px; margin: 0 auto; box-sizing: border-box; padding: 0 clamp(20px, 4vw, 56px)">

    <section style="padding: clamp(56px, 8vw, 120px) 0 clamp(48px, 6vw, 80px); display: flex; flex-direction: column; gap: 24px; max-width: 900px">
      <p class="aw-fade" style="margin: 0; font-size: 13px; font-weight: 500; letter-spacing: .18em; text-transform: uppercase; color: #C9792F">Recognition</p>
      <h1 style="margin: 0; font-family: 'Cormorant Garamond', serif; font-weight: 600; font-size: clamp(44px, 5.6vw, 80px); line-height: .98; color: #173A70">
        <span class="aw-mask"><span style="animation-delay: .1s">Awards</span></span>
      </h1>
      <p class="aw-fade" style="margin: 0; animation-delay: .4s; font-size: 18px; line-height: 1.7; color: #3C4A61; max-width: 700px">Recognition for work across social causes, business and film.</p>
    </section>

    <section style="padding: 0 0 clamp(72px, 8vw, 120px); display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px">

      <div class="aw-card aw-rv" style="display: flex; flex-direction: column; gap: 16px; padding: 32px; border: 1px solid rgba(23,58,112,.16); border-radius: 18px; background: #FFFFFF">
        <span style="font-size: 12px; font-weight: 500; letter-spacing: .16em; text-transform: uppercase; color: #C9792F">Mid-Day · New Delhi</span>
        <h2 style="margin: 0; font-family: 'Cormorant Garamond', serif; font-size: 30px; font-weight: 600; color: #173A70">Best Social Worker Award</h2>
        <p style="margin: 0; font-size: 15px; line-height: 1.7; color: #3C4A61">New Delhi, November 23 — in a momentous occasion, acclaimed social activist and producer Nitu Joshi was conferred with the prestigious Best Social Worker Award by Mid-Day, in recognition of her unwavering dedication to social and environmental causes. Beyond her remarkable contributions to the film industry, her tireless commitment to philanthropy and community welfare earned her this well-deserved accolade.</p>
      </div>

      <div class="aw-card aw-rv" style="display: flex; flex-direction: column; gap: 16px; padding: 32px; border: 1px solid rgba(23,58,112,.16); border-radius: 18px; background: #FFFFFF">
        <span style="font-size: 12px; font-weight: 500; letter-spacing: .16em; text-transform: uppercase; color: #C9792F">YB Chauhan Auditorium, Mumbai · 2024</span>
        <h2 style="margin: 0; font-family: 'Cormorant Garamond', serif; font-size: 30px; font-weight: 600; color: #173A70">16th All India Newsmakers Achievers Award</h2>
        <p style="margin: 0; font-size: 15px; line-height: 1.7; color: #3C4A61">Honoured with the award for social work at the 16th All India Newsmakers Achievers Award 2024, held at the YB Chauhan Auditorium in Mumbai. Presented by Kobbi Soshani, Consulate General of Israel, and Harjinder Kang, High Commissioner of the UK — with heartfelt thanks to Vaidehi Taman for orchestrating the event.</p>
      </div>

      <div class="aw-card aw-rv" style="display: flex; flex-direction: column; gap: 16px; padding: 32px; border: 1px solid rgba(23,58,112,.16); border-radius: 18px; background: #FFFFFF">
        <span style="font-size: 12px; font-weight: 500; letter-spacing: .16em; text-transform: uppercase; color: #C9792F">CineDreams International Film Festival · 2024</span>
        <h2 style="margin: 0; font-family: 'Cormorant Garamond', serif; font-size: 30px; font-weight: 600; color: #173A70">Best Indian Documentary</h2>
        <p style="margin: 0; font-size: 15px; line-height: 1.7; color: #3C4A61">Produced the documentary "DharamRao BabaAtram — Dilon Ka Raja" (2024, Jio Cinema), a docu-drama portraying the challenges faced by rural tribal communities in their fight for water, forest and land rights. The film was honoured with the Best Indian Documentary award at the CineDreams International Film Festival 2024, marking a significant milestone on this journey.</p>
      </div>

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
