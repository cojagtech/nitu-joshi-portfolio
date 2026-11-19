<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nitu Joshi — Contact</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&amp;family=Jost:wght@300;400;500;600&amp;display=swap">
<link rel="stylesheet" href="assets/header.css">
<style>

body{margin:0;background:#F5F7FA}
a{color:#173A70}a:hover{color:#C9792F}
@keyframes ctRise{from{transform:translateY(108%)}to{transform:none}}
@keyframes ctFade{from{opacity:0;transform:translateY(28px)}to{opacity:1;transform:none}}
.ct-mask{overflow:hidden;display:block}
.ct-mask>span{display:block;animation:ctRise 1.2s cubic-bezier(.2,.75,.1,1) both}
.ct-fade{animation:ctFade 1s cubic-bezier(.2,.75,.1,1) both}
.ct-nav a{text-decoration:none;position:relative;padding:6px 0;color:#173A70}
.ct-nav a::after{content:"";position:absolute;left:0;right:0;bottom:0;height:1px;background:#C9792F;transform:scaleX(0);transform-origin:right;transition:transform .45s cubic-bezier(.2,.75,.1,1)}
.ct-nav a:hover::after{transform:scaleX(1);transform-origin:left}
.ct-link{transition:transform .5s cubic-bezier(.2,.75,.1,1),border-color .4s,background-color .4s}
.ct-link:hover{transform:translateY(-4px);border-color:#173A70;background-color:#FFFFFF}
@media (prefers-reduced-motion:reduce){*{animation:none!important;transition:none!important}}
</style>
</head>
<body>


<div style="background: #F5F7FA; color: #11223F; font-family: Jost, system-ui, sans-serif; font-weight: 300">

<?php $active = 'contact'; include __DIR__ . '/partials/header.php'; ?>


  <main style="width: 100%; max-width: 1240px; margin: 0 auto; box-sizing: border-box; padding: 0 clamp(20px, 4vw, 56px)">

    <section style="padding: clamp(56px, 8vw, 120px) 0 clamp(48px, 6vw, 80px); display: flex; flex-direction: column; gap: 24px; max-width: 760px">
      <p class="ct-fade" style="margin: 0; font-size: 13px; font-weight: 500; letter-spacing: .18em; text-transform: uppercase; color: #C9792F">Get in touch</p>
      <h1 style="margin: 0; font-family: 'Cormorant Garamond', serif; font-weight: 600; font-size: clamp(44px, 5.6vw, 76px); line-height: .98; color: #173A70">
        <span class="ct-mask"><span style="animation-delay: .1s">Contact Us &amp; Reach</span></span>
      </h1>
      <p class="ct-fade" style="margin: 0; animation-delay: .4s; font-size: 18px; line-height: 1.7; color: #3C4A61">Reach Nitu Joshi through official social channels, or visit the associated ventures below.</p>
    </section>

    <section style="padding: 0 0 clamp(56px, 7vw, 100px); display: flex; flex-direction: column; gap: 24px">
      <p style="margin: 0; font-size: 12px; font-weight: 500; letter-spacing: .18em; text-transform: uppercase; color: #5A6A82">Social</p>
      <div style="display: flex; flex-wrap: wrap; gap: 14px">
        <a href="https://www.facebook.com/nitu.joshi1/" class="ct-link" style="padding: 16px 26px; border: 1px solid rgba(23,58,112,.25); border-radius: 999px; font-size: 15px; text-decoration: none">Facebook</a>
        <a href="https://www.instagram.com/nitujoshiofficial/" class="ct-link" style="padding: 16px 26px; border: 1px solid rgba(23,58,112,.25); border-radius: 999px; font-size: 15px; text-decoration: none">Instagram</a>
        <a href="https://www.linkedin.com/in/nitu-joshi/" class="ct-link" style="padding: 16px 26px; border: 1px solid rgba(23,58,112,.25); border-radius: 999px; font-size: 15px; text-decoration: none">LinkedIn</a>
        <a href="https://x.com/nitujoshi_india" class="ct-link" style="padding: 16px 26px; border: 1px solid rgba(23,58,112,.25); border-radius: 999px; font-size: 15px; text-decoration: none">X (Twitter)</a>
      </div>
    </section>

    <div style="height: 1px; background: rgba(23,58,112,.14)"></div>

    <section style="padding: clamp(56px, 7vw, 100px) 0 clamp(72px, 9vw, 120px); display: flex; flex-direction: column; gap: 24px">
      <p style="margin: 0; font-size: 12px; font-weight: 500; letter-spacing: .18em; text-transform: uppercase; color: #5A6A82">Useful Links</p>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px">
        <a href="http://www.ebinaentertainment.com/" class="ct-link" style="display: flex; flex-direction: column; gap: 4px; padding: 22px; border: 1px solid rgba(23,58,112,.16); border-radius: 14px; background: #FFFFFF; text-decoration: none">
          <span style="font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 600; color: #173A70">Ebina Entertainment</span>
          <span style="font-size: 13px; color: #5A6A82">ebinaentertainment.com</span>
        </a>
        <a href="http://ebinajewel.com/" class="ct-link" style="display: flex; flex-direction: column; gap: 4px; padding: 22px; border: 1px solid rgba(23,58,112,.16); border-radius: 14px; background: #FFFFFF; text-decoration: none">
          <span style="font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 600; color: #173A70">Ebina Jewel</span>
          <span style="font-size: 13px; color: #5A6A82">ebinajewel.com</span>
        </a>
        <a href="http://ebinahotel.com/" class="ct-link" style="display: flex; flex-direction: column; gap: 4px; padding: 22px; border: 1px solid rgba(23,58,112,.16); border-radius: 14px; background: #FFFFFF; text-decoration: none">
          <span style="font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 600; color: #173A70">Ebina Hotel</span>
          <span style="font-size: 13px; color: #5A6A82">ebinahotel.com</span>
        </a>
        <a href="http://www.miamcharitabletrust.com/" class="ct-link" style="display: flex; flex-direction: column; gap: 4px; padding: 22px; border: 1px solid rgba(23,58,112,.16); border-radius: 14px; background: #FFFFFF; text-decoration: none">
          <span style="font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 600; color: #173A70">MIAM Charitable Trust</span>
          <span style="font-size: 13px; color: #5A6A82">miamcharitabletrust.com</span>
        </a>
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
