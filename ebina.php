<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ebina Entertainment — Nitu Joshi</title>
<meta name="description" content="Ebina Entertainment — a Mumbai-based film production house co-founded by Nitu Joshi Mittal, making films, documentaries, advertisements and digital content.">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&amp;family=Jost:wght@300;400;500;600&amp;display=swap">
<link rel="stylesheet" href="assets/header.css">
<script>
(function () {
  var d = document.documentElement;
  if (window.matchMedia && matchMedia("(prefers-reduced-motion: reduce)").matches) return;
  d.classList.add("js");
})();
</script>
<style>
/* ===== Royal Silver theme + orange accent =====
   Royal #173A70 · deep #102A52 · Silver #BFC7D1 · Soft White #F5F7FA · White #FFFFFF · Orange #C9792F */
:root{--royal:#173A70;--royal-deep:#102A52;--silver:#BFC7D1;--soft:#F5F7FA;--white:#FFFFFF;--ink:#11223F;--body:#3C4A61;--muted:#5A6A82;--orange:#C9792F;--orange-btn:#A85C0D;--line:rgba(23,58,112,.14)}
*{box-sizing:border-box}
html{scroll-behavior:smooth}
body{margin:0;background:var(--soft);color:var(--ink);font-family:Jost,system-ui,sans-serif;font-weight:300}
a{color:var(--royal)}
a:focus-visible,button:focus-visible{outline:2px solid var(--orange);outline-offset:3px}
img{display:block;max-width:100%}

/* ---------- load animations ---------- */
@keyframes ebRise{from{transform:translateY(108%)}to{transform:none}}
@keyframes ebFade{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:none}}
@keyframes ebLine{from{transform:scaleX(0)}to{transform:scaleX(1)}}
@keyframes ebPanel{from{transform:translateX(100%)}to{transform:none}}
@keyframes ebReel{to{transform:rotate(360deg)}}
.eb-mask{overflow:hidden;display:block;padding-bottom:.16em;margin-bottom:-.16em}
.eb-mask>span{display:block;animation:ebRise 1.2s cubic-bezier(.2,.75,.1,1) both}
.eb-fade{animation:ebFade 1s cubic-bezier(.2,.75,.1,1) both}
.eb-line{transform-origin:left;animation:ebLine 1.4s cubic-bezier(.7,0,.2,1) both}

/* ---------- scroll reveals (translate/scale props, so hover transforms keep working) ---------- */
@keyframes rvUp{from{opacity:0;translate:0 46px}to{opacity:1;translate:0 0}}
@keyframes rvLeft{from{opacity:0;translate:-70px 0}to{opacity:1;translate:0 0}}
@keyframes rvRight{from{opacity:0;translate:70px 0}to{opacity:1;translate:0 0}}
@keyframes rvZoom{from{opacity:0;scale:.86;translate:0 26px}to{opacity:1;scale:1;translate:0 0}}
@keyframes rvWord{from{translate:0 110%}to{translate:0 0}}
@keyframes ebCurtain{from{transform:scaleY(1)}to{transform:scaleY(0)}}
@keyframes ebKen{from{scale:1.18}to{scale:1}}
.js .eb-rv{opacity:0}
.js .eb-rv.is-in{animation:rvUp 1s cubic-bezier(.2,.7,.1,1) var(--d,0s) both}
.js .eb-rv--left.is-in{animation-name:rvLeft;animation-duration:1.2s}
.js .eb-rv--right.is-in{animation-name:rvRight;animation-duration:1.2s}
.js .eb-rv--zoom.is-in{animation-name:rvZoom}
.js .eb-label::before{scale:0 1;transform-origin:left;transition:scale .9s cubic-bezier(.7,0,.2,1) .15s}
.js .eb-label.is-in::before{scale:1 1}
.eb-w{display:inline-block;overflow:hidden;vertical-align:bottom;padding:0 .08em .14em 0;margin:0 -.08em -.14em 0}
.eb-w>span{display:inline-block;translate:0 110%}
.eb-split.is-in .eb-w>span{animation:rvWord .95s cubic-bezier(.2,.7,.1,1) var(--d,0s) both}
.js .eb-photo::after{content:"";position:absolute;inset:0;z-index:2;background:var(--royal);transform-origin:top}
.js .is-in .eb-photo::after,.js .eb-photo.is-in::after{animation:ebCurtain 1.1s cubic-bezier(.7,0,.2,1) calc(var(--d,0s) + .25s) both}
.js .is-in .eb-photo img,.js .eb-photo.is-in img{animation:ebKen 1.8s cubic-bezier(.2,.6,.2,1) calc(var(--d,0s) + .25s) both}
.js .eb-rail{transform-origin:top;transform:scaleY(0)}
.js .eb-step::before{scale:0;transition:scale .6s cubic-bezier(.3,1.6,.5,1) calc(var(--d,0s) + .35s)}
.js .eb-step.is-in::before{scale:1}
.eb-progress{display:none}
.js .eb-progress{display:block;position:fixed;left:0;right:0;top:0;z-index:150;height:3px;background:var(--orange);transform:scaleX(0);transform-origin:left;pointer-events:none}
main{overflow-x:clip}
@media (max-width:700px){.js .eb-rv--left.is-in,.js .eb-rv--right.is-in{animation-name:rvUp}}

