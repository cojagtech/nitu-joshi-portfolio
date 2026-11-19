<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nitu Joshi — My Professional Journey</title>
<meta name="description" content="Nitu Joshi's professional journey — fashion, costume and jewellery design, film and television production with Ebina Entertainment, Vedansh Entertainment and Aayush Telefilms, and the Ebina ventures.">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&amp;family=Jost:wght@300;400;500;600&amp;display=swap">
<link rel="stylesheet" href="assets/header.css">
<style>
/* ===== Royal Silver theme + orange accent =====
   Royal #173A70 · deep #102A52 · Silver #BFC7D1 · Soft White #F5F7FA · White #FFFFFF · Orange #C9792F (hover #B2660F) */
:root{--royal:#173A70;--royal-deep:#102A52;--silver:#BFC7D1;--soft:#F5F7FA;--white:#FFFFFF;--ink:#11223F;--body:#3C4A61;--muted:#5A6A82;--orange:#C9792F;--orange-dk:#B2660F;--line:rgba(23,58,112,.14)}
*{box-sizing:border-box}
html{scroll-behavior:smooth}
body{margin:0;background:#F5F7FA}
a{color:#173A70}a:hover{color:#C9792F}
a:focus-visible,button:focus-visible{outline:2px solid var(--orange);outline-offset:3px}
img{display:block;max-width:100%}

/* ---------- header (unchanged from the current site) ---------- */
.pj-nav a{text-decoration:none;position:relative;padding:6px 0;color:#173A70}
.pj-nav a::after{content:"";position:absolute;left:0;right:0;bottom:0;height:1px;background:#C9792F;transform:scaleX(0);transform-origin:right;transition:transform .45s cubic-bezier(.2,.75,.1,1)}
.pj-nav a:hover::after{transform:scaleX(1);transform-origin:left}

/* ---------- animations ---------- */
@keyframes pjRise{from{transform:translateY(108%)}to{transform:none}}
@keyframes pjFade{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:none}}
@keyframes pjGrow{from{transform:scaleY(0)}to{transform:scaleY(1)}}
@keyframes pjLine{from{transform:scaleX(0)}to{transform:scaleX(1)}}
@keyframes pjPanel{from{transform:translateX(100%)}to{transform:none}}
.pj-mask{overflow:hidden;display:block;padding-bottom:.16em;margin-bottom:-.16em}
.pj-mask>span{display:block;animation:pjRise 1.2s cubic-bezier(.2,.75,.1,1) both}
.pj-fade{animation:pjFade 1s cubic-bezier(.2,.75,.1,1) both}
.pj-line{transform-origin:left;animation:pjLine 1.4s cubic-bezier(.7,0,.2,1) both}
@supports (animation-timeline: view()){
  .pj-rv{animation:pjFade linear both;animation-timeline:view();animation-range:entry 0% cover 26%}
  .pj-rail{transform-origin:top;animation:pjGrow linear both;animation-timeline:view();animation-range:entry 10% cover 70%}
}

/* ---------- hero ---------- */
.pj-hero{position:relative;overflow:hidden;background:var(--royal);color:var(--white)}
.pj-hero-panel{position:absolute;top:0;right:0;bottom:0;width:36%;background:var(--silver);animation:pjPanel 1.3s cubic-bezier(.7,0,.2,1) both}
.pj-hero-in{position:relative;max-width:1440px;margin:0 auto;padding:clamp(56px,8vw,120px) clamp(20px,4vw,56px) clamp(72px,8vw,120px);display:flex;flex-wrap:wrap;align-items:center;gap:48px clamp(40px,6vw,96px)}
.pj-hero-text{flex:999 1 560px;min-width:0;display:flex;flex-direction:column;gap:24px}
.pj-eyebrow{display:flex;align-items:center;gap:14px;margin:0;font-family:Jost,sans-serif;font-size:12px;font-weight:500;line-height:1.8;letter-spacing:.28em;text-transform:uppercase;color:var(--silver)}
.pj-eyebrow::before{content:"";flex-shrink:0;width:36px;height:2px;background:var(--orange)}
.pj-hero h1{margin:0;font-family:'Cormorant Garamond',serif;font-weight:600;font-size:clamp(48px,6.4vw,96px);line-height:.98;color:var(--white)}
.pj-hero h1 em{font-style:italic;font-weight:500;color:var(--silver)}
.pj-hero-lead{margin:0;max-width:640px;font-family:Jost,sans-serif;font-size:19px;font-weight:300;line-height:1.7;color:#DCE3EC}

.pj-index{flex:1 1 300px;min-width:0;max-width:400px;margin:0 auto;background:var(--white);box-shadow:0 30px 60px -34px rgba(16,42,82,.6);border-top:3px solid var(--orange)}
.pj-index p{margin:0;padding:20px 26px 6px;font-family:Jost,sans-serif;font-size:12px;font-weight:600;letter-spacing:.24em;text-transform:uppercase;color:var(--muted)}
.pj-index ol{list-style:none;margin:0;padding:6px 0 10px}
.pj-index a{display:flex;align-items:baseline;gap:18px;padding:14px 26px;text-decoration:none;color:var(--royal);font-family:'Cormorant Garamond',serif;font-size:26px;font-weight:600;transition:background-color .35s,padding-left .45s cubic-bezier(.2,.75,.1,1)}
.pj-index a span{font-size:18px;color:var(--orange);min-width:28px}
.pj-index a:hover{background:var(--soft);padding-left:34px;color:var(--royal)}

/* facts */
.pj-facts{max-width:1440px;margin:0 auto;padding:0 clamp(20px,4vw,56px)}
.pj-facts-in{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));margin-top:-48px;position:relative;background:var(--white);box-shadow:0 30px 60px -40px rgba(16,42,82,.45)}
.pj-fact{padding:24px 26px;border-right:1px solid #E3E8EF}
.pj-fact:last-child{border-right:0}
.pj-fact b{display:block;font-family:'Cormorant Garamond',serif;font-size:46px;font-weight:700;line-height:1;color:var(--royal)}
.pj-fact b i{font-style:normal;color:var(--orange)}
.pj-fact span{display:block;margin-top:8px;font-family:Jost,sans-serif;font-size:14px;line-height:1.45;color:var(--body)}
@media (max-width:900px){.pj-facts-in{grid-template-columns:repeat(2,minmax(0,1fr));margin-top:-32px}.pj-fact:nth-child(2){border-right:0}.pj-fact:nth-child(-n+2){border-bottom:1px solid #E3E8EF}}

/* chapter sub-nav */
.pj-sub{position:sticky;top:0;z-index:30;margin-top:clamp(40px,5vw,64px);background:rgba(245,247,250,.92);-webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px);border-bottom:1px solid var(--line)}
.pj-sub-in{max-width:1440px;margin:0 auto;padding:0 clamp(20px,4vw,56px);display:flex;gap:4px 30px;overflow-x:auto;scrollbar-width:none}
.pj-sub-in::-webkit-scrollbar{display:none}
.pj-sub a{position:relative;flex-shrink:0;padding:16px 0;font-family:Jost,sans-serif;font-size:12px;font-weight:500;letter-spacing:.18em;text-transform:uppercase;text-decoration:none;color:var(--muted);transition:color .3s}
.pj-sub a b{font-weight:600;color:var(--orange);margin-right:6px}
.pj-sub a::after{content:"";position:absolute;left:0;right:0;bottom:-1px;height:2px;background:var(--orange);transform:scaleX(0);transform-origin:left;transition:transform .45s cubic-bezier(.2,.75,.1,1)}
.pj-sub a:hover,.pj-sub a.is-active{color:var(--royal)}
.pj-sub a.is-active::after{transform:scaleX(1)}

/* ---------- chapters ---------- */
.pj-wrap{max-width:1440px;margin:0 auto;padding:0 clamp(20px,4vw,56px)}
.pj-ch{padding:clamp(64px,8vw,112px) 0;scroll-margin-top:56px;display:flex;flex-wrap:wrap;gap:28px clamp(40px,6vw,96px)}
.pj-ch + .pj-ch{border-top:1px solid var(--line)}
.pj-ch-side{flex:1 1 240px;min-width:0}
.pj-ch-side .pj-sticky{position:sticky;top:90px;display:flex;flex-direction:column;gap:10px}
.pj-num{font-family:'Cormorant Garamond',serif;font-size:88px;font-weight:700;line-height:.85;color:transparent;-webkit-text-stroke:1.5px var(--orange)}
.pj-ch-side h2{margin:0;font-family:'Cormorant Garamond',serif;font-size:clamp(38px,3.6vw,52px);font-weight:600;line-height:1.02;color:var(--royal)}
.pj-ch-main{flex:999 1 620px;min-width:0;display:flex;flex-direction:column;gap:28px;font-family:Jost,sans-serif;font-weight:300}
.pj-intro{margin:0;font-family:'Cormorant Garamond',serif;font-size:clamp(24px,2.3vw,30px);font-weight:500;line-height:1.4;color:var(--ink)}
.pj-label{display:flex;align-items:center;gap:12px;margin:0;font-size:12px;font-weight:600;letter-spacing:.24em;text-transform:uppercase;color:var(--royal)}
.pj-label::before{content:"";width:24px;height:2px;background:var(--orange)}

.pj-names{display:flex;flex-wrap:wrap;gap:10px}
.pj-name{padding:11px 18px;background:var(--white);border:1px solid var(--silver);font-size:15px;font-weight:500;color:var(--royal);transition:border-color .4s,transform .4s cubic-bezier(.2,.75,.1,1)}
.pj-name:hover{border-color:var(--orange);transform:translateY(-3px)}

/* venture cards */
.pj-cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:18px}
.pj-card{display:flex;flex-direction:column;background:var(--white);border:1px solid #DCE2EA;transition:transform .6s cubic-bezier(.2,.75,.1,1),box-shadow .6s,border-color .6s}
.pj-card:hover{transform:translateY(-6px);box-shadow:0 26px 50px -30px rgba(16,42,82,.45);border-color:var(--orange)}
.pj-card-img{position:relative;aspect-ratio:16/10;overflow:hidden;background:linear-gradient(150deg,#E9EDF2,#C9D1DB)}
.pj-card-img img{width:100%;height:100%;object-fit:cover;transition:transform 1.2s cubic-bezier(.2,.75,.1,1)}
.pj-card:hover .pj-card-img img{transform:scale(1.06)}
.pj-card-img .pj-ph{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:500;letter-spacing:.14em;text-transform:uppercase;color:var(--body)}
.pj-card-tag{position:absolute;left:14px;top:14px;padding:6px 10px;background:var(--royal);color:var(--white);font-size:11px;font-weight:500;letter-spacing:.14em;text-transform:uppercase}
.pj-card-body{display:flex;flex-direction:column;gap:12px;flex-grow:1;padding:22px 22px 24px}
.pj-card h3{margin:0;font-family:'Cormorant Garamond',serif;font-size:28px;font-weight:600;line-height:1.05;color:var(--royal)}
.pj-card p{margin:0;font-size:15px;line-height:1.65;color:var(--body);flex-grow:1}
.pj-more{align-self:flex-start;display:inline-flex;align-items:center;gap:10px;min-height:44px;padding:0 18px;border:1px solid var(--royal);color:var(--royal);font-size:12px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;text-decoration:none;transition:background-color .4s,color .4s,gap .4s}
.pj-more i{font-style:normal;color:var(--orange);transition:color .4s}
.pj-more:hover{background:var(--royal);color:var(--white);gap:14px}
.pj-more:hover i{color:var(--white)}

/* serials table */
.pj-tablecard{background:var(--white);border:1px solid #DCE2EA}
.pj-tablehead{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:10px 20px;padding:20px 24px;border-bottom:3px solid var(--orange)}
.pj-tablehead h3{margin:0;font-family:'Cormorant Garamond',serif;font-size:28px;font-weight:600;color:var(--royal)}
.pj-langs{display:flex;flex-wrap:wrap;gap:8px}
.pj-langs span{padding:6px 12px;background:var(--soft);border:1px solid #DCE2EA;font-size:12px;font-weight:500;letter-spacing:.1em;text-transform:uppercase;color:var(--royal)}
.pj-scroll{overflow-x:auto}
.pj-table{width:100%;min-width:520px;border-collapse:collapse;font-size:15px}
.pj-table th{padding:12px 24px;text-align:left;font-size:12px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;color:var(--muted);background:var(--soft)}
.pj-table td{padding:13px 24px;border-top:1px solid #E6EAF0;color:var(--body)}
.pj-table td:first-child{font-weight:500;color:var(--royal)}
.pj-table td:last-child,.pj-table th:last-child{text-align:right;font-variant-numeric:tabular-nums}
.pj-table tbody tr{transition:background-color .3s}
.pj-table tbody tr:hover{background:#F8F9FB}
.pj-table tr.is-featured td:first-child::after{content:"Featured";margin-left:10px;padding:3px 8px;border:1px solid var(--orange);font-size:10px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;color:var(--royal);vertical-align:2px}

/* films */
.pj-films{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:18px}
.pj-film{display:flex;flex-direction:column;gap:12px;padding:26px;background:var(--white);border:1px solid #DCE2EA;border-left:3px solid var(--orange)}
.pj-film.is-lead{grid-column:1 / -1;background:var(--royal);border-color:var(--royal);border-left-color:var(--orange);color:var(--white)}
.pj-film small{font-size:12px;font-weight:600;letter-spacing:.2em;text-transform:uppercase;color:var(--muted)}
.pj-film.is-lead small{color:var(--silver)}
.pj-film h4{margin:0;font-family:'Cormorant Garamond',serif;font-size:30px;font-weight:600;line-height:1.08;color:var(--royal)}
.pj-film.is-lead h4{font-size:clamp(32px,3.2vw,44px);color:var(--white)}
.pj-film p{margin:0;font-size:15px;line-height:1.7;color:var(--body)}
.pj-film.is-lead p{font-size:16px;color:#DCE3EC}
.pj-film .pj-slogan{margin:4px 0;padding:14px 18px;border-left:2px solid var(--orange);font-family:'Cormorant Garamond',serif;font-style:italic;font-size:24px;line-height:1.3;color:var(--white);background:rgba(255,255,255,.06)}
.pj-film .pj-slogan span{display:block;margin-top:4px;font-family:Jost,sans-serif;font-style:normal;font-size:13px;letter-spacing:.06em;color:var(--silver)}
.pj-cast{display:flex;flex-wrap:wrap;gap:6px}
.pj-cast span{padding:5px 10px;background:var(--soft);font-size:13px;color:var(--royal)}
.pj-film.is-lead .pj-cast span{background:rgba(255,255,255,.1);color:var(--white)}
@media (max-width:760px){.pj-films{grid-template-columns:minmax(0,1fr)}}

/* enterprise */
.pj-ent{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:18px}
.pj-ent-card{position:relative;display:flex;gap:20px;padding:28px;background:var(--white);border:1px solid #DCE2EA;overflow:hidden;transition:transform .6s cubic-bezier(.2,.75,.1,1),box-shadow .6s}
.pj-ent-card::after{content:"";position:absolute;left:0;right:0;bottom:0;height:3px;background:var(--orange);transform:scaleX(0);transform-origin:left;transition:transform .6s cubic-bezier(.2,.75,.1,1)}
.pj-ent-card:hover{transform:translateY(-5px);box-shadow:0 24px 46px -30px rgba(16,42,82,.45)}
.pj-ent-card:hover::after{transform:scaleX(1)}
.pj-ico{flex-shrink:0;width:56px;height:56px;border-radius:999px;border:1.5px solid var(--orange);display:flex;align-items:center;justify-content:center;color:var(--orange)}
.pj-ent-card h3{margin:0 0 6px;font-family:'Cormorant Garamond',serif;font-size:30px;font-weight:600;color:var(--royal)}
.pj-ent-card p{margin:0;font-size:15px;line-height:1.65;color:var(--body)}

/* milestones */
.pj-mile{position:relative;display:flex;flex-direction:column;gap:30px;padding-left:44px}
.pj-mile-rail{position:absolute;left:9px;top:10px;bottom:10px;width:2px;background:var(--silver)}
.pj-mile-row{position:relative;display:flex;flex-wrap:wrap;gap:6px 36px;padding:20px 24px;background:var(--white);border:1px solid #E3E8EF}
.pj-mile-row::before{content:"";position:absolute;left:-42px;top:26px;width:16px;height:16px;border-radius:999px;background:var(--soft);border:2px solid var(--royal);box-sizing:border-box}
.pj-mile-row.is-key::before{background:var(--orange);border-color:var(--orange)}
.pj-mile-row b{flex:0 0 110px;font-family:'Cormorant Garamond',serif;font-size:30px;font-weight:700;line-height:1;color:var(--royal)}
.pj-mile-row span{flex:1 1 360px;font-size:17px;line-height:1.6;color:var(--body)}

/* next chapter */
.pj-next{display:block;background:var(--royal);color:var(--white);text-decoration:none;transition:background-color .6s}
.pj-next:hover{background:#0C1F3E;color:var(--white)}
.pj-next-in{max-width:1440px;margin:0 auto;padding:clamp(56px,7vw,96px) clamp(20px,4vw,56px);display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:24px}
.pj-next small{display:flex;align-items:center;gap:12px;font-family:Jost,sans-serif;font-size:12px;font-weight:500;letter-spacing:.24em;text-transform:uppercase;color:var(--silver)}
.pj-next small::before{content:"";width:28px;height:2px;background:var(--orange)}
.pj-next strong{display:block;margin-top:12px;font-family:'Cormorant Garamond',serif;font-size:clamp(40px,5vw,72px);font-weight:600;line-height:1}
.pj-next .pj-arrow{width:84px;height:84px;border-radius:999px;border:1px solid var(--silver);display:flex;align-items:center;justify-content:center;transition:transform .5s cubic-bezier(.2,.75,.1,1),background-color .5s,border-color .5s}
.pj-next:hover .pj-arrow{transform:translateX(10px);background:var(--orange);border-color:var(--orange)}

@media (max-width:900px){
  .pj-eyebrow{letter-spacing:.18em}
  .pj-hero-panel{width:100%;top:auto;height:38%}
  .pj-ch-side .pj-sticky{position:static}
  .pj-num{font-size:64px}
}
@media (prefers-reduced-motion:reduce){*,*::before,*::after{animation:none!important;transition:none!important}html{scroll-behavior:auto}}
</style>
</head>
<body>

<div style="background: #F5F7FA; color: #11223F; font-family: Jost, system-ui, sans-serif; font-weight: 300">

  <?php $active = 'professional'; include __DIR__ . '/partials/header.php'; ?>

  <main>
    <!-- HERO -->
    <section class="pj-hero" aria-labelledby="pj-title">
      <div class="pj-hero-panel" aria-hidden="true"></div>
      <div class="pj-hero-in">
        <div class="pj-hero-text">
          <p class="pj-eyebrow pj-fade" style="animation-delay:.2s">Chapter I · My Professional Journey</p>
          <h1 id="pj-title">
            <span class="pj-mask"><span style="animation-delay:.3s">Shaped by creativity,</span></span>
            <span class="pj-mask"><span style="animation-delay:.45s"><em>built on enterprise.</em></span></span>
          </h1>
          <div class="pj-line" style="width:120px;height:2px;background:var(--orange);animation-delay:.9s"></div>
          <p class="pj-hero-lead pj-fade" style="animation-delay:1s">More than two decades across film, media, entertainment, fashion and jewellery design — growing from creative craft into producing and building businesses.</p>
        </div>
        <nav class="pj-index pj-fade" style="animation-delay:.7s" aria-label="Chapters on this page">
          <p>In this chapter</p>
          <ol>
            <li><a href="#design"><span>01</span>Design</a></li>
            <li><a href="#film-media"><span>02</span>Film &amp; Media</a></li>
            <li><a href="#enterprise"><span>03</span>Enterprise</a></li>
            <li><a href="#milestones"><span>04</span>Milestones</a></li>
          </ol>
        </nav>
      </div>
    </section>

    <!-- AT A GLANCE -->
    <div class="pj-facts">
      <div class="pj-facts-in pj-fade" style="animation-delay:1.2s" role="list" aria-label="At a glance">
        <div class="pj-fact" role="listitem"><b>20<i>+</i></b><span>Years across film, media, entertainment &amp; design</span></div>
        <div class="pj-fact" role="listitem"><b>11</b><span>TV serials produced by Aayush Telefilms</span></div>
        <div class="pj-fact" role="listitem"><b>40,000</b><span>Minutes of broadcast time (approx.)</span></div>
        <div class="pj-fact" role="listitem"><b>3</b><span>Languages — Hindi, Gujarati &amp; Marathi</span></div>
      </div>
    </div>

    <!-- CHAPTER SUB-NAV -->
    <nav class="pj-sub" aria-label="Jump to section">
      <div class="pj-sub-in">
        <a href="#design"><b>01</b>Design</a>
        <a href="#film-media"><b>02</b>Film &amp; Media</a>
        <a href="#enterprise"><b>03</b>Enterprise</a>
        <a href="#milestones"><b>04</b>Milestones</a>
      </div>
    </nav>

    <div class="pj-wrap">

      <!-- 01 DESIGN -->
      <section class="pj-ch" id="design" aria-labelledby="h-design">
        <div class="pj-ch-side"><div class="pj-sticky pj-rv"><span class="pj-num" aria-hidden="true">01</span><h2 id="h-design">Design</h2></div></div>
        <div class="pj-ch-main">
          <p class="pj-intro pj-rv">Fashion, costume and contemporary jewellery designer for film, television and social media personalities.</p>
          <div class="pj-rv" style="display:flex;flex-direction:column;gap:14px">
            <p class="pj-label">Has worked with</p>
            <div class="pj-names">
              <span class="pj-name">Geeta Kapur</span><span class="pj-name">Sanjay Dutt</span><span class="pj-name">Namrata Shirodkar</span><span class="pj-name">Jackie Shroff</span><span class="pj-name">Bhagyashree</span>
            </div>
          </div>
        </div>
      </section>

      <!-- 02 FILM & MEDIA -->
      <section class="pj-ch" id="film-media" aria-labelledby="h-film">
        <div class="pj-ch-side"><div class="pj-sticky pj-rv"><span class="pj-num" aria-hidden="true">02</span><h2 id="h-film">Film &amp; Media</h2></div></div>
        <div class="pj-ch-main">
          <p class="pj-intro pj-rv">Producer across film, media and entertainment.</p>

          <p class="pj-label pj-rv">Production houses</p>
          <div class="pj-cards">
            <article class="pj-card pj-rv">
              <div class="pj-card-img"><img src="assets/archive/2023/08/Ebina-Entertainment.png" alt="Ebina Entertainment" loading="lazy"><span class="pj-card-tag">Films · Ads · Digital</span></div>
              <div class="pj-card-body">
                <h3>Ebina Entertainment</h3>
                <p>A Mumbai-based film production house specialising in films, ads and digital content — bringing visionary stories to life. Believes films have the power to uplift, amuse and leave an impression.</p>
                <a href="gallery.php#ebina" class="pj-more">View More <i aria-hidden="true">→</i></a>
              </div>
            </article>
            <article class="pj-card pj-rv">
              <div class="pj-card-img"><span class="pj-ph">[ Logo / still ]</span><span class="pj-card-tag">Cinema</span></div>
              <div class="pj-card-body">
                <h3>Vedansh Entertainment</h3>
                <p>Founded to create cinema with impact. Debut film "Bhunsaara — Roshni Ki Pehli Kiran" (2010, dir. Chander Behl), followed by the thriller "Yaksh" (2018, dir. Mukul Abhyankar).</p>
                <a href="gallery.php" class="pj-more">View More <i aria-hidden="true">→</i></a>
              </div>
            </article>
            <article class="pj-card pj-rv">
              <div class="pj-card-img"><img src="assets/archive/2023/01/apnapan-serial-working-stills-ofactors-1.jpg" alt="Aayush Telefilms — working still from the serial Apnapan" loading="lazy"><span class="pj-card-tag">Television</span></div>
              <div class="pj-card-body">
                <h3>Aayush Telefilms</h3>
                <p>Produced 11 serials across Hindi, Gujarati and Marathi television, including the Hindi daily soap "Apnapan" on Sahara TV — nearly 40,000 minutes of broadcast time.</p>
                <a href="gallery.php#aayush" class="pj-more">View More <i aria-hidden="true">→</i></a>
              </div>
            </article>
          </div>

          <div class="pj-tablecard pj-rv">
            <div class="pj-tablehead">
              <h3>Aayush Telefilms — serials produced</h3>
              <div class="pj-langs" aria-label="Languages"><span>Hindi</span><span>Gujarati</span><span>Marathi</span></div>
            </div>
            <div class="pj-scroll">
              <table class="pj-table">
                <thead><tr><th scope="col">Serial</th><th scope="col">Language / Channel</th><th scope="col">Episodes</th></tr></thead>
                <tbody>
                  <tr><td>Chal Mare Sathe O Zindagi</td><td>Gujarati</td><td>78</td></tr>
                  <tr><td>Tran Maharani</td><td>Gujarati</td><td>78</td></tr>
                  <tr><td>Othe</td><td>Gujarati</td><td>240</td></tr>
                  <tr><td>Jeevanpath</td><td>Hindi</td><td>78</td></tr>
                  <tr><td>Kya Khabar Laye Ho</td><td>Hindi</td><td>78</td></tr>
                  <tr><td>Mamla Choice Ka</td><td>Hindi (C.V.O.)</td><td>78</td></tr>
                  <tr><td>Pet Apna Mal Paraya</td><td>Hindi (Zee TV)</td><td>78</td></tr>
                  <tr class="is-featured"><td>Apnapan</td><td>Hindi (Sahara TV)</td><td>52</td></tr>
                  <tr><td>Zid</td><td>Marathi (ETV)</td><td>240</td></tr>
                  <tr><td>Vanva</td><td>Marathi (ETV)</td><td>52</td></tr>
                </tbody>
              </table>
            </div>
          </div>

          <p class="pj-label pj-rv">Featured projects</p>
          <div class="pj-films">
            <article class="pj-film is-lead pj-rv">
              <small>Feature film</small>
              <h4>Dharamraobaba Atram — Dilon Ka Raja</h4>
              <p>Portrays the journey of a remarkable individual who rises to become the king of Aheri, a tribal state — overcoming early adversity to transform the lives of tribal communities across Gadchiroli, Maharashtra.</p>
              <p class="pj-slogan">“Jal, Jungle aur Zameen Hamara Hai”<span>Water, Forest, and Land are Ours</span></p>
              <p>The trailer launch, held at Mumbai's Taj Hotel, was attended by MLA Sandeep Dhurve, Ministers Anil Patil and Aditi Sunil Tatkare, and guests including Abhimanyu, Nisha Jamwal and Dinesh Waghmare.</p>
            </article>
            <article class="pj-film pj-rv">
              <small>Feature film · 2010 · Vedansh Entertainment</small>
              <h4>Bhunsaara — Roshni Ki Pehli Kiran</h4>
              <p>Directed by Chander Behl. Starring:</p>
              <div class="pj-cast"><span>Kiran Kumar</span><span>Dharmesh Vyas</span><span>Resham Tipnis</span><span>Mayank Gandhi</span><span>Pramod Moutho</span><span>Jennifer John</span><span>Krip Suri</span><span>Anil Vyas</span><span>Anju</span></div>
            </article>
            <article class="pj-film pj-rv">
              <small>Thriller · 2018 · Vedansh Entertainment</small>
              <h4>Yaksh</h4>
              <p>Directed by Mukul Abhyankar. Starring:</p>
              <div class="pj-cast"><span>Nitish Bharadwaj</span><span>Sheetal Shah</span><span>Bhanu Uday</span></div>
            </article>
            <article class="pj-film pj-rv" style="grid-column:1 / -1">
              <small>TV serial · Sahara TV · Aayush Telefilms</small>
              <h4>Apnapan</h4>
              <p>Hindi daily soap — 52 episodes.</p>
            </article>
          </div>
        </div>
      </section>

      <!-- 03 ENTERPRISE -->
      <section class="pj-ch" id="enterprise" aria-labelledby="h-ent">
        <div class="pj-ch-side"><div class="pj-sticky pj-rv"><span class="pj-num" aria-hidden="true">03</span><h2 id="h-ent">Enterprise</h2></div></div>
        <div class="pj-ch-main">
          <p class="pj-intro pj-rv">Business entrepreneur extending the Ebina name beyond entertainment.</p>
          <div class="pj-ent">
            <article class="pj-ent-card pj-rv">
              <span class="pj-ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 3h12l3 6-9 12L3 9z"/><path d="M3 9h18M9 3l3 18 3-18"/></svg></span>
              <div><h3>Ebina Jewel</h3><p>An online store offering customised, celebrity-style jewellery designs.</p></div>
            </article>
            <article class="pj-ent-card pj-rv">
              <span class="pj-ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 21h18M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16M9 7h2M13 7h2M9 11h2M13 11h2M10 21v-5h4v5"/></svg></span>
              <div><h3>Ebina Hotel</h3><p>[One line about the hotel]</p></div>
            </article>
          </div>
        </div>
      </section>

      <!-- 04 MILESTONES -->
      <section class="pj-ch" id="milestones" aria-labelledby="h-mile">
        <div class="pj-ch-side"><div class="pj-sticky pj-rv"><span class="pj-num" aria-hidden="true">04</span><h2 id="h-mile">Milestones</h2></div></div>
        <div class="pj-ch-main">
          <div class="pj-mile">
            <div class="pj-mile-rail pj-rail" aria-hidden="true"></div>
            <div class="pj-mile-row pj-rv"><b>[YEAR]</b><span>[First major design project in film or television]</span></div>
            <div class="pj-mile-row pj-rv"><b>[YEAR]</b><span>[Founded Ebina Entertainment]</span></div>
            <div class="pj-mile-row pj-rv"><b>2010</b><span>Vedansh Entertainment's debut film "Bhunsaara — Roshni Ki Pehli Kiran".</span></div>
            <div class="pj-mile-row pj-rv"><b>2018</b><span>Thriller "Yaksh" released (dir. Mukul Abhyankar).</span></div>
            <div class="pj-mile-row pj-rv"><b>[YEAR]</b><span>[Launched Ebina Jewel / Ebina Hotel]</span></div>
            <div class="pj-mile-row is-key pj-rv"><b>2022</b><span>Established MIAM Charitable Trust — the start of the second journey.</span></div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <a href="purpose.php" class="pj-next">
    <span class="pj-next-in">
      <span><small>Next · Chapter II</small><strong>My Journey of Purpose</strong></span>
      <span class="pj-arrow" aria-hidden="true"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h16M14 6l6 6-6 6"/></svg></span>
    </span>
  </a>

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

<script>
// Highlight the current chapter in the sticky sub-nav
(function () {
  var links = Array.prototype.slice.call(document.querySelectorAll('.pj-sub a'));
  if (!('IntersectionObserver' in window) || !links.length) return;
  var byId = {};
  links.forEach(function (a) { byId[a.getAttribute('href').slice(1)] = a; });
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) {
        links.forEach(function (a) { a.classList.remove('is-active'); a.removeAttribute('aria-current'); });
        var a = byId[e.target.id];
        if (a) { a.classList.add('is-active'); a.setAttribute('aria-current', 'true'); var bar = a.parentNode; bar.scrollLeft = Math.max(0, a.offsetLeft - 20); }
      }
    });
  }, { rootMargin: '-45% 0px -50% 0px' });
  Object.keys(byId).forEach(function (id) { var s = document.getElementById(id); if (s) io.observe(s); });
})();
</script>
<script src="assets/nav.js"></script>
</body>
</html>