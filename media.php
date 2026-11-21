<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nitu Joshi — Media</title>
<meta name="description" content="Press coverage of Nitu Joshi across social work, film and enterprise — Mid-Day, DNA Hindi, Business Standard, News 24, The Hans India and more.">
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

/* ---------- load animations ---------- */
@keyframes mdRise{from{transform:translateY(108%)}to{transform:none}}
@keyframes mdFade{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:none}}
@keyframes mdLine{from{transform:scaleX(0)}to{transform:scaleX(1)}}
@keyframes mdPanel{from{transform:translateX(100%)}to{transform:none}}
.md-mask{overflow:hidden;display:block;padding-bottom:.16em;margin-bottom:-.16em}
.md-mask>span{display:block;animation:mdRise 1.2s cubic-bezier(.2,.75,.1,1) both}
.md-fade{animation:mdFade 1s cubic-bezier(.2,.75,.1,1) both}
.md-line{transform-origin:left;animation:mdLine 1.4s cubic-bezier(.7,0,.2,1) both}

/* ---------- scroll reveals (translate/scale props, so hover transforms keep working) ---------- */
@keyframes rvUp{from{opacity:0;translate:0 46px}to{opacity:1;translate:0 0}}
@keyframes rvZoom{from{opacity:0;scale:.88;translate:0 24px}to{opacity:1;scale:1;translate:0 0}}
@keyframes rvWord{from{translate:0 110%}to{translate:0 0}}
.js .md-rv{opacity:0}
.js .md-rv.is-in{animation:rvUp 1s cubic-bezier(.2,.7,.1,1) var(--d,0s) both}
.js .md-rv--zoom.is-in{animation-name:rvZoom}
.md-w{display:inline-block;overflow:hidden;vertical-align:bottom;padding:0 .08em .14em 0;margin:0 -.08em -.14em 0}
.md-w>span{display:inline-block;translate:0 110%}
.md-split.is-in .md-w>span{animation:rvWord .95s cubic-bezier(.2,.7,.1,1) var(--d,0s) both}
.md-progress{display:none}
.js .md-progress{display:block;position:fixed;left:0;right:0;top:0;z-index:150;height:3px;background:var(--orange);transform:scaleX(0);transform-origin:left;pointer-events:none}
main{overflow-x:clip}