/* ---------- hero ---------- */
.eb-hero{position:relative;overflow:hidden;background:var(--royal);color:var(--white)}
.eb-hero-panel{position:absolute;top:0;right:0;bottom:0;width:36%;background:var(--silver);animation:ebPanel 1.3s cubic-bezier(.7,0,.2,1) both}
.eb-reel{position:absolute;right:-90px;bottom:-90px;opacity:.16;pointer-events:none;animation:ebReel 60s linear infinite}
.eb-hero-in{position:relative;max-width:1440px;margin:0 auto;padding:clamp(56px,8vw,120px) clamp(20px,4vw,56px) clamp(72px,8vw,120px);display:flex;flex-wrap:wrap;align-items:center;gap:48px clamp(40px,6vw,96px)}
.eb-hero-text{flex:999 1 560px;min-width:0;display:flex;flex-direction:column;gap:24px}
.eb-eyebrow{display:flex;align-items:center;gap:14px;margin:0;font-size:12px;font-weight:500;line-height:1.8;letter-spacing:.28em;text-transform:uppercase;color:var(--silver)}
.eb-eyebrow::before{content:"";flex-shrink:0;width:36px;height:2px;background:var(--orange)}
.eb-hero h1{margin:0;font-family:'Cormorant Garamond',serif;font-weight:700;font-size:clamp(52px,7vw,104px);line-height:.95;color:var(--white)}
.eb-hero h1 em{display:block;margin-top:10px;font-style:italic;font-weight:500;font-size:.5em;line-height:1.1;color:var(--silver)}
.eb-hero-lead{margin:0;max-width:640px;font-size:19px;line-height:1.7;color:#DCE3EC}
.eb-hero-btns{display:flex;flex-wrap:wrap;gap:12px}
.eb-btn{display:inline-flex;align-items:center;gap:12px;min-height:52px;padding:0 24px;font-size:13px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;text-decoration:none;transition:background-color .4s,color .4s,border-color .4s,transform .4s cubic-bezier(.2,.75,.1,1)}
.eb-btn:hover{transform:translateY(-3px)}
.eb-btn-white{background:var(--white);color:var(--royal)}
.eb-btn-white:hover{background:var(--silver);color:var(--royal)}
.eb-btn-line{border:1px solid var(--silver);color:var(--white)}
.eb-btn-line:hover{background:var(--white);border-color:var(--white);color:var(--royal)}
.eb-btn-orange{background:var(--orange-btn);color:var(--white)}
.eb-btn-orange:hover{background:#8F4E0B;color:var(--white)}

.eb-glance{position:relative;flex:1 1 300px;min-width:0;max-width:400px;margin:0 auto;background:var(--white);color:var(--ink);box-shadow:0 30px 60px -34px rgba(16,42,82,.6);border-top:3px solid var(--orange)}
.eb-glance p{margin:0;padding:20px 26px 4px;font-size:12px;font-weight:600;letter-spacing:.24em;text-transform:uppercase;color:var(--muted)}
.eb-glance dl{margin:0;padding:6px 26px 18px}
.eb-glance div{padding:12px 0;border-bottom:1px solid #E3E8EF}
.eb-glance div:last-child{border-bottom:0}
.eb-glance dt{font-size:11px;font-weight:600;letter-spacing:.2em;text-transform:uppercase;color:var(--muted)}
.eb-glance dd{margin:4px 0 0;font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:600;line-height:1.2;color:var(--royal)}

/* facts */
.eb-facts{max-width:1440px;margin:0 auto;padding:0 clamp(20px,4vw,56px)}
.eb-facts-in{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));margin-top:-48px;position:relative;background:var(--white);box-shadow:0 30px 60px -40px rgba(16,42,82,.45)}
.eb-fact{padding:24px 26px;border-right:1px solid #E3E8EF}
.eb-fact:last-child{border-right:0}
.eb-fact b{display:block;font-family:'Cormorant Garamond',serif;font-size:46px;font-weight:700;line-height:1;color:var(--royal);font-variant-numeric:tabular-nums}
.eb-fact b i{font-style:normal;color:var(--orange)}
.eb-fact span{display:block;margin-top:8px;font-size:14px;line-height:1.45;color:var(--body)}
@media (max-width:900px){.eb-facts-in{grid-template-columns:repeat(2,minmax(0,1fr));margin-top:-32px}.eb-fact:nth-child(2){border-right:0}.eb-fact:nth-child(-n+2){border-bottom:1px solid #E3E8EF}}

/* section bar */
.eb-sub{position:sticky;top:0;z-index:30;margin-top:clamp(40px,5vw,64px);background:rgba(245,247,250,.94);-webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px);border-bottom:1px solid var(--line)}
.eb-sub-in{max-width:1440px;margin:0 auto;padding:0 clamp(20px,4vw,56px);display:flex;gap:4px 28px;overflow-x:auto;scrollbar-width:none}
.eb-sub-in::-webkit-scrollbar{display:none}
.eb-sub a{position:relative;flex-shrink:0;padding:16px 0;font-size:12px;font-weight:500;letter-spacing:.18em;text-transform:uppercase;text-decoration:none;color:var(--muted);transition:color .3s}
.eb-sub a b{font-weight:600;color:var(--orange);margin-right:6px}
.eb-sub a::after{content:"";position:absolute;left:0;right:0;bottom:-1px;height:2px;background:var(--orange);transform:scaleX(0);transform-origin:left;transition:transform .45s cubic-bezier(.2,.75,.1,1)}
.eb-sub a:hover,.eb-sub a.is-active{color:var(--royal)}
.eb-sub a.is-active::after{transform:scaleX(1)}

/* chapters */
.eb-wrap{max-width:1440px;margin:0 auto;padding:0 clamp(20px,4vw,56px)}
.eb-ch{padding:clamp(64px,8vw,112px) 0;scroll-margin-top:130px;display:flex;flex-wrap:wrap;gap:28px clamp(40px,6vw,96px)}
.eb-ch + .eb-ch{border-top:1px solid var(--line)}
.eb-ch-side{flex:1 1 240px;min-width:0}
.eb-ch-side .eb-sticky{position:sticky;top:150px;display:flex;flex-direction:column;gap:10px}
.eb-num{font-family:'Cormorant Garamond',serif;font-size:88px;font-weight:700;line-height:.85;color:transparent;-webkit-text-stroke:1.5px var(--orange)}
.eb-ch-side h2{margin:0;font-family:'Cormorant Garamond',serif;font-size:clamp(36px,3.4vw,50px);font-weight:600;line-height:1.04;color:var(--royal)}
.eb-ch-main{flex:999 1 620px;min-width:0;display:flex;flex-direction:column;gap:26px}
.eb-intro{margin:0;font-family:'Cormorant Garamond',serif;font-size:clamp(24px,2.3vw,30px);font-weight:500;line-height:1.4;color:var(--ink)}
.eb-text{margin:0;font-size:17px;line-height:1.8;color:var(--body)}
.eb-label{display:flex;align-items:center;gap:12px;margin:0;font-size:12px;font-weight:600;letter-spacing:.24em;text-transform:uppercase;color:var(--royal)}
.eb-label::before{content:"";width:24px;height:2px;background:var(--orange)}
.eb-quote{margin:0;padding:24px 28px;background:var(--royal);border-left:3px solid var(--orange);font-family:'Cormorant Garamond',serif;font-style:italic;font-size:clamp(24px,2.4vw,32px);line-height:1.3;color:var(--white)}

/* what we make */
.eb-services{display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:14px}
.eb-service{display:flex;flex-direction:column;gap:14px;padding:24px;background:var(--white);border:1px solid #DCE2EA;transition:transform .6s cubic-bezier(.2,.75,.1,1),background-color .6s,border-color .6s}
.eb-service:hover{transform:translateY(-6px);background:var(--royal);border-color:var(--royal)}
.eb-ic{width:50px;height:50px;border-radius:999px;border:1.5px solid var(--orange);display:flex;align-items:center;justify-content:center;color:var(--orange);transition:background-color .6s,color .6s}
.eb-service:hover .eb-ic{background:var(--orange);color:var(--white)}
.eb-service h3{margin:0;font-family:'Cormorant Garamond',serif;font-size:24px;font-weight:600;line-height:1.1;color:var(--royal);transition:color .6s}
.eb-service p{margin:0;font-size:14px;line-height:1.6;color:var(--body);transition:color .6s}
.eb-service:hover h3{color:var(--white)}
.eb-service:hover p{color:#DCE3EC}

/* leadership */
.eb-leader{display:flex;flex-wrap:wrap;background:var(--white);border:1px solid #DCE2EA}
.eb-leader .eb-photo{flex:1 1 280px;min-height:360px}
.eb-leader-body{flex:2 1 380px;min-width:0;display:flex;flex-direction:column;justify-content:center;gap:14px;padding:clamp(26px,3.4vw,44px)}
.eb-leader-body small{font-size:12px;font-weight:600;letter-spacing:.22em;text-transform:uppercase;color:var(--orange-btn)}
.eb-leader-body h3{margin:0;font-family:'Cormorant Garamond',serif;font-size:clamp(34px,3.4vw,46px);font-weight:700;line-height:1;color:var(--royal)}
.eb-leader-body p{margin:0;font-size:16px;line-height:1.75;color:var(--body)}
.eb-chips{display:flex;flex-wrap:wrap;gap:8px;margin:4px 0 0;padding:0;list-style:none}
.eb-chips li{padding:8px 14px;background:var(--soft);border:1px solid #DCE2EA;font-size:13px;font-weight:500;color:var(--royal)}
.eb-link{display:inline-flex;align-items:center;gap:8px;align-self:flex-start;margin-top:6px;padding-bottom:3px;border-bottom:2px solid var(--orange);font-size:13px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;text-decoration:none;color:var(--royal);transition:gap .4s}
.eb-link:hover{gap:14px}
.eb-cofounder{display:flex;align-items:center;gap:18px;padding:22px 26px;background:var(--white);border:1px solid #DCE2EA;border-left:3px solid var(--orange)}
.eb-mono{flex-shrink:0;width:56px;height:56px;border-radius:999px;background:var(--royal);color:var(--white);display:flex;align-items:center;justify-content:center;font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:700}
.eb-cofounder small{display:block;font-size:11px;font-weight:600;letter-spacing:.2em;text-transform:uppercase;color:var(--muted)}
.eb-cofounder b{display:block;margin-top:2px;font-family:'Cormorant Garamond',serif;font-size:26px;font-weight:700;color:var(--royal)}

/* photos */
.eb-photo{position:relative;overflow:hidden;background:linear-gradient(150deg,#2A4A7E,#173A70)}
.eb-photo img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;transition:transform 1.2s cubic-bezier(.2,.75,.1,1)}
.eb-photo .eb-ph{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;padding:20px;text-align:center;font-family:'Cormorant Garamond',serif;font-style:italic;font-size:24px;color:rgba(255,255,255,.55)}
.eb-tag{position:absolute;left:16px;top:16px;z-index:3;padding:6px 10px;background:var(--orange-btn);font-size:11px;font-weight:600;letter-spacing:.16em;text-transform:uppercase;color:var(--white)}

/* productions */
.eb-prod{display:flex;flex-wrap:wrap;background:var(--royal);color:var(--white)}
.eb-prod + .eb-prod{margin-top:0}
.eb-prod .eb-photo{flex:1 1 340px;min-height:340px}
.eb-prod:hover .eb-photo img{transform:scale(1.05)}
.eb-prod-body{flex:1 1 380px;min-width:0;display:flex;flex-direction:column;justify-content:center;gap:16px;padding:clamp(26px,3.6vw,48px)}
.eb-prod-body small{font-size:12px;font-weight:600;letter-spacing:.22em;text-transform:uppercase;color:var(--silver)}
.eb-prod-body h3{margin:0;font-family:'Cormorant Garamond',serif;font-size:clamp(32px,3.2vw,46px);font-weight:700;line-height:1.02}
.eb-prod-body p{margin:0;font-size:16px;line-height:1.75;color:#DCE3EC}
.eb-slogan{margin:0;padding:14px 18px;border-left:2px solid var(--orange);background:rgba(255,255,255,.06);font-family:'Cormorant Garamond',serif;font-style:italic;font-size:24px;line-height:1.3;color:var(--white)}
.eb-slogan span{display:block;margin-top:4px;font-family:Jost,sans-serif;font-style:normal;font-size:13px;letter-spacing:.06em;color:var(--silver)}
.eb-badges{display:flex;flex-wrap:wrap;gap:8px}
.eb-badges span{display:inline-flex;align-items:center;gap:8px;padding:8px 12px;background:rgba(255,255,255,.1);font-size:13px;color:var(--white)}
.eb-badges span.is-award{background:var(--orange-btn)}
.eb-prod.is-flip{flex-direction:row-reverse;background:var(--white);color:var(--ink);border:1px solid #DCE2EA}
.eb-prod.is-flip small{color:var(--muted)}
.eb-prod.is-flip h3{color:var(--royal)}
.eb-prod.is-flip p{color:var(--body)}
.eb-prod.is-flip .eb-badges span{background:var(--soft);color:var(--royal);border:1px solid #DCE2EA}

/* journey */
.eb-steps{position:relative;display:flex;flex-direction:column;gap:22px;padding-left:44px}
.eb-rail{position:absolute;left:9px;top:12px;bottom:12px;width:2px;background:var(--silver)}
.eb-step{position:relative;display:flex;flex-wrap:wrap;gap:6px 32px;padding:20px 24px;background:var(--white);border:1px solid #E3E8EF}
.eb-step::before{content:"";position:absolute;left:-42px;top:26px;width:16px;height:16px;border-radius:999px;background:var(--soft);border:2px solid var(--royal);box-sizing:border-box}
.eb-step.is-key::before{background:var(--orange);border-color:var(--orange)}
.eb-step b{flex:0 0 96px;font-family:'Cormorant Garamond',serif;font-size:32px;font-weight:700;line-height:1;color:var(--royal)}
.eb-step div{flex:1 1 360px;min-width:0}
.eb-step h3{margin:0 0 4px;font-family:'Cormorant Garamond',serif;font-size:24px;font-weight:600;line-height:1.15;color:var(--royal)}
.eb-step p{margin:0;font-size:15px;line-height:1.65;color:var(--body)}

/* group */
.eb-group{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:16px}
@media (max-width:900px){.eb-group{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media (max-width:560px){.eb-group{grid-template-columns:minmax(0,1fr)}}
.eb-brand{display:flex;flex-direction:column;justify-content:space-between;gap:24px;min-height:170px;padding:26px;background:var(--white);border:1px solid #DCE2EA;color:var(--royal);text-decoration:none;background-image:linear-gradient(var(--orange),var(--orange));background-repeat:no-repeat;background-position:0 100%;background-size:100% 0%;transition:background-size .7s cubic-bezier(.7,0,.2,1),color .45s,border-color .45s}
a.eb-brand:hover{background-size:100% 100%;color:var(--white);border-color:var(--orange)}
.eb-brand-top{display:flex;align-items:center;justify-content:space-between;font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:700;color:var(--orange);transition:color .45s}
a.eb-brand:hover .eb-brand-top{color:var(--white)}
.eb-brand h3{margin:0;font-family:'Cormorant Garamond',serif;font-size:28px;font-weight:600;line-height:1.1}
.eb-brand small{display:block;margin-top:6px;font-size:13px;font-weight:500;letter-spacing:.1em;text-transform:uppercase;color:var(--body);transition:color .45s}
a.eb-brand:hover small{color:var(--white)}

/* closing band */
.eb-cta{background:var(--royal);color:var(--white)}
.eb-cta-in{max-width:1440px;margin:0 auto;padding:clamp(56px,7vw,96px) clamp(20px,4vw,56px);display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:28px}
.eb-cta small{display:flex;align-items:center;gap:12px;font-size:12px;font-weight:500;letter-spacing:.24em;text-transform:uppercase;color:var(--silver)}
.eb-cta small::before{content:"";width:28px;height:2px;background:var(--orange)}
.eb-cta h2{margin:12px 0 0;font-family:'Cormorant Garamond',serif;font-size:clamp(38px,4.6vw,64px);font-weight:600;line-height:1.02}

.eb-footer{display:flex;flex-wrap:wrap;justify-content:space-between;gap:12px 24px;padding:24px clamp(20px,4vw,56px);background:var(--royal-deep);color:#DCE3EC;font-size:12px;letter-spacing:.2em;text-transform:uppercase;border-top:1px solid var(--silver)}
.eb-footer a{color:#DCE3EC}
.eb-footer a:hover{color:var(--white)}

@media (max-width:900px){
  .eb-eyebrow{letter-spacing:.18em}
  .eb-hero-panel{width:100%;top:auto;height:34%}
  .eb-ch-side .eb-sticky{position:static}
  .eb-num{font-size:64px}
  .eb-prod.is-flip{flex-direction:row}
}
@media (prefers-reduced-motion:reduce){*,*::before,*::after{animation:none!important;transition:none!important}html{scroll-behavior:auto}}
</style>
</head>
<body>
<div class="eb-progress" aria-hidden="true"></div>

<?php $active = 'professional'; include __DIR__ . '/partials/header.php'; ?>

<main>
  <!-- HERO -->
  <section class="eb-hero" aria-labelledby="eb-title">
    <div class="eb-hero-panel" aria-hidden="true"></div>
    <svg class="eb-reel" width="420" height="420" viewBox="0 0 100 100" fill="none" stroke="#FFFFFF" stroke-width="1.2" aria-hidden="true"><circle cx="50" cy="50" r="46"/><circle cx="50" cy="50" r="8"/><circle cx="50" cy="24" r="11"/><circle cx="50" cy="76" r="11"/><circle cx="24" cy="50" r="11"/><circle cx="76" cy="50" r="11"/></svg>
    <div class="eb-hero-in">
      <div class="eb-hero-text">
        <p class="eb-eyebrow eb-fade" style="animation-delay:.2s">Ventures · Film Production House</p>
        <h1 id="eb-title">
          <span class="eb-mask"><span style="animation-delay:.3s">Ebina Entertainment</span></span>
          <span class="eb-mask"><span style="animation-delay:.45s"><em>Stories that uplift, amuse and stay with you.</em></span></span>
        </h1>
        <div class="eb-line" style="width:120px;height:2px;background:var(--orange);animation-delay:.9s"></div>
        <p class="eb-hero-lead eb-fade" style="animation-delay:1s">A Mumbai-based film production house that brings imaginative stories to life — producing films, documentaries, advertisements and digital content for audiences in India and beyond.</p>
        <div class="eb-hero-btns eb-fade" style="animation-delay:1.15s">
          <a href="https://ebinaentertainment.com/" target="_blank" rel="noopener" class="eb-btn eb-btn-white">Visit Ebina Entertainment <span aria-hidden="true">↗</span></a>
          <a href="#productions" class="eb-btn eb-btn-line">See productions <span aria-hidden="true">↓</span></a>
        </div>
      </div>
      <aside class="eb-glance eb-fade" style="animation-delay:.7s" aria-label="At a glance">
        <p>At a glance</p>
        <dl>
          <div><dt>Co-founded by</dt><dd>Nitu Joshi Mittal &amp; Sunil Joshi</dd></div>
          <div><dt>Based in</dt><dd>Mumbai, India</dd></div>
          <div><dt>Makes</dt><dd>Films · Documentaries · Ads · Digital</dd></div>
          <div><dt>Recognition</dt><dd>Best Indian Documentary, 2024</dd></div>
        </dl>
      </aside>
    </div>
  </section>

  <!-- AT A GLANCE -->
  <div class="eb-facts">
    <div class="eb-facts-in eb-fade" style="animation-delay:1.2s" role="list" aria-label="Key facts">
      <div class="eb-fact" role="listitem"><b>25<i>+</i></b><span>Years of the group's journey in film &amp; television, since 1998</span></div>
      <div class="eb-fact" role="listitem"><b>3</b><span>Languages — Hindi, Marathi &amp; Gujarati</span></div>
      <div class="eb-fact" role="listitem"><b>5</b><span>Kinds of work — films, documentaries, ads, digital &amp; TV</span></div>
      <div class="eb-fact" role="listitem"><b>1</b><span>International festival award, CineDreams 2024</span></div>
    </div>
  </div>

  <!-- SECTION BAR -->
  <nav class="eb-sub" aria-label="Jump to section">
    <div class="eb-sub-in">
      <a href="#about"><b>01</b>About</a>
      <a href="#leadership"><b>02</b>Leadership</a>
      <a href="#productions"><b>03</b>Productions</a>
      <a href="#journey"><b>04</b>Journey</a>
      <a href="#group"><b>05</b>Ebina Group</a>
    </div>
  </nav>

  <div class="eb-wrap">

    <!-- 01 ABOUT -->
    <section class="eb-ch" id="about" aria-labelledby="h-about">
      <div class="eb-ch-side"><div class="eb-sticky"><span class="eb-num eb-rv eb-rv--zoom" aria-hidden="true">01</span><h2 class="eb-split" id="h-about">About the studio</h2></div></div>
      <div class="eb-ch-main">
        <p class="eb-intro eb-rv">Ebina Entertainment was established with a commitment to quality and a love of storytelling — creating captivating tales and visually striking content with a team of seasoned professionals and modern production technology.</p>
        <p class="eb-quote eb-rv eb-rv--left">“Films have the power to uplift, amuse and leave an impression.”</p>
        <p class="eb-text eb-rv">Beyond entertainment, the studio sets out to offer memorable experiences that evoke powerful emotions and ideas — with stories rooted in Indian life, culture and real events.</p>
        <p class="eb-label eb-rv">What we make</p>
        <div class="eb-services">
          <div class="eb-service eb-rv eb-rv--zoom"><span class="eb-ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2.5" y="4" width="19" height="16" rx="1.5"/><path d="M7 4v16M17 4v16M2.5 9H7M2.5 15H7M17 9h4.5M17 15h4.5"/></svg></span><h3>Feature Films</h3><p>Stories for the big screen.</p></div>
          <div class="eb-service eb-rv eb-rv--zoom"><span class="eb-ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 10l5-3v10l-5-3z"/><rect x="3" y="6" width="12" height="12" rx="1.5"/></svg></span><h3>Documentaries</h3><p>Docu-dramas on real lives and causes.</p></div>
          <div class="eb-service eb-rv eb-rv--zoom"><span class="eb-ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 11l14-6v14L3 13z"/><path d="M7 13v5h3v-4"/></svg></span><h3>Advertisements</h3><p>Brand films and commercials.</p></div>
          <div class="eb-service eb-rv eb-rv--zoom"><span class="eb-ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="2.5" width="12" height="19" rx="2"/><path d="M11 18h2"/></svg></span><h3>Digital Content</h3><p>Content for online audiences.</p></div>
          <div class="eb-service eb-rv eb-rv--zoom"><span class="eb-ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2.5" y="6" width="19" height="13" rx="1.5"/><path d="M8 2.5l4 3.5 4-3.5"/></svg></span><h3>Television</h3><p>Hindi, Marathi &amp; Gujarati.</p></div>
        </div>
      </div>
    </section>

    <!-- 02 LEADERSHIP -->
    <section class="eb-ch" id="leadership" aria-labelledby="h-lead">
      <div class="eb-ch-side"><div class="eb-sticky"><span class="eb-num eb-rv eb-rv--zoom" aria-hidden="true">02</span><h2 class="eb-split" id="h-lead">Leadership</h2></div></div>
      <div class="eb-ch-main">
        <article class="eb-leader eb-rv">
          <div class="eb-photo"><span class="eb-ph">Nitu Joshi Mittal</span><img src="assets/nitu-portrait.png" alt="Portrait of Nitu Joshi Mittal" loading="lazy" style="object-position:50% 15%" onerror="this.remove()"></div>
          <div class="eb-leader-body">
            <small>Co-founder · Group Managing Director, Ebina Group</small>
            <h3>Nitu Joshi Mittal</h3>
            <p>A business and social entrepreneur whose journey in film and television began in 1998 with Aayush Telefilms and Vedansh Entertainment. Across her ventures she has led as Managing Director, Executive Producer and Chief Creative Officer — bringing a background in fashion and jewellery design to every production.</p>
            <ul class="eb-chips" aria-label="Roles">
              <li>Producer</li><li>Executive Producer</li><li>Chief Creative Officer</li><li>Founder, MIAM Charitable Trust</li>
            </ul>
            <a href="about.php" class="eb-link">Read her full story <span aria-hidden="true">→</span></a>
          </div>
        </article>
        <div class="eb-cofounder eb-rv eb-rv--left">
          <span class="eb-mono" aria-hidden="true">SJ</span>
          <span><small>Co-founder</small><b>Sunil Joshi</b></span>
        </div>
      </div>
    </section>

    <!-- 03 PRODUCTIONS -->
    <section class="eb-ch" id="productions" aria-labelledby="h-prod">
      <div class="eb-ch-side"><div class="eb-sticky"><span class="eb-num eb-rv eb-rv--zoom" aria-hidden="true">03</span><h2 class="eb-split" id="h-prod">Productions</h2></div></div>
      <div class="eb-ch-main">
        <article class="eb-prod eb-rv" id="dilon-ka-raja">
          <div class="eb-photo"><span class="eb-ph">Dharamraobaba Atram — Dilon Ka Raja</span><img src="assets/home/dharamraobaba-atram.jpg" alt="Poster of Dharamraobaba Atram — Dilon Ka Raja" loading="lazy" onerror="this.remove()"><span class="eb-tag">Docu-drama · 2024</span></div>
          <div class="eb-prod-body">
            <small>Released on JioCinema</small>
            <h3>Dharamraobaba Atram — Dilon Ka Raja</h3>
            <p>The journey of a remarkable individual who rose to become the king of Aheri, a tribal state — overcoming early adversity to transform the lives of tribal communities across Gadchiroli, Maharashtra.</p>
            <p class="eb-slogan">“Jal, Jungle aur Zameen Hamara Hai”<span>Water, Forest, and Land are Ours</span></p>
            <div class="eb-badges">
              <span class="is-award">★ Best Indian Documentary — CineDreams International Film Festival 2024</span>
              <span>Trailer launched at the Taj, Mumbai</span>
            </div>
          </div>
        </article>
        <article class="eb-prod is-flip eb-rv" id="operation-amg">
          <div class="eb-photo"><span class="eb-ph">Operation AMG</span><img src="assets/archive/2023/08/Operation-AMG-5-1024x550.jpg" alt="Operation AMG — film poster" loading="lazy" onerror="this.remove()"><span class="eb-tag">Feature film</span></div>
          <div class="eb-prod-body">
            <small>Inspired by a true story</small>
            <h3>Operation AMG</h3>
            <p>A film inspired by the true story of “Operation Ganga” — India's courageous mission to rescue its citizens from Ukraine. Produced by Nitu Joshi.</p>
            <p>In July 2023, the Ebina team presented the film's official poster to Maharashtra's then Deputy Chief Minister Devendra Fadnavis, and the team was commended for its research and ground-level work on the story.</p>
            <div class="eb-badges">
              <span>Producer — Nitu Joshi</span>
              <span>Cinematography — Ravi Yadav</span>
            </div>
          </div>
        </article>
      </div>
    </section>

    <!-- 04 JOURNEY -->
    <section class="eb-ch" id="journey" aria-labelledby="h-journey">
      <div class="eb-ch-side"><div class="eb-sticky"><span class="eb-num eb-rv eb-rv--zoom" aria-hidden="true">04</span><h2 class="eb-split" id="h-journey">The journey</h2></div></div>
      <div class="eb-ch-main">
        <p class="eb-text eb-rv">Ebina Entertainment carries forward a production journey that began more than 25 years ago.</p>
        <div class="eb-steps">
          <div class="eb-rail" aria-hidden="true"></div>
          <div class="eb-step eb-rv eb-rv--left"><b>1998</b><div><h3>The beginning</h3><p>The journey in entertainment begins with Aayush Telefilms and Vedansh Entertainment — family-oriented television and film content.</p></div></div>
          <div class="eb-step eb-rv eb-rv--left"><b>2010</b><div><h3>Bhunsaara — Roshni Ki Pehli Kiran</h3><p>Vedansh Entertainment's debut feature film, directed by Chander Behl.</p></div></div>
          <div class="eb-step eb-rv eb-rv--left"><b>2018</b><div><h3>Yaksh</h3><p>A thriller starring Nitish Bharadwaj, directed by Mukul Abhyankar.</p></div></div>
          <div class="eb-step eb-rv eb-rv--left"><b>2023</b><div><h3>Operation AMG</h3><p>The poster of the film inspired by Operation Ganga is presented in Maharashtra.</p></div></div>
          <div class="eb-step is-key eb-rv eb-rv--left"><b>2024</b><div><h3>Dharamraobaba Atram — Dilon Ka Raja</h3><p>Released on JioCinema and honoured as Best Indian Documentary at CineDreams International Film Festival 2024.</p></div></div>
        </div>
      </div>
    </section>

    <!-- 05 GROUP -->
    <section class="eb-ch" id="group" aria-labelledby="h-group">
      <div class="eb-ch-side"><div class="eb-sticky"><span class="eb-num eb-rv eb-rv--zoom" aria-hidden="true">05</span><h2 class="eb-split" id="h-group">The Ebina Group</h2></div></div>
      <div class="eb-ch-main">
        <p class="eb-text eb-rv">Brands and initiatives connected with Ebina Entertainment and Nitu Joshi.</p>
        <div class="eb-group">
          <a href="professional.php#film-media" class="eb-brand eb-rv eb-rv--zoom"><div class="eb-brand-top"><span>01</span><span aria-hidden="true">→</span></div><div><h3>Vedansh Entertainment</h3><small>Feature films</small></div></a>
          <a href="professional.php#serials" class="eb-brand eb-rv eb-rv--zoom"><div class="eb-brand-top"><span>02</span><span aria-hidden="true">→</span></div><div><h3>Aayush Telefilms</h3><small>Television serials</small></div></a>
          <div class="eb-brand eb-rv eb-rv--zoom"><div class="eb-brand-top"><span>03</span></div><div><h3>FX Fantasy Studio</h3><small>Post-production &amp; VFX</small></div></div>
          <a href="http://ebinajewel.com/" target="_blank" rel="noopener" class="eb-brand eb-rv eb-rv--zoom"><div class="eb-brand-top"><span>04</span><span aria-hidden="true">↗</span></div><div><h3>Ebina Jewel</h3><small>Jewellery design</small></div></a>
          <a href="http://ebinahotel.com/" target="_blank" rel="noopener" class="eb-brand eb-rv eb-rv--zoom"><div class="eb-brand-top"><span>05</span><span aria-hidden="true">↗</span></div><div><h3>Ebina Hotel</h3><small>Hospitality</small></div></a>
          <a href="https://www.miamcharitabletrust.com/" target="_blank" rel="noopener" class="eb-brand eb-rv eb-rv--zoom"><div class="eb-brand-top"><span>06</span><span aria-hidden="true">↗</span></div><div><h3>MIAM Charitable Trust</h3><small>Social impact</small></div></a>
        </div>
      </div>
    </section>
  </div>
</main>

<section class="eb-cta" aria-label="Continue">
  <div class="eb-cta-in">
    <div><small class="eb-rv">Ebina Entertainment</small><h2 class="eb-split">Explore the studio's work.</h2></div>
    <div class="eb-hero-btns eb-rv eb-rv--right">
      <a href="https://ebinaentertainment.com/" target="_blank" rel="noopener" class="eb-btn eb-btn-orange">Visit ebinaentertainment.com <span aria-hidden="true">↗</span></a>
      <a href="professional.php" class="eb-btn eb-btn-line">Our Professional Journey <span aria-hidden="true">→</span></a>
    </div>
  </div>
</section>

<footer class="eb-footer">
  <span>© Nitu Joshi · Official website</span>
  <span style="display:flex;flex-wrap:wrap;gap:20px">
    <a href="https://instagram.com/nitujoshiofficial">Instagram</a>
    <a href="https://linkedin.com/in/nitu-joshi">LinkedIn</a>
    <a href="https://facebook.com/nitu.joshi1">Facebook</a>
    <a href="https://x.com/nitujoshi_india">X</a>
  </span>
</footer>

<script>
(function () {
  // keep the section bar under the site header (if the header is sticky) and highlight the current section
  var header = document.querySelector("body header"), sub = document.querySelector(".eb-sub");
  function placeBars() {
    if (!header || !sub) return;
    var pos = getComputedStyle(header).position;
    if (pos !== "sticky" && pos !== "fixed") return;
    var h = header.offsetHeight, total = h + sub.offsetHeight;
    sub.style.top = h + "px";
    document.querySelectorAll(".eb-ch, .eb-prod").forEach(function (c) { c.style.scrollMarginTop = total + 24 + "px"; });
    document.querySelectorAll(".eb-ch-side .eb-sticky").forEach(function (c) { c.style.top = total + 28 + "px"; });
  }
  placeBars(); window.addEventListener("resize", placeBars);
  if (header) header.addEventListener("transitionend", placeBars);

  var links = Array.prototype.slice.call(document.querySelectorAll(".eb-sub a"));
  if ("IntersectionObserver" in window && links.length) {
    var byId = {};
    links.forEach(function (a) { byId[a.getAttribute("href").slice(1)] = a; });
    var nav = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (!e.isIntersecting) return;
        links.forEach(function (a) { a.classList.remove("is-active"); a.removeAttribute("aria-current"); });
        var a = byId[e.target.id];
        if (a) { a.classList.add("is-active"); a.setAttribute("aria-current", "true"); a.parentNode.scrollLeft = Math.max(0, a.offsetLeft - 20); }
      });
    }, { rootMargin: "-45% 0px -50% 0px" });
    Object.keys(byId).forEach(function (id) { var s = document.getElementById(id); if (s) nav.observe(s); });
  }

  if (!document.documentElement.classList.contains("js")) return; // reduced motion: page shows as is

  // headings rise word by word
  document.querySelectorAll(".eb-split").forEach(function (el) {
    var words = el.textContent.trim().split(/\s+/);
    el.setAttribute("aria-label", words.join(" "));
    el.textContent = "";
    words.forEach(function (w, i) {
      var o = document.createElement("span"), n = document.createElement("span");
      o.className = "eb-w"; o.setAttribute("aria-hidden", "true");
      n.textContent = w; n.style.setProperty("--d", i * 0.08 + "s");
      o.appendChild(n); el.appendChild(o);
      if (i < words.length - 1) el.appendChild(document.createTextNode(" "));
    });
  });

  // numbers count up
  var counters = [];
  document.querySelectorAll(".eb-fact b").forEach(function (b) {
    var t = b.firstChild, n = t && parseInt(t.nodeValue, 10);
    if (!n || n < 2) return;
    counters.push({ node: t, to: n, el: b }); t.nodeValue = "0";
  });
  function count(c) {
    var start = null;
    function step(ts) {
      if (start === null) start = ts;
      var p = Math.min(1, (ts - start) / 1700);
      c.node.nodeValue = String(Math.round(c.to * (1 - Math.pow(1 - p, 3))));
      if (p < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  var targets = document.querySelectorAll(".eb-rv, .eb-label, .eb-split, .eb-fact b");
  function reveal(el, delay) {
    if (el.classList.contains("is-in")) return;
    if (delay && !el.style.getPropertyValue("--d")) el.style.setProperty("--d", delay + "s");
    el.classList.add("is-in");
    counters.forEach(function (c) { if (c.el === el) setTimeout(function () { count(c); }, Math.max(300, 2200 - performance.now())); });
  }
  if (!("IntersectionObserver" in window)) {
    targets.forEach(function (el) { reveal(el, 0); });
  } else {
    var io = new IntersectionObserver(function (entries) {
      entries.filter(function (e) { return e.isIntersecting; }).forEach(function (e, i) {
        reveal(e.target, Math.min(i * 0.09, 0.6)); io.unobserve(e.target);
      });
    }, { rootMargin: "0px 0px -10% 0px", threshold: 0.12 });
    targets.forEach(function (el) { io.observe(el); });
  }

  // scroll progress, gentle hero parallax, journey rail grows with scroll
  var bar = document.querySelector(".eb-progress"), hero = document.querySelector(".eb-hero"),
    heroText = document.querySelector(".eb-hero-text"), glance = document.querySelector(".eb-glance"),
    steps = document.querySelector(".eb-steps"), rail = document.querySelector(".eb-rail"), ticking = false;
  function onScroll() {
    var y = window.scrollY, vh = window.innerHeight, max = document.documentElement.scrollHeight - vh;
    if (bar) bar.style.transform = "scaleX(" + (max > 0 ? y / max : 0) + ")";
    if (hero && y < hero.offsetHeight) {
      if (heroText) { heroText.style.translate = "0 " + y * 0.18 + "px"; heroText.style.opacity = String(Math.max(0, 1 - y / (hero.offsetHeight * 0.9))); }
      if (glance) glance.style.translate = "0 " + y * -0.08 + "px";
    }
    if (steps && rail) {
      var r = steps.getBoundingClientRect(), p = (vh * 0.75 - r.top) / r.height;
      rail.style.transform = "scaleY(" + Math.max(0, Math.min(1, p)) + ")";
    }
    ticking = false;
  }
  window.addEventListener("scroll", function () { if (!ticking) { ticking = true; requestAnimationFrame(onScroll); } }, { passive: true });
  window.addEventListener("resize", onScroll);
  onScroll();
})();
</script>
<script src="assets/nav.js"></script>
</body>
</html>