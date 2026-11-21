<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nitu Joshi — Home (Royal Silver)</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&amp;family=Jost:wght@300;400;500&amp;family=Mrs+Saint+Delafield&amp;display=swap">
<link rel="stylesheet" href="assets/header.css">
<script>
(function () {
  var d = document.documentElement;
  if (window.matchMedia && matchMedia("(prefers-reduced-motion: reduce)").matches) return;
  d.classList.add("js", "is-loading");
  setTimeout(function () { d.classList.remove("is-loading"); }, 900);
})();
</script>
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

/* =====================================================================
   HOME OVERVIEW SECTIONS — each block is a short preview with a
   "View more" link that opens the full section on its own page.
   Royal #173A70 · deep #102A52 · Silver #BFC7D1 · Soft #F5F7FA · Orange #C9792F
   ===================================================================== */
.hm{font-family:Jost,system-ui,sans-serif;font-weight:300;color:#11223F}
.hm-sec{padding:clamp(72px,9vw,128px) clamp(22px,5vw,72px)}
.hm-in{max-width:1360px;margin:0 auto}
.hm-head{display:flex;flex-wrap:wrap;align-items:flex-end;justify-content:space-between;gap:18px 32px;margin-bottom:clamp(32px,4vw,52px)}
.hm-eyebrow{display:flex;align-items:center;gap:12px;margin:0 0 14px;font-size:12px;font-weight:600;letter-spacing:.26em;text-transform:uppercase;color:#173A70}
.hm-eyebrow::before{content:"";width:28px;height:2px;background:#C9792F}
.hm-h2{margin:0;font-family:'Cormorant Garamond',serif;font-weight:700;font-size:clamp(36px,4.2vw,58px);line-height:1.02;color:#173A70}
.hm-h2 em{font-style:italic;font-weight:500;color:#C9792F}
.hm-sub{margin:14px 0 0;max-width:560px;font-size:17px;line-height:1.7;color:#3C4A61}
/* "View more" link + button */
.hm-more{display:inline-flex;align-items:center;gap:10px;font-size:13px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;text-decoration:none;color:#173A70;border-bottom:2px solid #C9792F;padding-bottom:4px;transition:gap .4s,color .4s}
.hm-more:hover{gap:16px;color:#173A70}
.hm-btn{display:inline-flex;align-items:center;gap:12px;min-height:52px;padding:0 24px;font-size:13px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;text-decoration:none;border:1px solid #173A70;color:#173A70;transition:background-color .45s,color .45s,border-color .45s,transform .45s cubic-bezier(.2,.75,.1,1)}
.hm-btn:hover{background:#173A70;color:#FFFFFF;transform:translateY(-3px)}
.hm-btn-light{border-color:#BFC7D1;color:#FFFFFF}
.hm-btn-light:hover{background:#FFFFFF;border-color:#FFFFFF;color:#173A70}
.hm-btn-solid{background:#A85C0D;border-color:#A85C0D;color:#FFFFFF}
.hm-btn-solid:hover{background:#8F4E0B;border-color:#8F4E0B;color:#FFFFFF}

/* 1 · Work area */
.hm-work{background:#FFFFFF}
.hm-areas{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:18px}
.hm-area{position:relative;display:flex;flex-direction:column;gap:16px;padding:32px 30px 30px;background:#F5F7FA;border:1px solid #DCE2EA;text-decoration:none;color:#11223F;overflow:hidden;transition:transform .6s cubic-bezier(.2,.75,.1,1),box-shadow .6s,background-color .6s}
.hm-area::after{content:"";position:absolute;left:0;right:0;bottom:0;height:3px;background:#C9792F;transform:scaleX(0);transform-origin:left;transition:transform .6s cubic-bezier(.2,.75,.1,1)}
.hm-area:hover{transform:translateY(-6px);background:#FFFFFF;box-shadow:0 30px 60px -36px rgba(16,42,82,.5);color:#11223F}
.hm-area:hover::after{transform:scaleX(1)}
.hm-area-ic{width:64px;height:64px;border-radius:999px;background:#173A70;color:#FFFFFF;display:flex;align-items:center;justify-content:center;transition:background-color .5s}
.hm-area:hover .hm-area-ic{background:#C9792F}
.hm-area small{font-size:12px;font-weight:600;letter-spacing:.2em;text-transform:uppercase;color:#A85C0D}
.hm-area h3{margin:-6px 0 0;font-family:'Cormorant Garamond',serif;font-size:32px;font-weight:700;line-height:1.05;color:#173A70}
.hm-area p{margin:0;flex-grow:1;font-size:15px;line-height:1.7;color:#3C4A61}
.hm-area .hm-go{display:inline-flex;align-items:center;gap:8px;font-size:12px;font-weight:600;letter-spacing:.16em;text-transform:uppercase;color:#173A70}
.hm-area .hm-go i{font-style:normal;color:#C9792F;transition:transform .45s cubic-bezier(.2,.75,.1,1)}
.hm-area:hover .hm-go i{transform:translateX(6px)}

/* 2 · Our work */
.hm-ourwork{background:#F5F7FA}
.hm-projects{display:grid;grid-template-columns:repeat(auto-fit,minmax(290px,1fr));gap:20px}
.hm-proj{display:flex;flex-direction:column;background:#FFFFFF;border:1px solid #DCE2EA;text-decoration:none;color:#11223F;transition:transform .6s cubic-bezier(.2,.75,.1,1),box-shadow .6s,border-color .6s}
.hm-proj:hover{transform:translateY(-6px);box-shadow:0 30px 60px -36px rgba(16,42,82,.5);border-color:#C9792F;color:#11223F}
.hm-proj-img{position:relative;aspect-ratio:16/10;overflow:hidden;background:linear-gradient(150deg,#2A4A7E,#173A70)}
.hm-proj-img img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;transition:transform 1.2s cubic-bezier(.2,.75,.1,1)}
.hm-proj:hover .hm-proj-img img{transform:scale(1.06)}
.hm-proj-img .hm-ph{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;font-family:'Cormorant Garamond',serif;font-style:italic;font-size:22px;color:rgba(255,255,255,.55)}
.hm-tag{position:absolute;left:14px;top:14px;z-index:2;padding:6px 10px;background:#173A70;font-size:11px;font-weight:500;letter-spacing:.14em;text-transform:uppercase;color:#FFFFFF}
.hm-proj-body{display:flex;flex-direction:column;gap:12px;flex-grow:1;padding:24px}
.hm-proj h3{margin:0;font-family:'Cormorant Garamond',serif;font-size:29px;font-weight:700;line-height:1.05;color:#173A70}
.hm-proj p{margin:0;flex-grow:1;font-size:15px;line-height:1.65;color:#3C4A61}
.hm-proj .hm-go{align-self:flex-start;display:inline-flex;align-items:center;gap:10px;min-height:44px;padding:0 18px;border:1px solid #173A70;font-size:12px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;color:#173A70;transition:background-color .4s,color .4s}
.hm-proj .hm-go i{font-style:normal;color:#C9792F;transition:color .4s}
.hm-proj:hover .hm-go{background:#173A70;color:#FFFFFF}
.hm-proj:hover .hm-go i{color:#FFFFFF}
.hm-studios{display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:20px;margin-top:20px}
.hm-studio{display:flex;flex-direction:column;gap:16px;padding:clamp(26px,3vw,38px);background:#173A70;color:#FFFFFF}
.hm-studio small{font-size:12px;font-weight:600;letter-spacing:.22em;text-transform:uppercase;color:#BFC7D1}
.hm-studio h3{margin:0;font-family:'Cormorant Garamond',serif;font-size:clamp(30px,2.8vw,40px);font-weight:700;line-height:1}
.hm-studio p{margin:0;font-size:16px;line-height:1.7;color:#DCE3EC}
.hm-studio .hm-more{color:#FFFFFF;align-self:flex-start;margin-top:auto}
.hm-studio .hm-more:hover{color:#FFFFFF}
.hm-nums{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));border-top:1px solid rgba(191,199,209,.35);border-bottom:1px solid rgba(191,199,209,.35)}
.hm-nums div{padding:16px 0 14px}
.hm-nums div+div{padding-left:18px;border-left:1px solid rgba(191,199,209,.35)}
.hm-nums b{display:block;font-family:'Cormorant Garamond',serif;font-size:42px;font-weight:700;line-height:1;font-variant-numeric:tabular-nums}
.hm-nums span{display:block;margin-top:6px;font-size:12px;letter-spacing:.1em;text-transform:uppercase;color:#BFC7D1}

/* 3 · MIAM */
.hm-miam{position:relative;overflow:hidden;background:#173A70;color:#FFFFFF}
.hm-miam .hm-eyebrow{color:#BFC7D1}
.hm-miam .hm-h2{color:#FFFFFF}
.hm-miam-grid{display:grid;grid-template-columns:minmax(0,1.05fr) minmax(0,1fr);gap:48px clamp(40px,6vw,96px);align-items:start}
@media (max-width:900px){.hm-miam-grid{grid-template-columns:minmax(0,1fr)}}
.hm-miam-lead{display:flex;flex-direction:column;gap:22px}
.hm-miam-lead p{margin:0;font-size:17px;line-height:1.75;color:#DCE3EC}
.hm-motto{margin:0;padding:16px 20px;border-left:2px solid #C9792F;background:rgba(255,255,255,.06);font-family:'Cormorant Garamond',serif;font-style:italic;font-size:clamp(26px,2.6vw,34px);line-height:1.2;color:#FFFFFF}
.hm-motto span{display:block;margin-top:6px;font-family:Jost,sans-serif;font-style:normal;font-size:13px;letter-spacing:.06em;color:#BFC7D1}
.hm-pillars{display:flex;flex-wrap:wrap;gap:10px}
.hm-pillar{display:inline-flex;align-items:baseline;gap:8px;padding:10px 16px;border:1px solid rgba(191,199,209,.55);text-decoration:none;color:#FFFFFF;transition:background-color .4s,border-color .4s,color .4s}
.hm-pillar b{font-family:'Cormorant Garamond',serif;font-size:21px;font-weight:700}
.hm-pillar span{font-size:12px;letter-spacing:.12em;text-transform:uppercase;color:#BFC7D1;transition:color .4s}
.hm-pillar:hover{background:#FFFFFF;border-color:#FFFFFF;color:#173A70}
.hm-pillar:hover span{color:#3C4A61}
.hm-highlights{display:flex;flex-direction:column;gap:14px}
.hm-hl{display:flex;gap:18px;align-items:flex-start;padding:22px 22px;background:#FFFFFF;color:#11223F;text-decoration:none;transition:transform .5s cubic-bezier(.2,.75,.1,1),box-shadow .5s}
.hm-hl:hover{transform:translateX(8px);box-shadow:-6px 0 0 #C9792F;color:#11223F}
.hm-hl-ic{flex-shrink:0;width:48px;height:48px;border-radius:999px;border:1.5px solid #C9792F;color:#C9792F;display:flex;align-items:center;justify-content:center}
.hm-hl small{display:block;margin-bottom:4px;font-size:11px;font-weight:600;letter-spacing:.2em;text-transform:uppercase;color:#5A6A82}
.hm-hl h3{margin:0 0 4px;font-family:'Cormorant Garamond',serif;font-size:24px;font-weight:700;line-height:1.1;color:#173A70}
.hm-hl p{margin:0;font-size:14px;line-height:1.6;color:#3C4A61}
.hm-hl i{margin-left:auto;align-self:center;font-style:normal;color:#C9792F;font-size:20px}
.hm-miam-leaf{position:absolute;right:-30px;bottom:-20px;opacity:.12;pointer-events:none}

/* 4 · Awards */
.hm-awards{background:#BFC7D1}
.hm-awards .hm-sub{color:#11223F}
.hm-award-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(290px,1fr));gap:20px}
.hm-award{display:flex;flex-direction:column;background:#FFFFFF;text-decoration:none;color:#11223F;transition:transform .6s cubic-bezier(.2,.75,.1,1),box-shadow .6s}
.hm-award:hover{transform:translateY(-6px);box-shadow:0 30px 60px -32px rgba(16,42,82,.55);color:#11223F}
.hm-award-img{position:relative;aspect-ratio:4/3;overflow:hidden;background:linear-gradient(150deg,#E9EDF2,#C9D1DB)}
.hm-award-img img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;transition:transform 1.2s cubic-bezier(.2,.75,.1,1)}
.hm-award:hover .hm-award-img img{transform:scale(1.06)}
.hm-award-img .hm-ph{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;color:#5A6A82;font-size:12px;letter-spacing:.14em;text-transform:uppercase}
.hm-award-year{position:absolute;right:14px;bottom:14px;z-index:2;min-width:64px;padding:8px 10px;background:#C9792F;text-align:center;font-family:'Cormorant Garamond',serif;font-size:24px;font-weight:700;line-height:1;color:#FFFFFF}
.hm-award-body{display:flex;flex-direction:column;gap:10px;flex-grow:1;padding:24px;border-top:3px solid #173A70}
.hm-award small{font-size:12px;font-weight:600;letter-spacing:.18em;text-transform:uppercase;color:#5A6A82}
.hm-award h3{margin:0;font-family:'Cormorant Garamond',serif;font-size:28px;font-weight:700;line-height:1.08;color:#173A70}
.hm-award p{margin:0;flex-grow:1;font-size:15px;line-height:1.65;color:#3C4A61}
.hm-award .hm-go{display:inline-flex;align-items:center;gap:8px;font-size:12px;font-weight:600;letter-spacing:.16em;text-transform:uppercase;color:#173A70}
.hm-award .hm-go i{font-style:normal;color:#C9792F;transition:transform .45s cubic-bezier(.2,.75,.1,1)}
.hm-award:hover .hm-go i{transform:translateX(6px)}

/* 5 · News & insights */
.hm-news{background:#F5F7FA}
.hm-news-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:18px}
.hm-paper{position:relative;display:flex;flex-direction:column;gap:16px;padding:28px 26px;background:#FFFFFF;border:1px solid #DCE2EA;text-decoration:none;color:#11223F;transition:transform .6s cubic-bezier(.2,.75,.1,1),box-shadow .6s,border-color .6s}
.hm-paper:hover{transform:translateY(-6px);border-color:#173A70;box-shadow:0 26px 50px -32px rgba(16,42,82,.45);color:#11223F}
.hm-outlet{font-family:'Cormorant Garamond',serif;font-size:30px;font-weight:700;line-height:1;color:#173A70}
.hm-outlet span{display:block;margin-top:6px;font-family:Jost,sans-serif;font-size:11px;font-weight:600;letter-spacing:.2em;text-transform:uppercase;color:#5A6A82}
.hm-paper hr{width:40px;height:2px;margin:0;border:0;background:#C9792F;transition:width .6s cubic-bezier(.2,.75,.1,1)}
.hm-paper:hover hr{width:100%}
.hm-paper h3{margin:0;flex-grow:1;font-size:17px;font-weight:500;line-height:1.55;color:#11223F;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden}
.hm-paper h3:lang(hi){font-size:18px}
.hm-paper .hm-meta{display:flex;justify-content:space-between;align-items:center;font-size:12px;letter-spacing:.12em;text-transform:uppercase;color:#5A6A82}
.hm-paper .hm-meta i{font-style:normal;color:#C9792F;font-size:18px;transition:transform .45s cubic-bezier(.2,.75,.1,1)}
.hm-paper:hover .hm-meta i{transform:translateX(6px)}

/* 6 · Contact (right above the footer — same details as contact.php) */
.hm-contact{background:#173A70;color:#FFFFFF}
.hm-contact .hm-eyebrow{color:#BFC7D1}
.hm-contact .hm-h2{color:#FFFFFF}
.hm-contact-grid{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);gap:40px clamp(40px,6vw,96px);align-items:stretch}
@media (max-width:900px){.hm-contact-grid{grid-template-columns:minmax(0,1fr)}}
.hm-contact-info{display:flex;flex-direction:column;gap:28px}
.hm-contact-info p{margin:0;font-size:17px;line-height:1.7;color:#DCE3EC;max-width:520px}
.hm-cblock small{display:block;margin-bottom:10px;font-size:12px;font-weight:600;letter-spacing:.22em;text-transform:uppercase;color:#BFC7D1}
.hm-cblock .hm-loc{display:flex;align-items:center;gap:12px;font-family:'Cormorant Garamond',serif;font-size:28px;font-weight:600}
.hm-cblock .hm-loc svg{color:#C9792F;flex-shrink:0}
.hm-socials,.hm-ventures{display:flex;flex-wrap:wrap;gap:10px}
.hm-socials a,.hm-ventures a{display:inline-flex;align-items:center;gap:8px;min-height:44px;padding:0 16px;border:1px solid rgba(191,199,209,.55);font-size:13px;font-weight:500;letter-spacing:.06em;text-decoration:none;color:#FFFFFF;transition:background-color .4s,color .4s,border-color .4s}
.hm-socials a:hover,.hm-ventures a:hover{background:#FFFFFF;border-color:#FFFFFF;color:#173A70}
.hm-map{position:relative;min-height:340px;background:#102A52;border:8px solid #FFFFFF;box-shadow:0 30px 60px -30px rgba(0,0,0,.5)}
.hm-map iframe{position:absolute;inset:0;width:100%;height:100%;border:0;filter:grayscale(.85) contrast(1.05)}

/* ---------- reveal on scroll for the new sections ---------- */
@keyframes hmUp{from{opacity:0;translate:0 46px}to{opacity:1;translate:0 0}}
@keyframes hmLeft{from{opacity:0;translate:-70px 0}to{opacity:1;translate:0 0}}
@keyframes hmRight{from{opacity:0;translate:70px 0}to{opacity:1;translate:0 0}}
@keyframes hmZoom{from{opacity:0;scale:.88;translate:0 24px}to{opacity:1;scale:1;translate:0 0}}
@keyframes hmWord{from{translate:0 110%}to{translate:0 0}}
@keyframes hmCurtain{from{transform:scaleY(1)}to{transform:scaleY(0)}}
@keyframes hmKen{from{scale:1.16}to{scale:1}}
.js .hm-rv{opacity:0}
.js .hm-rv.is-in{animation:hmUp 1s cubic-bezier(.2,.7,.1,1) var(--d,0s) both}
.js .hm-rv--left.is-in{animation-name:hmLeft;animation-duration:1.2s}
.js .hm-rv--right.is-in{animation-name:hmRight;animation-duration:1.2s}
.js .hm-rv--zoom.is-in{animation-name:hmZoom}
.js .hm-eyebrow::before{scale:0 1;transform-origin:left;transition:scale .9s cubic-bezier(.7,0,.2,1) .15s}
.js .hm-eyebrow.is-in::before{scale:1 1}
.hm-w{display:inline-block;overflow:hidden;vertical-align:bottom;padding:0 .08em .14em 0;margin:0 -.08em -.14em 0}
.hm-w>span{display:inline-block;translate:0 110%}
.hm-split.is-in .hm-w>span{animation:hmWord .95s cubic-bezier(.2,.7,.1,1) var(--d,0s) both}
.js .hm-proj-img::after,.js .hm-award-img::after{content:"";position:absolute;inset:0;z-index:1;background:#173A70;transform-origin:top}
.js .is-in .hm-proj-img::after,.js .is-in .hm-award-img::after{animation:hmCurtain 1.1s cubic-bezier(.7,0,.2,1) calc(var(--d,0s) + .25s) both}
.js .is-in .hm-proj-img img,.js .is-in .hm-award-img img{animation:hmKen 1.8s cubic-bezier(.2,.6,.2,1) calc(var(--d,0s) + .25s) both}
.hm main,.hm-wrap{overflow-x:clip}
@media (max-width:700px){.js .hm-rv--left.is-in,.js .hm-rv--right.is-in{animation-name:hmUp}}
@media (prefers-reduced-motion:reduce){.hm *{transition:none!important}}

/* ---------- page intro (same as About / Professional / Purpose) ---------- */
.nj-intro{display:none}
.js .nj-intro{position:fixed;inset:0;z-index:200;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:18px;background:#173A70;color:#FFFFFF;animation:njOut .9s cubic-bezier(.76,0,.24,1) .85s forwards}
.nj-intro-mono{width:76px;height:76px;border-radius:999px;border:1px solid #BFC7D1;display:flex;align-items:center;justify-content:center;font-family:'Cormorant Garamond',serif;font-size:30px;font-weight:600;animation:njMono .8s cubic-bezier(.2,.7,.1,1) both}
.nj-intro-name{overflow:hidden;font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:600;letter-spacing:.32em}
.nj-intro-name span{display:block;animation:njRise .8s cubic-bezier(.2,.7,.1,1) .15s both}
.nj-intro-line{width:120px;height:2px;background:#C9792F;transform-origin:left;animation:njLine .7s cubic-bezier(.7,0,.2,1) .2s both}
@keyframes njOut{to{transform:translateY(-100%);visibility:hidden}}
@keyframes njMono{from{opacity:0;transform:scale(.6) rotate(-20deg)}to{opacity:1;transform:none}}
@keyframes njRise{from{transform:translateY(108%)}to{transform:none}}
@keyframes njLine{from{transform:scaleX(0)}to{transform:scaleX(1)}}
/* hero waits behind the intro, then plays from the start */
.is-loading .rs-hero,.is-loading .rs-hero *{animation-play-state:paused!important}
</style>
</head>
<body>
<div class="nj-intro" aria-hidden="true">
  <span class="nj-intro-mono">NJ</span>
  <span class="nj-intro-name"><span>NITU JOSHI</span></span>
  <span class="nj-intro-line"></span>
</div>


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
        <p style="margin: 0">Together, they define our vision — combining entrepreneurial thinking with social responsibility to create sustainable and lasting impact.</p>
      </div>
      <nav aria-label="Two journeys" class="rs-fade" style="animation-delay: 2.2s; display: flex; flex-wrap: wrap; gap: 12px; margin-top: 6px">
        <a href="professional.php" class="rs-btn rs-solid" style="display: inline-flex; align-items: center; gap: 12px; min-height: 52px; padding: 0 24px; background: #FFFFFF; color: #173A70; font-size: 13px; font-weight: 500; letter-spacing: .14em; text-transform: uppercase">Our Professional Journey <span class="rs-arw" aria-hidden="true">→</span></a>
        <a href="purpose.php" class="rs-btn rs-line" style="display: inline-flex; align-items: center; gap: 12px; min-height: 52px; padding: 0 24px; border: 1px solid #BFC7D1; color: #FFFFFF; font-size: 13px; font-weight: 500; letter-spacing: .14em; text-transform: uppercase">Our Journey of Purpose <span class="rs-arw" aria-hidden="true">→</span></a>
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
        <h2 style="margin: 0; font-family: 'Cormorant Garamond', serif; font-weight: 700; font-size: clamp(34px, 4vw, 54px); line-height: 1.05; color: #173A70">About Us</h2>
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

  <!-- =================== HOME OVERVIEW =================== -->
  <div class="hm hm-wrap">

    <!-- 1 · WORK AREA -->
    <section class="hm-sec hm-work" id="work-area" aria-labelledby="hm-work-title">
      <div class="hm-in">
        <div class="hm-head">
          <div>
            <p class="hm-eyebrow hm-rv">Work Area</p>
            <h2 class="hm-h2 hm-split" id="hm-work-title">Three fields, one vision.</h2>
          </div>
          <a href="professional.php" class="hm-more hm-rv hm-rv--right">Our Professional Journey <span aria-hidden="true">→</span></a>
        </div>
        <div class="hm-areas">
          <a href="professional.php#film-media" class="hm-area hm-rv">
            <span class="hm-area-ic"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2.5" y="4" width="19" height="16" rx="1.5"/><path d="M7 4v16M17 4v16M2.5 8H7M2.5 12H7M2.5 16H7M17 8h4.5M17 12h4.5M17 16h4.5"/></svg></span>
            <small>Entertainment</small>
            <h3>Film Production House</h3>
            <p>Ebina Entertainment, Vedansh Entertainment and Aayush Telefilms — films, ads, digital content and television.</p>
            <span class="hm-go">View more <i aria-hidden="true">→</i></span>
          </a>
          <a href="purpose.php#miam" class="hm-area hm-rv">
            <span class="hm-area-ic"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 11.5S7 8.6 7 5.6A2.6 2.6 0 0 1 12 4.6a2.6 2.6 0 0 1 5 1C17 8.6 12 11.5 12 11.5z"/><path d="M2.5 15h3l3.5-1.5h4.5a1.5 1.5 0 0 1 0 3H10"/><path d="M5.5 20.5H14l7-4.5a1.6 1.6 0 0 0-2-2.4l-4.5 2.4"/></svg></span>
            <small>NGO</small>
            <h3>MIAM Charitable Trust</h3>
            <p>Education, career academies, culture and animal welfare for rural and tribal communities.</p>
            <span class="hm-go">View more <i aria-hidden="true">→</i></span>
          </a>
          <a href="professional.php#enterprise" class="hm-area hm-rv">
            <span class="hm-area-ic"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="8.5" cy="14" r="5.5"/><circle cx="15.5" cy="14" r="5.5"/><path d="M7 6.5 8.5 4.5 10 6.5M14 6.5l1.5-2 1.5 2"/></svg></span>
            <small>Jewellery Designing</small>
            <h3>Ebina Jewels</h3>
            <p>Customised, celebrity-style jewellery designs — from the designer behind film and television looks.</p>
            <span class="hm-go">View more <i aria-hidden="true">→</i></span>
          </a>
        </div>
      </div>
    </section>

    <!-- 2 · OUR WORK -->
    <section class="hm-sec hm-ourwork" id="our-work" aria-labelledby="hm-ourwork-title">
      <div class="hm-in">
        <div class="hm-head">
          <div>
            <p class="hm-eyebrow hm-rv">Our Work</p>
            <h2 class="hm-h2 hm-split" id="hm-ourwork-title">Films &amp; television</h2>
          </div>
          <a href="professional.php#film-media" class="hm-more hm-rv hm-rv--right">All productions <span aria-hidden="true">→</span></a>
        </div>
        <div class="hm-projects">
          <a href="professional.php#dilon-ka-raja" class="hm-proj hm-rv">
            <div class="hm-proj-img"><span class="hm-ph">Dilon Ka Raja</span><img src="assets\BABA-HAND-POSTER-3-X-2-FINA-1536x1024.jpg" alt="Poster of Dharamraobaba Atram — Dilon Ka Raja" loading="lazy" onerror="this.remove()"><span class="hm-tag">Docu-drama · 2024</span></div>
            <div class="hm-proj-body">
              <h3>Dharamraobaba Atram — Dilon Ka Raja</h3>
              <p>The journey of the king of Aheri and the fight for water, forest and land. Best Indian Documentary, CineDreams 2024.</p>
              <span class="hm-go">View more <i aria-hidden="true">→</i></span>
            </div>
          </a>
          <a href="professional.php#bhunsaara" class="hm-proj hm-rv">
            <div class="hm-proj-img"><span class="hm-ph">Bhunsaara</span><img src="assets/Untitled-1280-x-850-px-4.jpg" alt="Poster of Bhunsaara — Roshni Ki Pehli Kiran" loading="lazy" onerror="this.remove()"><span class="hm-tag">Feature film · 2010</span></div>
            <div class="hm-proj-body">
              <h3>Bhunsaara — Roshni Ki Pehli Kiran</h3>
              <p>Concept and produced by Nitu Joshi, directed by Chander Behl — Vedansh Entertainment's debut film.</p>
              <span class="hm-go">View more <i aria-hidden="true">→</i></span>
            </div>
          </a>
          <a href="professional.php#apnapan" class="hm-proj hm-rv">
            <div class="hm-proj-img"><span class="hm-ph">Apnapan</span><img src="assets/apnapan.jpg" alt="Stills from the TV serial Apnapan" loading="lazy" onerror="this.remove()"><span class="hm-tag">TV serial · Sahara TV</span></div>
            <div class="hm-proj-body">
              <h3>Apnapan — TV Serial</h3>
              <p>Aayush Telefilms' most popular production — a Hindi daily soap on Sahara TV.</p>
              <span class="hm-go">View more <i aria-hidden="true">→</i></span>
            </div>
          </a>
        </div>
        <div class="hm-studios">
          <article class="hm-studio hm-rv hm-rv--left">
            <small>Production house · Mumbai</small>
            <h3>Ebina Entertainment</h3>
            <p>Films, advertisements and digital content, made with a commitment to quality and a love of storytelling. The trailer of “Dharamraobaba Atram — Dilon Ka Raja” was launched at Mumbai's Taj Hotel.</p>
            <a href="professional.php#ebina-entertainment" class="hm-more">View more <span aria-hidden="true">→</span></a>
          </article>
          <article class="hm-studio hm-rv hm-rv--right">
            <small>Television</small>
            <h3>Aayush Telefilms</h3>
            <div class="hm-nums">
              <div><b data-count>11</b><span>Serials</span></div>
              <div><b data-count>3</b><span>Languages</span></div>
              <div><b data-count>40,000</b><span>Minutes on air</span></div>
            </div>
            <p>Serials for Hindi, Gujarati and Marathi channels — including “Apnapan” on Sahara TV.</p>
            <a href="professional.php#serials" class="hm-more">See all serials <span aria-hidden="true">→</span></a>
          </article>
        </div>
      </div>
    </section>

    <!-- 3 · MIAM CHARITABLE TRUST -->
    <section class="hm-sec hm-miam" id="miam" aria-labelledby="hm-miam-title">
      <svg class="hm-miam-leaf" width="360" height="360" viewBox="0 0 120 120" fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" aria-hidden="true"><path d="M60 118V40"/><path d="M60 70c-22-2-34-18-34-38 20 0 34 14 34 38z"/><path d="M60 56c18-2 30-16 30-34-18 0-30 12-30 34z"/></svg>
      <div class="hm-in hm-miam-grid">
        <div class="hm-miam-lead">
          <div>
            <p class="hm-eyebrow hm-rv">Journey of Purpose</p>
            <h2 class="hm-h2 hm-split" id="hm-miam-title">MIAM Charitable Trust</h2>
          </div>
          <p class="hm-rv">Founded by Nitu Joshi to tackle critical socio-cultural, environmental and socio-economic challenges — bridging the gap in education and basic necessities so no one is left behind.</p>
          <p class="hm-motto hm-rv hm-rv--left">“Dosro ke liye bhi jeena sikho”<span>Learning to live for others</span></p>
          <div class="hm-pillars hm-rv" aria-label="Core values">
            <a href="purpose.php#values" class="hm-pillar"><b>Manavta</b><span>Humanity</span></a>
            <a href="purpose.php#values" class="hm-pillar"><b>Sanskruti</b><span>Culture</span></a>
            <a href="purpose.php#values" class="hm-pillar"><b>Sanskar</b><span>Values</span></a>
          </div>
          <div class="hm-rv" style="display:flex;flex-wrap:wrap;gap:12px">
            <a href="purpose.php" class="hm-btn hm-btn-light">Explore the Journey of Purpose <span aria-hidden="true">→</span></a>
          </div>
        </div>
        <div class="hm-highlights">
          <a href="purpose.php#academies" class="hm-hl hm-rv hm-rv--right">
            <span class="hm-hl-ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 8l10-5 10 5-10 5z"/><path d="M6 10v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"/></svg></span>
            <span><small>Career Academies</small><h3>Two academies for rural &amp; tribal youth</h3><p>Waghera Village, Nashik and Chintalpeth Village, Gadchiroli — preparing students for government job exams.</p></span>
            <i aria-hidden="true">→</i>
          </a>
          <a href="purpose.php#moments" class="hm-hl hm-rv hm-rv--right">
            <span class="hm-hl-ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20s-7-4.4-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 10c0 5.6-7 10-7 10z"/></svg></span>
            <span><small>Support</small><h3>Donation from Kareena Kapoor</h3><p>Received at an event organised by GJEPC India.</p></span>
            <i aria-hidden="true">→</i>
          </a>
          <a href="purpose.php#moments" class="hm-hl hm-rv hm-rv--right">
            <span class="hm-hl-ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><path d="M16 4.5a3.5 3.5 0 0 1 0 7M18 14.5a6.5 6.5 0 0 1 3.5 5.5"/></svg></span>
            <span><small>Meeting</small><h3>Shri Suresh Bhageria</h3><p>Exploring support initiatives for women in Adivasi areas through MIAM.</p></span>
            <i aria-hidden="true">→</i>
          </a>
        </div>
      </div>
    </section>

    <!-- 4 · AWARDS -->
    <section class="hm-sec hm-awards" id="awards" aria-labelledby="hm-awards-title">
      <div class="hm-in">
        <div class="hm-head">
          <div>
            <p class="hm-eyebrow hm-rv">Awards</p>
            <h2 class="hm-h2 hm-split" id="hm-awards-title">Recognition</h2>
          </div>
          <a href="awards.php" class="hm-more hm-rv hm-rv--right">All awards <span aria-hidden="true">→</span></a>
        </div>
        <div class="hm-award-grid">
          <a href="awards.php#mid-day-award" class="hm-award hm-rv">
            <div class="hm-award-img"><span class="hm-ph">Award photo</span><img src="assets/best social worker award by mid dayu.jpg" alt="Nitu Joshi receiving the Best Social Worker Award by Mid-day" loading="lazy" onerror="this.remove()"><span class="hm-award-year">2023</span></div>
            <div class="hm-award-body">
              <small>By Mid-day · New Delhi</small>
              <h3>Best Social Worker Award</h3>
              <p>For her dedication to social and environmental causes and community welfare.</p>
              <span class="hm-go">View more <i aria-hidden="true">→</i></span>
            </div>
          </a>
          <a href="awards.php#social-work-award" class="hm-award hm-rv">
            <div class="hm-award-img"><span class="hm-ph">Award photo</span><img src="assets/award for social work.jpg" alt="Nitu Joshi receiving the Award for Social Work at the 16th All India Newsmakers Achievers Award" loading="lazy" onerror="this.remove()"><span class="hm-award-year">2024</span></div>
            <div class="hm-award-body">
              <small>16th All India Newsmakers Achievers Award · Mumbai</small>
              <h3>Award for Social Work</h3>
              <p>Presented at the 16th All India Newsmakers Achievers Award 2024 in Mumbai.</p>
              <span class="hm-go">View more <i aria-hidden="true">→</i></span>
            </div>
          </a>
          <a href="awards.php#documentary-award" class="hm-award hm-rv">
            <div class="hm-award-img"><span class="hm-ph">Award photo</span><img src="assets/award for best indian documentary.jpg" alt="Best Indian Documentary award at CineDreams International Film Festival 2024" loading="lazy" onerror="this.remove()"><span class="hm-award-year">2024</span></div>
            <div class="hm-award-body">
              <small>CineDreams International Film Festival</small>
              <h3>Best Indian Documentary</h3>
              <p>For “Dharamraobaba Atram — Dilon Ka Raja”, a docu-drama on JioCinema.</p>
              <span class="hm-go">View more <i aria-hidden="true">→</i></span>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- 5 · NEWS & INSIGHTS -->
    <section class="hm-sec hm-news" id="news" aria-labelledby="hm-news-title">
      <div class="hm-in">
        <div class="hm-head">
          <div>
            <p class="hm-eyebrow hm-rv">Media</p>
            <h2 class="hm-h2 hm-split" id="hm-news-title">News &amp; Insights</h2>
          </div>
          <a href="media.php" class="hm-more hm-rv hm-rv--right">All coverage <span aria-hidden="true">→</span></a>
        </div>
        <div class="hm-news-grid">
          <a href="media.php#news24" class="hm-paper hm-rv">
            <span class="hm-outlet">News 24<span>Think First</span></span><hr>
            <h3 lang="hi">नीतू जोशी ने गोवा फिल्म महोत्सव में फिल्म उद्योग…</h3>
            <span class="hm-meta"><span>Read more</span><i aria-hidden="true">→</i></span>
          </a>
          <a href="media.php#mid-day" class="hm-paper hm-rv">
            <span class="hm-outlet">Mid-day<span>Mumbai</span></span><hr>
            <h3>Nitu Joshi, A Business and Social…</h3>
            <span class="hm-meta"><span>Read more</span><i aria-hidden="true">→</i></span>
          </a>
          <a href="media.php#dna-hindi" class="hm-paper hm-rv">
            <span class="hm-outlet">DNA Hindi<span>DNA India</span></span><hr>
            <h3 lang="hi">ट्राइब्स बच्चों को पढ़ाने-लिखाने का जिम्मा उठा रहीं…</h3>
            <span class="hm-meta"><span>Read more</span><i aria-hidden="true">→</i></span>
          </a>
          <a href="media.php#dailymail-express" class="hm-paper hm-rv">
            <span class="hm-outlet">Dailymail Express<span>March 20, 2024</span></span><hr>
            <h3>Miam Charitable Trust Supports Student Success in Rural India</h3>
            <span class="hm-meta"><span>Read more</span><i aria-hidden="true">→</i></span>
          </a>
        </div>
      </div>
    </section>

    <!-- 6 · CONTACT (same details as contact.php) -->
    <section class="hm-sec hm-contact" id="contact" aria-labelledby="hm-contact-title">
      <div class="hm-in hm-contact-grid">
        <div class="hm-contact-info">
          <div>
            <p class="hm-eyebrow hm-rv">Contact</p>
            <h2 class="hm-h2 hm-split" id="hm-contact-title">Let's create lasting impact together.</h2>
          </div>
          <p class="hm-rv">For collaborations, productions, events or MIAM Charitable Trust initiatives — reach out through any of the channels below.</p>
          <div class="hm-cblock hm-rv">
            <small>Based in</small>
            <span class="hm-loc"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-11.5A7 7 0 0 1 19 9.5C19 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg>Mumbai, India</span>
          </div>
          <div class="hm-cblock hm-rv">
            <small>Follow</small>
            <div class="hm-socials">
              <a href="https://www.instagram.com/nitujoshi_miam/">Instagram</a>
              <a href="https://www.linkedin.com/in/nitu-joshi/">LinkedIn</a>
              <a href="https://www.facebook.com/nitu.joshi1/">Facebook</a>
              <a href="https://x.com/nitujoshimittal?lang=de">X</a>
            </div>
          </div>
          <div class="hm-cblock hm-rv">
            <small>Ventures</small>
            <div class="hm-ventures">
              <a href="https://ebinaentertainment.com/">Ebina Entertainment ↗</a>
              <a href="https://www.ebnjewelry.com/">Ebina Jewel ↗</a>
              <a href="http://ebinahotel.com/">Ebina Hotel ↗</a>
              <a href="http://www.miamcharitabletrust.com/">MIAM Charitable Trust ↗</a>
            </div>
          </div>
          <div class="hm-rv"><a href="contact.php" class="hm-btn hm-btn-solid">Go to Contact page <span aria-hidden="true">→</span></a></div>
        </div>
        <div class="hm-map hm-rv hm-rv--zoom">
          <iframe title="Map — Mumbai, India" src="https://maps.google.com/maps?q=Mumbai%2C%20India&amp;t=m&amp;z=12&amp;output=embed&amp;iwloc=near" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>

  </div>
  <!-- =================== /HOME OVERVIEW =================== -->

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
        <a href="about.php" class="rs-ftlink" style="color:#DCE3EC; font-size: 14px">About Us</a>
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
<script>
// remove the intro once it has slid away
(function () {
  var intro = document.querySelector(".nj-intro");
  if (intro) intro.addEventListener("animationend", function (e) { if (e.animationName === "njOut") intro.remove(); });
})();
</script>
<script>
// Home overview: reveal on scroll, word-by-word headings, number count-up
(function () {
  if (!document.documentElement.classList.contains("js")) return; // reduced motion: shown as is
  document.querySelectorAll(".hm-split").forEach(function (el) {
    var words = el.textContent.trim().split(/\s+/);
    el.setAttribute("aria-label", words.join(" "));
    el.textContent = "";
    words.forEach(function (w, i) {
      var o = document.createElement("span"), n = document.createElement("span");
      o.className = "hm-w"; o.setAttribute("aria-hidden", "true");
      n.textContent = w; n.style.setProperty("--d", i * 0.08 + "s");
      o.appendChild(n); el.appendChild(o);
      if (i < words.length - 1) el.appendChild(document.createTextNode(" "));
    });
  });
  function count(b) {
    var raw = b.textContent, to = parseInt(raw.replace(/,/g, ""), 10), comma = raw.indexOf(",") > -1, start = null;
    if (!to) return;
    b.textContent = "0";
    function step(ts) {
      if (start === null) start = ts;
      var p = Math.min(1, (ts - start) / 1800), v = Math.round(to * (1 - Math.pow(1 - p, 3)));
      b.textContent = comma ? v.toLocaleString("en-US") : String(v);
      if (p < 1) requestAnimationFrame(step);
    }
    setTimeout(function () { requestAnimationFrame(step); }, 400);
  }
  var targets = document.querySelectorAll(".hm-rv, .hm-split, .hm-eyebrow");
  if (!("IntersectionObserver" in window)) { targets.forEach(function (el) { el.classList.add("is-in"); }); return; }
  var io = new IntersectionObserver(function (entries) {
    entries.filter(function (e) { return e.isIntersecting; }).forEach(function (e, i) {
      var el = e.target;
      if (i) el.style.setProperty("--d", Math.min(i * 0.09, 0.6) + "s");
      el.classList.add("is-in");
      el.querySelectorAll("[data-count]").forEach(count);
      io.unobserve(el);
    });
  }, { rootMargin: "0px 0px -10% 0px", threshold: 0.12 });
  targets.forEach(function (el) { io.observe(el); });
})();
</script>
<script src="assets/nav.js"></script>
</body>
</html>