<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nitu Joshi — Home (Royal Silver)</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&amp;family=Jost:wght@300;400;500&amp;family=Mrs+Saint+Delafield&amp;display=swap">
<link rel="stylesheet" href="assets/header.css">
<style>
body{margin:0;background:#173A70}
a{color:inherit}a:hover{color:inherit}
@keyframes rsPanel{from{transform:translateX(100%)}to{transform:none}}
@keyframes rsRise{from{transform:translateY(105%)}to{transform:none}}
@keyframes rsFade{from{opacity:0;transform:translateY(16px)}to{opacity:1;transform:none}}
@keyframes rsFrame{from{opacity:0;transform:translate(-14px,-14px)}to{opacity:1;transform:none}}
@keyframes rsPhoto{from{opacity:0;transform:translateY(40px)}to{opacity:1;transform:none}}
@keyframes rsCurtain{from{transform:scaleY(1)}to{transform:scaleY(0)}}
@keyframes rsKen{from{transform:scale(1.12)}to{transform:scale(1)}}
@keyframes rsWrite{from{clip-path:inset(0 100% 0 0)}to{clip-path:inset(0 0 0 0)}}
@keyframes rsVideo{from{opacity:0}to{opacity:1}}
@keyframes rsRole{0%,22%{color:#FFFFFF;border-bottom-color:#E0974A}27%,100%{color:#BFC7D1;border-bottom-color:transparent}}
@keyframes rsMenu{from{opacity:0}to{opacity:1}}
@keyframes rsLink{from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:none}}
@keyframes rsShine{from{transform:translateX(-130%) skewX(-18deg)}to{transform:translateX(460%) skewX(-18deg)}}
.rs-panel{animation:rsPanel 1.4s cubic-bezier(.7,0,.2,1) both}
.rs-mask{display:block;overflow:hidden;padding-bottom:.34em;margin-bottom:-.34em}
.rs-mask>span{display:block;animation:rsRise 1.4s cubic-bezier(.2,.7,.1,1) .7s both}
.rs-fade{animation:rsFade 1.2s cubic-bezier(.2,.7,.1,1) both}
.rs-frame{animation:rsFrame 1.4s cubic-bezier(.2,.7,.1,1) 1.5s both}
.rs-photo{animation:rsPhoto 1.5s cubic-bezier(.2,.7,.1,1) 1s both}
.rs-curtain{transform-origin:top;animation:rsCurtain 1.6s cubic-bezier(.7,0,.2,1) 1.3s both}
.rs-ken{animation:rsKen 9s cubic-bezier(.2,.6,.2,1) 1.3s both}
.rs-shine{animation:rsShine 2s ease-in-out 3s both}
.rs-write{animation:rsWrite 2.6s cubic-bezier(.45,0,.3,1) 2.8s both}
.rs-video{animation:rsVideo 2s ease both}
.rs-role{border-bottom:1px solid transparent;padding-bottom:3px;animation:rsRole 10s linear infinite}
.rs-par{transition:transform .9s cubic-bezier(.2,.7,.1,1)}
.rs-menu{animation:rsMenu .5s ease both}
.rs-ml{animation:rsLink .8s cubic-bezier(.2,.7,.1,1) both}
.rs-btn{text-decoration:none;transition:background-color .5s,color .5s,border-color .5s,transform .5s cubic-bezier(.2,.7,.1,1)}
.rs-btn .rs-arw{transition:transform .5s cubic-bezier(.2,.7,.1,1)}
.rs-btn:hover{transform:translateY(-3px)}
.rs-btn:hover .rs-arw{transform:translateX(6px)}
.rs-solid:hover{background-color:#BFC7D1}
.rs-line:hover{background-color:#FFFFFF;color:#173A70;border-color:#FFFFFF}
.rs-menubtn{transition:background-color .4s,color .4s}
.rs-menubtn:hover{background-color:#173A70;color:#FFFFFF}
.rs-mlink{text-decoration:none;transition:color .4s,padding-left .5s cubic-bezier(.2,.7,.1,1)}
.rs-mlink:hover{color:#BFC7D1;padding-left:14px}
.rs-icon{transition:background-color .4s}
.rs-icon:hover{background-color:rgba(191,199,209,.25)}
@media (max-width:900px){
  .rs-hero{height:auto!important;min-height:0!important}
  .rs-silver{display:none!important}
  .rs-nameA{position:relative!important;top:auto!important;clip-path:none!important;order:1;padding-top:96px!important;padding-bottom:28px!important}
  .rs-nameB{display:none!important}
  .rs-name{font-size:21vw!important;white-space:normal!important;line-height:.9!important}
  .rs-portrait{position:relative!important;width:100%!important;height:auto!important;order:2;background:#BFC7D1;padding:36px 22px!important}
  .rs-pwrap{width:100%!important;height:auto!important}
  .rs-photobox{height:auto!important;width:calc(100% - 16px)!important;max-width:460px!important}
  .rs-content{width:100%!important;order:3;padding:40px 22px 96px!important}
  .rs-menubtn{color:#FFFFFF!important;border-color:rgba(255,255,255,.6)!important}
  .rs-sep{display:none!important}
  .rs-roles{gap:6px 18px!important}
}
@media (max-height:760px) and (min-width:901px){
  .rs-intro{font-size:15px!important;gap:8px!important}
}
@media (prefers-reduced-motion:reduce){*{animation:none!important;transition:none!important}}

/* Scroll-revealed About section — cinematic, staggered */
.rs-reveal-img{opacity:0;transform:scale(.92) translateX(-28px);clip-path:inset(0 100% 0 0);transition:opacity 1.3s cubic-bezier(.16,.84,.44,1),transform 1.3s cubic-bezier(.16,.84,.44,1),clip-path 1.3s cubic-bezier(.16,.84,.44,1)}
.rs-about-grid.is-in .rs-reveal-img{opacity:1;transform:none;clip-path:inset(0 0 0 0)}
.rs-reveal-text>*{opacity:0;transform:translateY(30px);transition:opacity 1.1s cubic-bezier(.16,.84,.44,1),transform 1.1s cubic-bezier(.16,.84,.44,1)}
.rs-about-grid.is-in .rs-reveal-text>*{opacity:1;transform:none}
.rs-reveal-text>*:nth-child(1){transition-delay:.15s}
.rs-reveal-text>*:nth-child(2){transition-delay:.3s}
.rs-reveal-text>*:nth-child(3){transition-delay:.42s}
.rs-reveal-text>*:nth-child(4){transition-delay:.54s}
.rs-reveal-text>*:nth-child(5){transition-delay:.66s}
@media (prefers-reduced-motion:reduce){.rs-reveal-img,.rs-reveal-text>*{opacity:1!important;transform:none!important;clip-path:none!important;transition:none!important}}
.rs-about-link{text-decoration:none;display:inline-flex;align-items:center;gap:10px;transition:gap .4s,color .4s}
.rs-about-link:hover{gap:16px;color:#C9792F}
.rs-about-link .rs-arw{transition:transform .5s cubic-bezier(.2,.7,.1,1)}
.rs-about-link:hover .rs-arw{transform:translateX(6px)}
.rs-chip2{transition:background-color .4s,color .4s,transform .4s cubic-bezier(.2,.75,.1,1)}
.rs-chip2:hover{background-color:#B2660F;transform:translateY(-3px)}
.rs-about-grid{display:grid;grid-template-columns:minmax(320px,470px) minmax(0,1fr);align-items:center;gap:48px 72px}
@media (max-width:760px){.rs-about-grid{grid-template-columns:1fr}.rs-about-grid>*{max-width:100%!important}}
.rs-slide{opacity:0;transition:opacity 1.8s cubic-bezier(.4,0,.2,1)}
.rs-slide.is-active{opacity:1}
.rs-ftlink{text-decoration:none;transition:color .4s,padding-left .4s}
.rs-ftlink:hover{color:#FFFFFF;padding-left:6px}
</style>
</head>
<body>


<div style="min-height: 100vh; background: #173A70; color: #F5F7FA; font-family: Jost, system-ui, sans-serif; font-weight: 300; display: flex; flex-direction: column">

  <?php $active = 'home'; include __DIR__ . '/partials/header.php'; ?>

  <section class="rs-hero" id="hero" style="position: relative; height: calc(100vh - 85px); min-height: 560px; overflow: hidden; background: #173A70; display: flex; flex-direction: column">

    <div class="rs-par" aria-hidden="true" style="position: absolute; top: -3%; left: -3%; width: 106%; height: 106%; transform: translate3d(0,0,0)" data-par="video">
      <video class="rs-video" id="bg-video" autoplay="" muted="" loop="" playsinline="" preload="auto" poster="assets/bg-video-poster.jpg" style="width: 100%; height: 100%; object-fit: cover"><source src="assets/bg-video.mp4" type="video/mp4"></video>
    </div>
    <div aria-hidden="true" style="position: absolute; top: 0; right: 0; bottom: 0; left: 0; background: linear-gradient(100deg, rgba(23,58,112,.9) 0%, rgba(23,58,112,.72) 45%, rgba(23,58,112,.6) 100%)"></div>

    <div class="rs-silver rs-panel" aria-hidden="true" style="position: absolute; top: 0; right: 0; bottom: 0; width: 42%; z-index: 1; background: #BFC7D1"></div>

    <div class="rs-nameA" style="position: absolute; top: 82px; left: 0; right: 0; z-index: 2; clip-path: inset(0 42% 0 0); padding: 0 clamp(22px, 5vw, 72px); pointer-events: none">
      <div class="rs-par" style="transform: translate3d(0,0,0)" data-par="name">
        <h1 class="rs-name" style="margin: 0; font-family: 'Cormorant Garamond', serif; font-weight: 700; font-size: min(13.5vw, 23vh); line-height: .86; letter-spacing: .01em; white-space: nowrap; color: #FFFFFF"><span class="rs-mask"><span>NITU JOSHI</span></span></h1>
      </div>
    </div>
    <div class="rs-nameB" aria-hidden="true" style="position: absolute; top: 82px; left: 0; right: 0; z-index: 2; clip-path: inset(0 0 0 58%); padding: 0 clamp(22px, 5vw, 72px); pointer-events: none">
      <div class="rs-par" style="transform: translate3d(0,0,0)" data-par="name">
        <div class="rs-name" style="font-family: 'Cormorant Garamond', serif; font-weight: 700; font-size: min(13.5vw, 23vh); line-height: .86; letter-spacing: .01em; white-space: nowrap; color: #173A70"><span class="rs-mask"><span>NITU JOSHI</span></span></div>
      </div>
    </div>

    <div class="rs-portrait" style="position: absolute; top: 0; right: 0; bottom: 0; width: 42%; z-index: 3; box-sizing: border-box; padding: calc(100px + min(13.5vw, 23vh) * .9) clamp(28px, 4vw, 64px) clamp(28px, 5vh, 48px); display: flex; align-items: center; justify-content: center">
      <div class="rs-par rs-pwrap" style="height: 100%; display: flex; align-items: center; justify-content: center; transform: translate3d(0,0,0)" data-par="portrait">
        <div class="rs-photobox" style="position: relative; height: 100%; aspect-ratio: 4 / 5; max-width: 100%">
          <div class="rs-frame" aria-hidden="true" style="position: absolute; top: 16px; left: 16px; right: -16px; bottom: -16px; border: 1px solid rgba(23,58,112,.55)"></div>
          <div class="rs-photo" style="position: relative; height: 100%; box-sizing: border-box; padding: 8px; background: #FFFFFF; box-shadow: 0 30px 60px -30px rgba(23,58,112,.55)">
            <div style="position: relative; width: 100%; height: 100%; overflow: hidden; background: #F5F7FA">
              <img class="rs-ken" src="assets/nitu-portrait.png" alt="Nitu Joshi" style="position: absolute; top: 0; right: 0; bottom: 0; left: 0; width: 100%; height: 100%; object-fit: cover; object-position: 50% 15%">
              <div class="rs-shine" aria-hidden="true" style="position: absolute; top: 0; bottom: 0; left: 0; width: 30%; background: linear-gradient(90deg, rgba(255,255,255,0), rgba(255,255,255,.45), rgba(255,255,255,0))"></div>
              <div class="rs-curtain" aria-hidden="true" style="position: absolute; top: 0; right: 0; bottom: 0; left: 0; background: #173A70"></div>
            </div>
          </div>
          <p class="rs-write" aria-label="Signed, Nitu Joshi" style="position: absolute; left: 6%; bottom: 4%; margin: 0; font-family: 'Mrs Saint Delafield', cursive; font-size: clamp(44px, 4vw, 66px); line-height: 1; color: #173A70; white-space: nowrap">Nitu Joshi</p>
        </div>
      </div>
    </div>

<div class="rs-content" style="position: relative; z-index: 4; width: 58%; box-sizing: border-box; flex-grow: 1; padding: calc(96px + min(13.5vw, 23vh) * .95) clamp(22px, 5vw, 72px) clamp(28px, 5vh, 56px); display: flex; flex-direction: column; justify-content: center; gap: 20px">
      <p class="rs-fade rs-roles" style="margin: 0; animation-delay: 1.5s; display: flex; flex-wrap: wrap; gap: 6px 14px; font-size: 12px; font-weight: 400; letter-spacing: .2em; text-transform: uppercase; color: #BFC7D1">
        <span class="rs-role" style="animation-delay: 2.5s">Creative Professional</span><span class="rs-sep" aria-hidden="true">|</span>
        <span class="rs-role" style="animation-delay: 5s">Entrepreneur</span><span class="rs-sep" aria-hidden="true">|</span>
        <span class="rs-role" style="animation-delay: 7.5s">Film Producer</span><span class="rs-sep" aria-hidden="true">|</span>
        <span class="rs-role" style="animation-delay: 10s">Social Entrepreneur</span>
      </p>
      <p class="rs-fade" style="margin: 0; animation-delay: 1.7s; font-family: 'Cormorant Garamond', serif; font-style: italic; font-weight: 700; font-size: clamp(32px, 3.4vw, 50px); line-height: 1.05; color: #E0974A">Two Journeys. One Purpose.</p>
      <div class="rs-fade rs-intro" style="animation-delay: 1.9s; display: flex; flex-direction: column; gap: 10px; max-width: 540px; font-size: 17px; line-height: 1.7; color: #DCE3EC">
        <p style="margin: 0">One journey shaped by creativity, professional growth and entrepreneurship.</p>
        <p style="margin: 0">Another inspired by values, compassion and the desire to create meaningful change.</p>
        <p style="margin: 0">Together, they define my vision — combining entrepreneurial thinking with social responsibility to create sustainable and lasting impact.</p>
      </div>
      <nav aria-label="Two journeys" class="rs-fade" style="animation-delay: 2.2s; display: flex; flex-wrap: wrap; gap: 12px; margin-top: 6px">
        <a href="professional.php" class="rs-btn rs-solid" style="display: inline-flex; align-items: center; gap: 12px; min-height: 52px; padding: 0 24px; background: #FFFFFF; color: #173A70; font-size: 13px; font-weight: 500; letter-spacing: .14em; text-transform: uppercase">My Professional Journey <span class="rs-arw" aria-hidden="true">→</span></a>
        <a href="purpose.php" class="rs-btn rs-line" style="display: inline-flex; align-items: center; gap: 12px; min-height: 52px; padding: 0 24px; border: 1px solid #BFC7D1; color: #FFFFFF; font-size: 13px; font-weight: 500; letter-spacing: .14em; text-transform: uppercase">My Journey of Purpose <span class="rs-arw" aria-hidden="true">→</span></a>
      </nav>
    </div>

    <button type="button" class="rs-icon" id="bg-video-toggle" aria-label="Pause background video" style="position: absolute; left: 16px; bottom: 16px; z-index: 5; width: 44px; height: 44px; border-radius: 999px; border: 1px solid rgba(191,199,209,.7); background: rgba(23,58,112,.5); color: #FFFFFF; display: flex; align-items: center; justify-content: center; cursor: pointer; padding: 0">
      <svg id="icon-pause" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M8 5v14M16 5v14"></path></svg>
      <svg id="icon-play" style="display:none" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5l11 7-11 7z"></path></svg>
    </button>
  </section>

  <section id="about" style="background: #F5F7FA; color: #11223F; padding: clamp(72px, 10vw, 140px) clamp(22px, 5vw, 72px)">
    <div class="rs-about-grid" style="max-width: 1360px; margin: 0 auto">
      <div class="rs-reveal-img" style="width: 100%; max-width: 470px; aspect-ratio: 4/3; box-sizing: border-box; background: #FFFFFF; padding: 10px; box-shadow: 0 30px 60px -30px rgba(23,58,112,.4)">
        <div id="rs-slider" style="position: relative; width: 100%; height: 100%; overflow: hidden">
          <img class="rs-slide is-active" src="assets/archive/2023/11/Nitu-Joshi-Mittal-1-600x902.jpeg" alt="Nitu Joshi" style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; display: block">
          <img class="rs-slide" src="assets/archive/2023/08/Operation-AMG-5-1024x550.jpg" alt="Nitu Joshi" style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; display: block">
          <img class="rs-slide" src="assets/archive/2024/11/Untitled-1280-x-850-px-2-1024x680.jpg" alt="Nitu Joshi" style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; display: block">
        </div>
      </div>
      <div class="rs-reveal-text" style="min-width: 0; display: flex; flex-direction: column; gap: 22px; font-family: Jost, system-ui, sans-serif; font-weight: 300">
        <h2 style="margin: 0; font-family: 'Cormorant Garamond', serif; font-weight: 700; font-size: clamp(34px, 4vw, 54px); line-height: 1.05; color: #173A70">About Me</h2>
        <p style="margin: 0; font-size: 17px; line-height: 1.8; color: #3C4A61; max-width: 620px">With over two decades of experience in film, media and entertainment production, Nitu Joshi has earned recognition as a leading fashion and jewellery designer for prominent film, television and social personalities — working with names including Geeta Kapur, Sanjay Dutt, Namrata Shirodkar, Jackie Shroff and Bhagyashree.</p>
        <p style="margin: 0; font-size: 17px; line-height: 1.8; color: #3C4A61; max-width: 620px">A distinguished Business and Social Entrepreneur with a career spanning over 25 years, she founded MIAM Charitable Trust to carry the same entrepreneurial thinking into social responsibility.</p>
        <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 6px">
          <span class="rs-chip2" style="padding: 9px 16px; border-radius: 999px; font-size: 13px; font-weight: 500; background: #C9792F; color: #FFFFFF">Ebina Entertainment</span>
          <span class="rs-chip2" style="padding: 9px 16px; border-radius: 999px; font-size: 13px; font-weight: 500; background: #C9792F; color: #FFFFFF">Vedansh Entertainment</span>
          <span class="rs-chip2" style="padding: 9px 16px; border-radius: 999px; font-size: 13px; font-weight: 500; background: #C9792F; color: #FFFFFF">Aayush Telefilms</span>
          <span class="rs-chip2" style="padding: 9px 16px; border-radius: 999px; font-size: 13px; font-weight: 500; background: #C9792F; color: #FFFFFF">Ebina Jewel</span>
          <span class="rs-chip2" style="padding: 9px 16px; border-radius: 999px; font-size: 13px; font-weight: 500; background: #C9792F; color: #FFFFFF">MIAM Charitable Trust</span>
        </div>
        <a href="about.php" class="rs-about-link" style="margin-top: 6px; font-size: 13px; font-weight: 500; letter-spacing: .14em; text-transform: uppercase; color: #173A70">Read the full story <span class="rs-arw" aria-hidden="true">→</span></a>
      </div>
    </div>
  </section>

  <footer style="background: #102A52; color: #DCE3EC">
    <div style="max-width: 1360px; margin: 0 auto; padding: clamp(56px, 7vw, 88px) clamp(22px, 5vw, 72px) clamp(32px, 4vw, 48px); display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; font-family: Jost, system-ui, sans-serif; font-weight: 300">
      <div style="display: flex; flex-direction: column; gap: 14px; grid-column: span 2">
        <span style="font-family: 'Cormorant Garamond', serif; font-size: 26px; font-weight: 600; letter-spacing: .06em; color: #FFFFFF">NITU JOSHI</span>
        <p style="margin: 0; font-size: 14px; line-height: 1.7; color: #BFC7D1; max-width: 360px">Creative Professional · Entrepreneur · Film Producer · Social Entrepreneur. Two journeys, one purpose.</p>
        <span style="display: flex; flex-wrap: wrap; gap: 18px; margin-top: 6px">
          <a href="https://instagram.com/nitujoshiofficial" class="rs-ftlink" style="color:#DCE3EC; font-size: 13px">Instagram</a>
          <a href="https://linkedin.com/in/nitu-joshi" class="rs-ftlink" style="color:#DCE3EC; font-size: 13px">LinkedIn</a>
          <a href="https://facebook.com/nitu.joshi1" class="rs-ftlink" style="color:#DCE3EC; font-size: 13px">Facebook</a>
          <a href="https://x.com/nitujoshi_india" class="rs-ftlink" style="color:#DCE3EC; font-size: 13px">X</a>
        </span>
      </div>
      <div style="display: flex; flex-direction: column; gap: 10px">
        <span style="font-size: 12px; font-weight: 500; letter-spacing: .18em; text-transform: uppercase; color: #8FA0BC">Explore</span>
        <a href="about.php" class="rs-ftlink" style="color:#DCE3EC; font-size: 14px">About Me</a>
        <a href="professional.php" class="rs-ftlink" style="color:#DCE3EC; font-size: 14px">Professional Journey</a>
        <a href="purpose.php" class="rs-ftlink" style="color:#DCE3EC; font-size: 14px">Journey of Purpose</a>
        <a href="media.php" class="rs-ftlink" style="color:#DCE3EC; font-size: 14px">Media</a>
        <a href="awards.php" class="rs-ftlink" style="color:#DCE3EC; font-size: 14px">Awards</a>
        <a href="gallery.php" class="rs-ftlink" style="color:#DCE3EC; font-size: 14px">Gallery</a>
      </div>
      <div style="display: flex; flex-direction: column; gap: 10px">
        <span style="font-size: 12px; font-weight: 500; letter-spacing: .18em; text-transform: uppercase; color: #8FA0BC">Ventures</span>
        <a href="http://www.ebinaentertainment.com/" class="rs-ftlink" style="color:#DCE3EC; font-size: 14px">Ebina Entertainment</a>
        <a href="http://ebinajewel.com/" class="rs-ftlink" style="color:#DCE3EC; font-size: 14px">Ebina Jewel</a>
        <a href="http://ebinahotel.com/" class="rs-ftlink" style="color:#DCE3EC; font-size: 14px">Ebina Hotel</a>
        <a href="http://www.miamcharitabletrust.com/" class="rs-ftlink" style="color:#DCE3EC; font-size: 14px">MIAM Charitable Trust</a>
        <a href="contact.php" class="rs-ftlink" style="color:#DCE3EC; font-size: 14px">Contact</a>
      </div>
    </div>
    <div style="border-top: 1px solid rgba(191,199,209,.3); padding: 18px clamp(22px, 5vw, 72px); display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px 24px; font-size: 11px; letter-spacing: .18em; text-transform: uppercase; color: #8FA0BC">
      <span>© Nitu Joshi · Official website</span>
      <span>Two Journeys. One Purpose.</span>
    </div>
  </footer>

</div>


<script>
(function () {
  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  // Background video: force muted autoplay + pause/play button
  var v = document.getElementById('bg-video'), vb = document.getElementById('bg-video-toggle');
  var ip = document.getElementById('icon-pause'), ipl = document.getElementById('icon-play');
  if (v) { v.muted = true; var pr = v.play(); if (pr && pr.catch) pr.catch(function () {}); }
  if (v && vb) vb.addEventListener('click', function () {
    if (v.paused) { v.play(); ip.style.display = ''; ipl.style.display = 'none'; vb.setAttribute('aria-label', 'Pause background video'); }
    else { v.pause(); ip.style.display = 'none'; ipl.style.display = ''; vb.setAttribute('aria-label', 'Play background video'); }
  });
  // Mouse parallax depth (px of travel per layer at the screen edge)
  var DEPTH = { video: [-14, -8], name: [-24, -8], portrait: [12, 8], arch: [22, 10] };
  var hero = document.getElementById('hero'), layers = document.querySelectorAll('[data-par]'), raf = null, mx = 0, my = 0;
  function apply() { raf = null; layers.forEach(function (el) { var d = DEPTH[el.dataset.par] || [0, 0]; el.style.transform = 'translate3d(' + (mx * d[0]).toFixed(1) + 'px,' + (my * d[1]).toFixed(1) + 'px,0)'; }); }
  if (hero && !reduce) {
    hero.addEventListener('mousemove', function (e) { var r = hero.getBoundingClientRect(); mx = (e.clientX - r.left) / r.width - 0.5; my = (e.clientY - r.top) / r.height - 0.5; if (!raf) raf = requestAnimationFrame(apply); });
    hero.addEventListener('mouseleave', function () { mx = 0; my = 0; if (!raf) raf = requestAnimationFrame(apply); });
  }
  // About section image slider (3 photos, 2-4s interval)
  var slides = document.querySelectorAll('#rs-slider .rs-slide');
  if (slides.length > 1 && !reduce) {
    var si = 0;
    (function tick() {
      setTimeout(function () {
        slides[si].classList.remove('is-active');
        si = (si + 1) % slides.length;
        slides[si].classList.add('is-active');
        tick();
      }, 2000 + Math.random() * 2000);
    })();
  }
  // Scroll-reveal for the About section
  var revealGrid = document.querySelector('.rs-about-grid');
  if (revealGrid) {
    if (reduce || !window.IntersectionObserver) {
      revealGrid.classList.add('is-in');
    } else {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) { entry.target.classList.add('is-in'); io.unobserve(entry.target); }
        });
      }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });
      io.observe(revealGrid);
    }
  }
})();
</script>
<script src="assets/nav.js"></script>
</body>
</html>