/* ---------- hero ---------- */
.md-hero{position:relative;overflow:hidden;background:var(--royal);color:var(--white)}
.md-hero-panel{position:absolute;top:0;right:0;bottom:0;width:36%;background:var(--silver);animation:mdPanel 1.3s cubic-bezier(.7,0,.2,1) both}
.md-quote-mark{position:absolute;right:4%;bottom:-120px;font-family:'Cormorant Garamond',serif;font-size:520px;line-height:1;color:#173A70;opacity:.12;pointer-events:none;user-select:none}
.md-hero-in{position:relative;max-width:1440px;margin:0 auto;padding:clamp(56px,8vw,120px) clamp(20px,4vw,56px) clamp(72px,8vw,120px);display:flex;flex-wrap:wrap;align-items:center;gap:48px clamp(40px,6vw,96px)}
.md-hero-text{flex:999 1 560px;min-width:0;display:flex;flex-direction:column;gap:24px}
.md-eyebrow{display:flex;align-items:center;gap:14px;margin:0;font-size:12px;font-weight:500;line-height:1.8;letter-spacing:.28em;text-transform:uppercase;color:var(--silver)}
.md-eyebrow::before{content:"";flex-shrink:0;width:36px;height:2px;background:var(--orange)}
.md-hero h1{margin:0;font-family:'Cormorant Garamond',serif;font-weight:700;font-size:clamp(56px,7.4vw,112px);line-height:.95;color:var(--white)}
.md-hero h1 em{display:block;font-style:italic;font-weight:500;font-size:.55em;line-height:1.1;color:var(--silver)}
.md-hero-lead{margin:0;max-width:620px;font-size:19px;line-height:1.7;color:#DCE3EC}

.md-latest{position:relative;flex:1 1 300px;min-width:0;max-width:400px;margin:0 auto;background:var(--white);color:var(--ink);box-shadow:0 30px 60px -34px rgba(16,42,82,.6);border-top:3px solid var(--orange)}
.md-latest p{margin:0;padding:20px 26px 6px;font-size:12px;font-weight:600;letter-spacing:.24em;text-transform:uppercase;color:var(--muted)}
.md-latest ol{list-style:none;margin:0;padding:4px 0 10px}
.md-latest a{display:block;padding:12px 26px;text-decoration:none;transition:background-color .35s,padding-left .45s cubic-bezier(.2,.75,.1,1)}
.md-latest a:hover{background:var(--soft);padding-left:34px}
.md-latest b{display:block;font-family:'Cormorant Garamond',serif;font-size:23px;font-weight:700;color:var(--royal)}
.md-latest span{display:block;margin-top:2px;font-size:12px;letter-spacing:.12em;text-transform:uppercase;color:var(--orange-btn)}

/* facts */
.md-facts{max-width:1440px;margin:0 auto;padding:0 clamp(20px,4vw,56px)}
.md-facts-in{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));margin-top:-48px;position:relative;background:var(--white);box-shadow:0 30px 60px -40px rgba(16,42,82,.45)}
.md-fact{padding:24px 26px;border-right:1px solid #E3E8EF}
.md-fact:last-child{border-right:0}
.md-fact b{display:block;font-family:'Cormorant Garamond',serif;font-size:46px;font-weight:700;line-height:1;color:var(--royal);font-variant-numeric:tabular-nums}
.md-fact span{display:block;margin-top:8px;font-size:14px;line-height:1.45;color:var(--body)}
@media (max-width:900px){.md-facts-in{grid-template-columns:repeat(2,minmax(0,1fr));margin-top:-32px}.md-fact:nth-child(2){border-right:0}.md-fact:nth-child(-n+2){border-bottom:1px solid #E3E8EF}}

/* filter bar */
.md-bar{position:sticky;top:0;z-index:30;margin-top:clamp(40px,5vw,64px);background:rgba(245,247,250,.94);-webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px);border-bottom:1px solid var(--line)}
.md-bar-in{max-width:1440px;margin:0 auto;padding:12px clamp(20px,4vw,56px);display:flex;align-items:center;gap:10px;overflow-x:auto;scrollbar-width:none}
.md-bar-in::-webkit-scrollbar{display:none}
.md-bar-in > span{flex-shrink:0;margin-right:6px;font-size:12px;font-weight:600;letter-spacing:.2em;text-transform:uppercase;color:var(--muted)}
.md-chip{flex-shrink:0;display:inline-flex;align-items:center;gap:8px;min-height:40px;padding:0 16px;border:1px solid #CBD3DD;border-radius:999px;background:var(--white);font:500 13px Jost,sans-serif;letter-spacing:.06em;color:var(--royal);cursor:pointer;transition:background-color .35s,color .35s,border-color .35s}
.md-chip i{font-style:normal;font-size:12px;color:var(--muted);transition:color .35s}
.md-chip:hover{border-color:var(--royal)}
.md-chip[aria-pressed="true"]{background:var(--royal);border-color:var(--royal);color:var(--white)}
.md-chip[aria-pressed="true"] i{color:var(--silver)}

/* years + stories */
.md-wrap{max-width:1440px;margin:0 auto;padding:0 clamp(20px,4vw,56px)}
.md-year{padding:clamp(56px,7vw,96px) 0;display:flex;flex-wrap:wrap;gap:28px clamp(40px,6vw,96px)}
.md-year + .md-year{border-top:1px solid var(--line)}
.md-year[hidden]{display:none}
.md-year-side{flex:1 1 220px;min-width:0}
.md-year-side .md-sticky{position:sticky;top:150px;display:flex;flex-direction:column;gap:6px}
.md-year-num{font-family:'Cormorant Garamond',serif;font-size:clamp(72px,8vw,112px);font-weight:700;line-height:.85;color:transparent;-webkit-text-stroke:1.5px var(--orange)}
.md-year-side small{font-size:12px;font-weight:600;letter-spacing:.22em;text-transform:uppercase;color:var(--muted)}
.md-grid{flex:999 1 640px;min-width:0;display:grid;grid-template-columns:repeat(auto-fill,minmax(270px,1fr));gap:16px;align-content:start}

.md-story{position:relative;display:flex;flex-direction:column;gap:16px;padding:26px 24px 24px;background:var(--white);border:1px solid #DCE2EA;text-decoration:none;color:var(--ink);scroll-margin-top:150px;transition:transform .6s cubic-bezier(.2,.75,.1,1),box-shadow .6s,border-color .6s,opacity .4s}
.md-story:hover{transform:translateY(-6px);border-color:var(--royal);box-shadow:0 26px 50px -32px rgba(16,42,82,.45);color:var(--ink)}
.md-story[hidden]{display:none}
.md-story:target{border-color:var(--orange);box-shadow:0 0 0 3px rgba(201,121,47,.25)}
.md-story-top{display:flex;align-items:center;justify-content:space-between;gap:12px}
.md-mono{flex-shrink:0;width:48px;height:48px;border-radius:999px;background:var(--royal);color:var(--white);display:flex;align-items:center;justify-content:center;font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:700;transition:background-color .5s}
.md-story:hover .md-mono{background:var(--orange)}
.md-tag{padding:5px 10px;background:var(--soft);border:1px solid #DCE2EA;font-size:11px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;color:var(--royal)}
.md-story h3{margin:0;font-family:'Cormorant Garamond',serif;font-size:30px;font-weight:700;line-height:1.05;color:var(--royal)}
.md-story hr{width:40px;height:2px;margin:-4px 0 0;border:0;background:var(--orange);transition:width .6s cubic-bezier(.2,.75,.1,1)}
.md-story:hover hr{width:100%}
.md-story p{margin:0;flex-grow:1;font-size:16px;line-height:1.6;color:var(--body)}
.md-meta{display:flex;align-items:center;justify-content:space-between;gap:12px;padding-top:14px;border-top:1px solid #EEF1F5;font-size:12px;letter-spacing:.12em;text-transform:uppercase}
.md-meta time{color:var(--orange-btn);font-weight:600}
.md-meta span{display:inline-flex;align-items:center;gap:6px;color:var(--royal);font-weight:600}
.md-meta span i{font-style:normal;transition:transform .45s cubic-bezier(.2,.75,.1,1)}
.md-story:hover .md-meta span i{transform:translate(3px,-3px)}
.md-empty{display:none;padding:64px 0;text-align:center;font-size:17px;color:var(--muted)}

/* enquiries */
.md-cta{background:var(--royal);color:var(--white)}
.md-cta-in{max-width:1440px;margin:0 auto;padding:clamp(56px,7vw,96px) clamp(20px,4vw,56px);display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:28px}
.md-cta small{display:flex;align-items:center;gap:12px;font-size:12px;font-weight:500;letter-spacing:.24em;text-transform:uppercase;color:var(--silver)}
.md-cta small::before{content:"";width:28px;height:2px;background:var(--orange)}
.md-cta h2{margin:12px 0 0;font-family:'Cormorant Garamond',serif;font-size:clamp(38px,4.6vw,64px);font-weight:600;line-height:1.02}
.md-btns{display:flex;flex-wrap:wrap;gap:12px}
.md-btn{display:inline-flex;align-items:center;gap:12px;min-height:52px;padding:0 24px;font-size:13px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;text-decoration:none;transition:background-color .4s,color .4s,border-color .4s,transform .4s cubic-bezier(.2,.75,.1,1)}
.md-btn:hover{transform:translateY(-3px)}
.md-btn-orange{background:var(--orange-btn);color:var(--white)}
.md-btn-orange:hover{background:#8F4E0B;color:var(--white)}
.md-btn-line{border:1px solid var(--silver);color:var(--white)}
.md-btn-line:hover{background:var(--white);border-color:var(--white);color:var(--royal)}

.md-footer{display:flex;flex-wrap:wrap;justify-content:space-between;gap:12px 24px;padding:22px clamp(20px,5vw,72px);background:var(--royal-deep);color:#DCE3EC;font-size:12px;letter-spacing:.2em;text-transform:uppercase;border-top:1px solid var(--silver)}
.md-footer a{color:#DCE3EC}
.md-footer a:hover{color:var(--white)}

@media (max-width:900px){
  .md-eyebrow{letter-spacing:.18em}
  .md-hero-panel{width:100%;top:auto;height:34%}
  .md-quote-mark{display:none}
  .md-year-side .md-sticky{position:static;flex-direction:row;align-items:baseline;gap:16px}
}
@media (prefers-reduced-motion:reduce){*,*::before,*::after{animation:none!important;transition:none!important}html{scroll-behavior:auto}}
</style>
</head>
<body>
<div class="md-progress" aria-hidden="true"></div>

<?php $active = 'media'; include __DIR__ . '/partials/header.php'; ?>

<main>
  <!-- HERO -->
  <section class="md-hero" aria-labelledby="md-title">
    <div class="md-hero-panel" aria-hidden="true"></div>
    <span class="md-quote-mark" aria-hidden="true">“</span>
    <div class="md-hero-in">
      <div class="md-hero-text">
        <p class="md-eyebrow md-fade" style="animation-delay:.2s">Press &amp; Coverage</p>
        <h1 id="md-title">
          <span class="md-mask"><span style="animation-delay:.3s">Media</span></span>
          <span class="md-mask"><span style="animation-delay:.45s"><em>In the news.</em></span></span>
        </h1>
        <div class="md-line" style="width:120px;height:2px;background:var(--orange);animation-delay:.9s"></div>
        <p class="md-hero-lead md-fade" style="animation-delay:1s">A selection of press coverage across social work, film and enterprise — from award recognition and festival appearances to profiles of the work behind MIAM Charitable Trust.</p>
      </div>
      <nav class="md-latest md-fade" style="animation-delay:.7s" aria-label="Latest coverage">
        <p>Latest coverage</p>
        <ol>
          <li><a href="#first-india"><b>First India</b><span>Founder profile · Apr 2024</span></a></li>
          <li><a href="#dailymail-express"><b>Daily Mail Express</b><span>Student support · Mar 2024</span></a></li>
          <li><a href="#hans-india"><b>The Hans India</b><span>Film · Mar 2024</span></a></li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- AT A GLANCE -->
  <div class="md-facts">
    <div class="md-facts-in md-fade" style="animation-delay:1.2s" role="list" aria-label="Coverage at a glance">
      <div class="md-fact" role="listitem"><b>9</b><span>Stories in the press</span></div>
      <div class="md-fact" role="listitem"><b>9</b><span>Publications &amp; platforms</span></div>
      <div class="md-fact" role="listitem"><b>3</b><span>Themes — social work, film &amp; profiles</span></div>
      <div class="md-fact" role="listitem"><b>2</b><span>Years of coverage, 2023–2024</span></div>
    </div>
  </div>

  <!-- FILTER BAR -->
  <div class="md-bar" role="toolbar" aria-label="Filter coverage">
    <div class="md-bar-in">
      <span>Show</span>
      <button type="button" class="md-chip" data-filter="all" aria-pressed="true">All <i>9</i></button>
      <button type="button" class="md-chip" data-filter="social" aria-pressed="false">Social work <i>3</i></button>
      <button type="button" class="md-chip" data-filter="film" aria-pressed="false">Film <i>4</i></button>
      <button type="button" class="md-chip" data-filter="profile" aria-pressed="false">Profiles <i>2</i></button>
    </div>
  </div>

  <div class="md-wrap">
    <!-- 2024 -->
    <section class="md-year" aria-labelledby="y-2024">
      <div class="md-year-side"><div class="md-sticky"><span class="md-year-num md-rv md-rv--zoom" id="y-2024">2024</span><small class="md-rv">7 stories</small></div></div>
      <div class="md-grid">
        <!-- Replace each href="#" with the article's link -->
        <a href="#" id="first-india" class="md-story md-rv" data-cat="profile">
          <div class="md-story-top"><span class="md-mono" aria-hidden="true">FI</span><span class="md-tag">Profile</span></div>
          <h3>First India</h3><hr>
          <p>Founder profile</p>
          <div class="md-meta"><time datetime="2024-04-04">Apr 4, 2024</time><span>Read <i aria-hidden="true">↗</i></span></div>
        </a>
        <a href="#" id="dailymail-express" class="md-story md-rv" data-cat="social">
          <div class="md-story-top"><span class="md-mono" aria-hidden="true">DM</span><span class="md-tag">Social work</span></div>
          <h3>Daily Mail Express</h3><hr>
          <p>Miam Charitable Trust supports student success in rural India</p>
          <div class="md-meta"><time datetime="2024-03-20">Mar 20, 2024</time><span>Read <i aria-hidden="true">↗</i></span></div>
        </a>
        <a href="#" id="hans-india" class="md-story md-rv" data-cat="film">
          <div class="md-story-top"><span class="md-mono" aria-hidden="true">HI</span><span class="md-tag">Film</span></div>
          <h3>The Hans India</h3><hr>
          <p>The film narrative about a Maharashtra minister</p>
          <div class="md-meta"><time datetime="2024-03-02">Mar 2, 2024</time><span>Read <i aria-hidden="true">↗</i></span></div>
        </a>
        <a href="#" id="business-standard" class="md-story md-rv" data-cat="film">
          <div class="md-story-top"><span class="md-mono" aria-hidden="true">BS</span><span class="md-tag">Film</span></div>
          <h3>Business Standard</h3><hr>
          <p>Trailer launch coverage</p>
          <div class="md-meta"><time datetime="2024-03-01">Mar 1, 2024</time><span>Read <i aria-hidden="true">↗</i></span></div>
        </a>
        <a href="#" id="imdb" class="md-story md-rv" data-cat="film">
          <div class="md-story-top"><span class="md-mono" aria-hidden="true">IM</span><span class="md-tag">Film</span></div>
          <h3>IMDb</h3><hr>
          <p>Film trailer launch featuring Praful Patel</p>
          <div class="md-meta"><time datetime="2024-02-03">Feb 3, 2024</time><span>Read <i aria-hidden="true">↗</i></span></div>
        </a>
        <a href="#" id="dna-hindi" class="md-story md-rv" data-cat="social">
          <div class="md-story-top"><span class="md-mono" aria-hidden="true">DNA</span><span class="md-tag">Social work</span></div>
          <h3>DNA Hindi</h3><hr>
          <p>Educational initiatives for tribal children</p>
          <div class="md-meta"><time datetime="2024-01-16">Jan 16, 2024</time><span>Read <i aria-hidden="true">↗</i></span></div>
        </a>
        <a href="#" id="mid-day" class="md-story md-rv" data-cat="profile">
          <div class="md-story-top"><span class="md-mono" aria-hidden="true">MD</span><span class="md-tag">Profile</span></div>
          <h3>Mid-Day</h3><hr>
          <p>A profile of her business and social entrepreneurship</p>
          <div class="md-meta"><time datetime="2024-01-05">Jan 5, 2024</time><span>Read <i aria-hidden="true">↗</i></span></div>
        </a>
      </div>
    </section>

    <!-- 2023 -->
    <section class="md-year" aria-labelledby="y-2023">
      <div class="md-year-side"><div class="md-sticky"><span class="md-year-num md-rv md-rv--zoom" id="y-2023">2023</span><small class="md-rv">2 stories</small></div></div>
      <div class="md-grid">
        <a href="#" id="news24" class="md-story md-rv" data-cat="film">
          <div class="md-story-top"><span class="md-mono" aria-hidden="true">N24</span><span class="md-tag">Film</span></div>
          <h3>News 24 Think First</h3><hr>
          <p>Participation in the Goa Film Festival</p>
          <div class="md-meta"><time datetime="2023-11-29">Nov 29, 2023</time><span>Read <i aria-hidden="true">↗</i></span></div>
        </a>
        <a href="#" id="sangri-times" class="md-story md-rv" data-cat="social">
          <div class="md-story-top"><span class="md-mono" aria-hidden="true">ST</span><span class="md-tag">Social work</span></div>
          <h3>Sangri Times</h3><hr>
          <p>Award recognition for her social work contributions</p>
          <div class="md-meta"><time datetime="2023-11-23">Nov 23, 2023</time><span>Read <i aria-hidden="true">↗</i></span></div>
        </a>
      </div>
    </section>

    <p class="md-empty" id="md-empty">No stories in this category yet.</p>
  </div>
</main>

<section class="md-cta" aria-label="Media enquiries">
  <div class="md-cta-in">
    <div><small class="md-rv">Media enquiries</small><h2 class="md-split">Working on a story?</h2></div>
    <div class="md-btns md-rv">
      <a href="contact.php" class="md-btn md-btn-orange">Get in touch <span aria-hidden="true">→</span></a>
      <a href="awards.php" class="md-btn md-btn-line">See awards <span aria-hidden="true">→</span></a>
    </div>
  </div>
</section>

<footer class="md-footer">
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
  // keep the filter bar under the site header (if the header is sticky)
  var header = document.querySelector("body header"), bar = document.querySelector(".md-bar");
  function placeBar() {
    if (!header || !bar) return;
    var pos = getComputedStyle(header).position;
    if (pos !== "sticky" && pos !== "fixed") return;
    var h = header.offsetHeight, total = h + bar.offsetHeight;
    bar.style.top = h + "px";
    document.querySelectorAll(".md-story").forEach(function (s) { s.style.scrollMarginTop = total + 24 + "px"; });
    document.querySelectorAll(".md-year-side .md-sticky").forEach(function (s) { s.style.top = total + 28 + "px"; });
  }
  placeBar(); window.addEventListener("resize", placeBar);
  if (header) header.addEventListener("transitionend", placeBar);
  // arriving with a link like media.php#mid-day: line the card up below the header + filter bar
  window.addEventListener("load", function () {
    var t = location.hash && document.querySelector(location.hash);
    if (!t || !t.classList.contains("md-story")) return;
    placeBar();
    var m = parseFloat(getComputedStyle(t).scrollMarginTop) || 0;
    var y = 0, el = t; while (el) { y += el.offsetTop; el = el.offsetParent; } // layout position, ignores the reveal slide-in
    window.scrollTo({ top: y - m, behavior: "instant" });
  });

  // links that are still "#" open nothing yet; real links open in a new tab
  document.querySelectorAll(".md-story").forEach(function (a) {
    if (a.getAttribute("href") === "#") {
      a.addEventListener("click", function (e) { e.preventDefault(); });
    } else {
      a.target = "_blank"; a.rel = "noopener";
    }
  });

  // filter chips
  var chips = document.querySelectorAll(".md-chip"), stories = document.querySelectorAll(".md-story"),
    years = document.querySelectorAll(".md-year"), empty = document.getElementById("md-empty");
  chips.forEach(function (chip) {
    chip.addEventListener("click", function () {
      var f = chip.getAttribute("data-filter"), shown = 0;
      chips.forEach(function (c) { c.setAttribute("aria-pressed", c === chip ? "true" : "false"); });
      stories.forEach(function (s) {
        var on = f === "all" || s.getAttribute("data-cat") === f;
        s.hidden = !on;
        if (on) { shown++; s.classList.add("is-in"); }
      });
      years.forEach(function (y) {
        var n = y.querySelectorAll(".md-story:not([hidden])").length;
        y.hidden = n === 0;
        var label = y.querySelector(".md-year-side small");
        if (label) label.textContent = n + (n === 1 ? " story" : " stories");
      });
      if (empty) empty.style.display = shown ? "none" : "block";
    });
  });

  if (!document.documentElement.classList.contains("js")) return; // reduced motion: page shows as is

  // headings rise word by word
  document.querySelectorAll(".md-split").forEach(function (el) {
    var words = el.textContent.trim().split(/\s+/);
    el.setAttribute("aria-label", words.join(" "));
    el.textContent = "";
    words.forEach(function (w, i) {
      var o = document.createElement("span"), n = document.createElement("span");
      o.className = "md-w"; o.setAttribute("aria-hidden", "true");
      n.textContent = w; n.style.setProperty("--d", i * 0.08 + "s");
      o.appendChild(n); el.appendChild(o);
      if (i < words.length - 1) el.appendChild(document.createTextNode(" "));
    });
  });

  // numbers count up
  var counters = [];
  document.querySelectorAll(".md-fact b").forEach(function (b) {
    var n = parseInt(b.textContent, 10);
    if (n > 1) { counters.push({ el: b, to: n }); b.textContent = "0"; }
  });
  function count(c) {
    var start = null;
    function step(ts) {
      if (start === null) start = ts;
      var p = Math.min(1, (ts - start) / 1500);
      c.el.textContent = String(Math.round(c.to * (1 - Math.pow(1 - p, 3))));
      if (p < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  var targets = document.querySelectorAll(".md-rv, .md-split, .md-fact b");
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
        reveal(e.target, Math.min(i * 0.08, 0.6)); io.unobserve(e.target);
      });
    }, { rootMargin: "0px 0px -10% 0px", threshold: 0.12 });
    targets.forEach(function (el) { io.observe(el); });
  }
  // arriving from the Home page (media.php#mid-day): show that card straight away
  if (location.hash) { var t = document.querySelector(location.hash); if (t && t.classList.contains("md-story")) reveal(t, 0); }

  // scroll progress + gentle hero parallax
  var prog = document.querySelector(".md-progress"), hero = document.querySelector(".md-hero"),
    heroText = document.querySelector(".md-hero-text"), latest = document.querySelector(".md-latest"), ticking = false;
  function onScroll() {
    var y = window.scrollY, max = document.documentElement.scrollHeight - window.innerHeight;
    if (prog) prog.style.transform = "scaleX(" + (max > 0 ? y / max : 0) + ")";
    if (hero && y < hero.offsetHeight) {
      if (heroText) { heroText.style.translate = "0 " + y * 0.18 + "px"; heroText.style.opacity = String(Math.max(0, 1 - y / (hero.offsetHeight * 0.9))); }
      if (latest) latest.style.translate = "0 " + y * -0.08 + "px";
    }
    ticking = false;
  }
  window.addEventListener("scroll", function () { if (!ticking) { ticking = true; requestAnimationFrame(onScroll); } }, { passive: true });
  onScroll();
})();
</script>
<script src="assets/nav.js"></script>
</body>
</html>