<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nitu Joshi — My Journey of Purpose</title>
<meta name="description" content="Nitu Joshi's journey of purpose — MIAM Charitable Trust, its core values, Career Academies for rural and tribal youth, causes and social impact.">
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
/* ---------- header + menu (kept exactly as on the current site) ---------- */

/* ===== Royal Silver theme + orange accent =====
   Royal #173A70 · deep #102A52 · Silver #BFC7D1 · Soft White #F5F7FA · White #FFFFFF · Orange #C9792F */
:root{--royal:#173A70;--royal-deep:#102A52;--silver:#BFC7D1;--soft:#F5F7FA;--white:#FFFFFF;--ink:#11223F;--body:#3C4A61;--muted:#5A6A82;--orange:#C9792F;--orange-btn:#A85C0D;--line:rgba(23,58,112,.14)}
*{box-sizing:border-box}
html{scroll-behavior:smooth}
body{margin:0;background:#F5F7FA}
a{color:#173A70}a:hover{color:#C9792F}
a:focus-visible,button:focus-visible{outline:2px solid var(--orange);outline-offset:3px}
img{display:block;max-width:100%}

/* ---------- animations ---------- */
@keyframes jpRise{from{transform:translateY(108%)}to{transform:none}}
@keyframes jpFade{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:none}}
@keyframes jpLine{from{transform:scaleX(0)}to{transform:scaleX(1)}}
@keyframes jpPanel{from{transform:translateX(100%)}to{transform:none}}
@keyframes jpLeaf{0%,100%{transform:rotate(-4deg)}50%{transform:rotate(4deg)}}
.jp-mask{overflow:hidden;display:block;padding-bottom:.16em;margin-bottom:-.16em}
.jp-mask>span{display:block;animation:jpRise 1.2s cubic-bezier(.2,.75,.1,1) both}
.jp-fade{animation:jpFade 1s cubic-bezier(.2,.75,.1,1) both}
.jp-line{transform-origin:left;animation:jpLine 1.4s cubic-bezier(.7,0,.2,1) both}
.jp-leaf{transform-origin:50% 100%;animation:jpLeaf 6s ease-in-out infinite}

/* ---------- page intro ---------- */
.jp-intro-screen{display:none}
.js .jp-intro-screen{position:fixed;inset:0;z-index:200;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:18px;background:var(--royal);color:var(--white);animation:introOut .9s cubic-bezier(.76,0,.24,1) .85s forwards}
.jp-intro-mono{width:76px;height:76px;border-radius:999px;border:1px solid var(--silver);display:flex;align-items:center;justify-content:center;font-family:'Cormorant Garamond',serif;font-size:30px;font-weight:600;animation:introMono .8s cubic-bezier(.2,.7,.1,1) both}
.jp-intro-name{overflow:hidden;font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:600;letter-spacing:.32em}
.jp-intro-name span{display:block;animation:jpRise .8s cubic-bezier(.2,.7,.1,1) .15s both}
.jp-intro-line{width:120px;height:2px;background:var(--orange);transform-origin:left;animation:jpLine .7s cubic-bezier(.7,0,.2,1) .2s both}
@keyframes introOut{to{transform:translateY(-100%);visibility:hidden}}
@keyframes introMono{from{opacity:0;transform:scale(.6) rotate(-20deg)}to{opacity:1;transform:none}}
/* hero + facts wait behind the intro, then play */
.is-loading .jp-hero,.is-loading .jp-hero *,.is-loading .jp-facts-in{animation-play-state:paused!important}

/* scroll progress line */
.jp-progress{display:none}
.js .jp-progress{display:block;position:fixed;left:0;right:0;top:0;z-index:150;height:3px;background:var(--orange);transform:scaleX(0);transform-origin:left;pointer-events:none}

/* ---------- scroll reveals (translate/scale props, so hover transforms keep working) ---------- */
@keyframes rvUp{from{opacity:0;translate:0 46px}to{opacity:1;translate:0 0}}
@keyframes rvLeft{from{opacity:0;translate:-70px 0}to{opacity:1;translate:0 0}}
@keyframes rvRight{from{opacity:0;translate:70px 0}to{opacity:1;translate:0 0}}
@keyframes rvZoom{from{opacity:0;scale:.86;translate:0 26px}to{opacity:1;scale:1;translate:0 0}}
@keyframes rvWord{from{translate:0 110%}to{translate:0 0}}
@keyframes rvPop{from{scale:0}60%{scale:1.15}to{scale:1}}
@keyframes jpCurtain{from{transform:scaleY(1)}to{transform:scaleY(0)}}
@keyframes jpKen{from{scale:1.18}to{scale:1}}
.js .jp-rv{opacity:0}
.js .jp-rv.is-in{animation:rvUp 1s cubic-bezier(.2,.7,.1,1) var(--d,0s) both}
.js .jp-rv--left.is-in{animation-name:rvLeft;animation-duration:1.2s}
.js .jp-rv--right.is-in{animation-name:rvRight;animation-duration:1.2s}
.js .jp-rv--zoom.is-in{animation-name:rvZoom}
/* headings rise word by word */
.jp-w{display:inline-block;overflow:hidden;vertical-align:bottom;padding:0 .08em .14em 0;margin:0 -.08em -.14em 0}
.jp-w>span{display:inline-block;translate:0 110%}
.jp-split.is-in .jp-w>span{animation:rvWord .95s cubic-bezier(.2,.7,.1,1) var(--d,0s) both}
/* photos: a royal curtain lifts, photo settles */
.js .jp-miam-img::after,.js .jp-photo::after{content:"";position:absolute;inset:0;z-index:3;background:var(--royal);transform-origin:top}
.js .jp-miam.is-in .jp-miam-img::after,.js .jp-photo.is-in::after{animation:jpCurtain 1.1s cubic-bezier(.7,0,.2,1) calc(var(--d,0s) + .25s) both}
.js .jp-miam.is-in .jp-miam-img img,.js .jp-photo.is-in img{animation:jpKen 1.8s cubic-bezier(.2,.6,.2,1) calc(var(--d,0s) + .25s) both}
/* small things that pop once their card arrives */
.js .jp-pin,.js .jp-ic,.js .jp-date{scale:0}
.js .is-in .jp-pin,.js .is-in .jp-ic,.js .is-in .jp-date{animation:rvPop .7s cubic-bezier(.3,1.4,.5,1) calc(var(--d,0s) + .35s) both}
.jp-fact b,.jp-stat b{font-variant-numeric:tabular-nums}
main{overflow-x:clip}
@media (max-width:700px){.js .jp-rv--left.is-in,.js .jp-rv--right.is-in{animation-name:rvUp}}

/* ---------- hero ---------- */
.jp-hero{position:relative;overflow:hidden;background:var(--royal);color:var(--white)}
.jp-hero-panel{position:absolute;top:0;right:0;bottom:0;width:36%;background:var(--silver);animation:jpPanel 1.3s cubic-bezier(.7,0,.2,1) both}
.jp-hero-leaf{position:absolute;right:3%;bottom:-6px;opacity:.5;pointer-events:none}
.jp-hero-in{position:relative;max-width:1440px;margin:0 auto;padding:clamp(56px,8vw,120px) clamp(20px,4vw,56px) clamp(72px,8vw,120px);display:flex;flex-wrap:wrap;align-items:center;gap:48px clamp(40px,6vw,96px)}
.jp-hero-text{flex:999 1 560px;min-width:0;display:flex;flex-direction:column;gap:24px}
.jp-eyebrow{display:flex;align-items:center;gap:14px;margin:0;font-family:Jost,sans-serif;font-size:12px;font-weight:500;line-height:1.8;letter-spacing:.28em;text-transform:uppercase;color:var(--silver)}
.jp-eyebrow::before{content:"";flex-shrink:0;width:36px;height:2px;background:var(--orange)}
.jp-hero h1{margin:0;font-family:'Cormorant Garamond',serif;font-weight:600;font-size:clamp(48px,6.4vw,96px);line-height:.98;color:var(--white)}
.jp-hero h1 em{font-style:italic;font-weight:500;color:var(--silver)}
.jp-hero-lead{margin:0;max-width:660px;font-family:Jost,sans-serif;font-size:19px;font-weight:300;line-height:1.7;color:#DCE3EC}

.jp-index{position:relative;flex:1 1 300px;min-width:0;max-width:400px;margin:0 auto;background:var(--white);box-shadow:0 30px 60px -34px rgba(16,42,82,.6);border-top:3px solid var(--orange)}
.jp-index p{margin:0;padding:20px 26px 6px;font-family:Jost,sans-serif;font-size:12px;font-weight:600;letter-spacing:.24em;text-transform:uppercase;color:var(--muted)}
.jp-index ol{list-style:none;margin:0;padding:4px 0 10px}
.jp-index a{display:flex;align-items:baseline;gap:18px;padding:10px 26px;text-decoration:none;color:var(--royal);font-family:'Cormorant Garamond',serif;font-size:23px;font-weight:600;transition:background-color .35s,padding-left .45s cubic-bezier(.2,.75,.1,1)}
.jp-index a span{font-size:17px;color:var(--orange);min-width:26px}
.jp-index a:hover{background:var(--soft);padding-left:34px;color:var(--royal)}

/* facts */
.jp-facts{max-width:1440px;margin:0 auto;padding:0 clamp(20px,4vw,56px)}
.jp-facts-in{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));margin-top:-48px;position:relative;background:var(--white);box-shadow:0 30px 60px -40px rgba(16,42,82,.45)}
.jp-fact{padding:24px 26px;border-right:1px solid #E3E8EF}
.jp-fact:last-child{border-right:0}
.jp-fact b{display:block;font-family:'Cormorant Garamond',serif;font-size:46px;font-weight:700;line-height:1;color:var(--royal)}
.jp-fact b i{font-style:normal;color:var(--orange)}
.jp-fact span{display:block;margin-top:8px;font-family:Jost,sans-serif;font-size:14px;font-weight:300;line-height:1.45;color:var(--body)}
@media (max-width:900px){.jp-facts-in{grid-template-columns:repeat(2,minmax(0,1fr));margin-top:-32px}.jp-fact:nth-child(2){border-right:0}.jp-fact:nth-child(-n+2){border-bottom:1px solid #E3E8EF}}

/* sticky section bar (sits under the sticky header) */
.jp-sub{position:sticky;top:73px;z-index:30;margin-top:clamp(40px,5vw,64px);background:rgba(245,247,250,.94);-webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px);border-bottom:1px solid var(--line)}
.jp-sub-in{max-width:1440px;margin:0 auto;padding:0 clamp(20px,4vw,56px);display:flex;gap:4px 28px;overflow-x:auto;scrollbar-width:none}
.jp-sub-in::-webkit-scrollbar{display:none}
.jp-sub a{position:relative;flex-shrink:0;padding:16px 0;font-family:Jost,sans-serif;font-size:12px;font-weight:500;letter-spacing:.18em;text-transform:uppercase;text-decoration:none;color:var(--muted);transition:color .3s}
.jp-sub a b{font-weight:600;color:var(--orange);margin-right:6px}
.jp-sub a::after{content:"";position:absolute;left:0;right:0;bottom:-1px;height:2px;background:var(--orange);transform:scaleX(0);transform-origin:left;transition:transform .45s cubic-bezier(.2,.75,.1,1)}
.jp-sub a:hover,.jp-sub a.is-active{color:var(--royal)}
.jp-sub a.is-active::after{transform:scaleX(1)}

/* ---------- sections ---------- */
.jp-wrap{max-width:1440px;margin:0 auto;padding:0 clamp(20px,4vw,56px)}
.jp-ch{padding:clamp(64px,8vw,112px) 0;scroll-margin-top:130px;display:flex;flex-wrap:wrap;gap:28px clamp(40px,6vw,96px)}
.jp-ch + .jp-ch{border-top:1px solid var(--line)}
.jp-ch-side{flex:1 1 240px;min-width:0}
.jp-ch-side .jp-sticky{position:sticky;top:150px;display:flex;flex-direction:column;gap:10px}
.jp-num{font-family:'Cormorant Garamond',serif;font-size:88px;font-weight:700;line-height:.85;color:transparent;-webkit-text-stroke:1.5px var(--orange)}
.jp-ch-side h2{margin:0;font-family:'Cormorant Garamond',serif;font-size:clamp(36px,3.4vw,50px);font-weight:600;line-height:1.04;color:var(--royal)}
.jp-ch-main{flex:999 1 620px;min-width:0;display:flex;flex-direction:column;gap:26px;font-family:Jost,sans-serif;font-weight:300}
.jp-intro{margin:0;font-family:'Cormorant Garamond',serif;font-size:clamp(24px,2.3vw,30px);font-weight:500;line-height:1.4;color:var(--ink)}
.jp-text{margin:0;font-size:17px;line-height:1.8;color:var(--body)}

/* MIAM feature */
.jp-miam{display:flex;flex-wrap:wrap;background:var(--royal);color:var(--white)}
.jp-miam-img{position:relative;flex:1 1 320px;min-width:0;min-height:300px;overflow:hidden;background:#2A4A7E}
.jp-miam-img img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;transition:transform 1.4s cubic-bezier(.2,.75,.1,1)}
.jp-miam:hover .jp-miam-img img{transform:scale(1.05)}
.jp-miam-img span{position:absolute;left:16px;top:16px;padding:6px 10px;background:var(--orange-btn);font-size:11px;font-weight:600;letter-spacing:.16em;text-transform:uppercase;color:var(--white)}
.jp-miam-body{flex:1 1 380px;min-width:0;display:flex;flex-direction:column;justify-content:center;gap:18px;padding:clamp(28px,4vw,52px)}
.jp-miam-body small{font-size:12px;font-weight:600;letter-spacing:.22em;text-transform:uppercase;color:var(--silver)}
.jp-miam-body h3{margin:0;font-family:'Cormorant Garamond',serif;font-size:clamp(36px,3.6vw,52px);font-weight:600;line-height:1}
.jp-miam-body p{margin:0;font-size:17px;line-height:1.75;color:#DCE3EC}
.jp-motto{margin:0;padding:16px 20px;border-left:2px solid var(--orange);background:rgba(255,255,255,.06);font-family:'Cormorant Garamond',serif;font-style:italic;font-size:clamp(24px,2.4vw,30px);line-height:1.25;color:var(--white)}
.jp-motto span{display:block;margin-top:6px;font-family:Jost,sans-serif;font-style:normal;font-size:13px;letter-spacing:.06em;color:var(--silver)}
.jp-btns{display:flex;flex-wrap:wrap;gap:12px;margin-top:4px}
.jp-btn{display:inline-flex;align-items:center;gap:10px;min-height:50px;padding:0 22px;font-size:13px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;text-decoration:none;transition:background-color .4s,color .4s,transform .4s cubic-bezier(.2,.75,.1,1)}
.jp-btn:hover{transform:translateY(-3px)}
.jp-btn-white{background:var(--white);color:var(--royal)}
.jp-btn-white:hover{background:var(--silver);color:var(--royal)}
.jp-btn-orange{background:var(--orange-btn);color:var(--white)}
.jp-btn-orange:hover{background:#8F4E0B;color:var(--white)}

/* values */
.jp-values{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:16px}
.jp-value{position:relative;display:flex;flex-direction:column;gap:10px;padding:28px 26px 30px;background:var(--white);border:1px solid #DCE2EA;overflow:hidden;transition:transform .6s cubic-bezier(.2,.75,.1,1),box-shadow .6s}
.jp-value::before{content:"";position:absolute;left:0;right:0;top:0;height:3px;background:var(--orange);transform:scaleX(.18);transform-origin:left;transition:transform .7s cubic-bezier(.2,.75,.1,1)}
.jp-value:hover{transform:translateY(-6px);box-shadow:0 26px 50px -32px rgba(16,42,82,.45)}
.jp-value:hover::before{transform:scaleX(1)}
.jp-value b{font-family:'Cormorant Garamond',serif;font-size:40px;font-weight:700;line-height:1;color:var(--royal)}
.jp-value small{font-size:12px;font-weight:600;letter-spacing:.22em;text-transform:uppercase;color:var(--muted)}
.jp-value p{margin:4px 0 0;font-size:15px;line-height:1.7;color:var(--body)}
@media (max-width:860px){.jp-values{grid-template-columns:minmax(0,1fr)}}
.jp-mission{margin:0;padding:28px 30px;background:var(--silver);border-left:3px solid var(--orange);font-family:'Cormorant Garamond',serif;font-size:clamp(21px,1.9vw,25px);font-weight:500;line-height:1.55;color:var(--ink)}
.jp-mission small{display:block;margin-bottom:10px;font-family:Jost,sans-serif;font-size:12px;font-weight:600;letter-spacing:.22em;text-transform:uppercase;color:var(--royal)}

/* academies */
.jp-acad{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px}
.jp-acad-card{display:flex;gap:18px;padding:26px;background:var(--white);border:1px solid #DCE2EA;transition:border-color .5s,transform .6s cubic-bezier(.2,.75,.1,1)}
.jp-acad-card:hover{border-color:var(--orange);transform:translateY(-4px)}
.jp-pin{flex-shrink:0;width:52px;height:52px;border-radius:999px;background:var(--royal);color:var(--white);display:flex;align-items:center;justify-content:center}
.jp-acad-card h3{margin:0 0 4px;font-family:'Cormorant Garamond',serif;font-size:27px;font-weight:600;line-height:1.1;color:var(--royal)}
.jp-acad-card small{display:block;margin-bottom:10px;font-size:12px;font-weight:600;letter-spacing:.18em;text-transform:uppercase;color:var(--muted)}
.jp-acad-card p{margin:0;font-size:15px;line-height:1.7;color:var(--body)}
/* academy cards link to the MIAM Career Academy page */
a.jp-acad-card{text-decoration:none;color:inherit}
.jp-acad-go{display:inline-block;margin-top:14px;padding-bottom:3px;border-bottom:2px solid var(--orange);font-size:12px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;color:var(--royal);transition:letter-spacing .5s}
.jp-acad-card:hover .jp-acad-go{letter-spacing:.2em}
@media (max-width:760px){.jp-acad{grid-template-columns:minmax(0,1fr)}}

/* meetings */
.jp-meet{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px}
.jp-meet-card{display:flex;flex-direction:column;gap:10px;padding:26px;background:var(--white);border:1px solid #DCE2EA;transition:box-shadow .6s,transform .6s cubic-bezier(.2,.75,.1,1)}
.jp-meet-card:hover{transform:translateY(-4px);box-shadow:0 24px 46px -30px rgba(16,42,82,.45)}
.jp-meet-card svg{color:var(--orange)}
.jp-meet-card h3{margin:0;font-family:'Cormorant Garamond',serif;font-size:26px;font-weight:600;line-height:1.1;color:var(--royal)}
.jp-meet-card p{margin:0;font-size:15px;line-height:1.7;color:var(--body)}
.jp-link{display:inline-flex;align-items:center;gap:8px;margin-top:4px;font-size:13px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;text-decoration:none;color:var(--royal);border-bottom:2px solid var(--orange);padding-bottom:3px;align-self:flex-start;transition:gap .4s}
.jp-link:hover{gap:14px;color:var(--royal)}
@media (max-width:760px){.jp-meet{grid-template-columns:minmax(0,1fr)}}
.jp-event{display:flex;flex-wrap:wrap;gap:24px;align-items:center;padding:30px;background:var(--royal);color:var(--white)}
.jp-date{flex-shrink:0;width:104px;padding:14px 0;border:1px solid var(--silver);text-align:center;font-family:Jost,sans-serif}
.jp-date b{display:block;font-family:'Cormorant Garamond',serif;font-size:46px;font-weight:700;line-height:1}
.jp-date span{display:block;margin-top:4px;font-size:12px;font-weight:500;letter-spacing:.2em;text-transform:uppercase;color:var(--silver)}
.jp-event-body{flex:1 1 360px;min-width:0;display:flex;flex-direction:column;gap:10px}
.jp-event-body small{font-size:12px;font-weight:600;letter-spacing:.22em;text-transform:uppercase;color:var(--silver)}
.jp-event-body h3{margin:0;font-family:'Cormorant Garamond',serif;font-size:clamp(28px,2.6vw,36px);font-weight:600;line-height:1.1}
.jp-event-body p{margin:0;font-size:16px;line-height:1.7;color:#DCE3EC}

/* causes */
.jp-causes{display:grid;grid-template-columns:repeat(auto-fill,minmax(210px,1fr));gap:14px}
.jp-cause{display:flex;flex-direction:column;gap:16px;padding:24px;background:var(--white);border:1px solid #DCE2EA;transition:transform .6s cubic-bezier(.2,.75,.1,1),background-color .6s,border-color .6s}
.jp-cause:hover{transform:translateY(-6px);background:var(--royal);border-color:var(--royal)}
.jp-ic{width:50px;height:50px;border-radius:999px;border:1.5px solid var(--orange);display:flex;align-items:center;justify-content:center;color:var(--orange);transition:background-color .6s,color .6s,border-color .6s}
.jp-cause:hover .jp-ic{background:var(--orange);border-color:var(--orange);color:var(--white)}
@media (max-width:560px){.jp-causes{grid-template-columns:repeat(2,minmax(0,1fr))}.jp-cause{padding:20px 16px}}
.jp-cause h3{margin:0;font-family:'Cormorant Garamond',serif;font-size:25px;font-weight:600;line-height:1.1;color:var(--royal);transition:color .6s}
.jp-cause:hover h3{color:var(--white)}
/* causes are links to the MIAM programme pages */
a.jp-cause{text-decoration:none;color:inherit}
.jp-cause-go{margin-top:auto;font-size:12px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;color:var(--muted);transition:color .6s,letter-spacing .5s}
.jp-cause:hover .jp-cause-go{color:var(--silver);letter-spacing:.2em}

/* impact */
.jp-stats{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));border-top:3px solid var(--orange);background:var(--white)}
.jp-stat{padding:26px 24px;border-right:1px solid #E3E8EF}
.jp-stat:last-child{border-right:0}
.jp-stat b{display:block;font-family:'Cormorant Garamond',serif;font-size:58px;font-weight:700;line-height:1;color:var(--royal)}
.jp-stat b i{font-style:normal;color:var(--orange)}
.jp-stat span{display:block;margin-top:8px;font-size:14px;line-height:1.5;color:var(--body)}
@media (max-width:900px){.jp-stats{grid-template-columns:repeat(2,minmax(0,1fr))}.jp-stat:nth-child(2){border-right:0}.jp-stat:nth-child(-n+2){border-bottom:1px solid #E3E8EF}}
.jp-photos{display:grid;grid-template-columns:2fr 1fr;grid-template-rows:auto auto;gap:14px}
.jp-photo{position:relative;margin:0;overflow:hidden;background:linear-gradient(150deg,#E9EDF2,#C9D1DB)}
.jp-photo:first-child{grid-row:1 / span 2;min-height:420px}
.jp-photo:not(:first-child){aspect-ratio:4/3}
.jp-photo img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;transition:transform 1.2s cubic-bezier(.2,.75,.1,1)}
.jp-photo:hover img{transform:scale(1.06)}
.jp-photo figcaption{position:absolute;left:0;right:0;bottom:0;padding:28px 16px 14px;background:linear-gradient(0deg,rgba(16,42,82,.85),rgba(16,42,82,0));font-size:13px;font-weight:500;letter-spacing:.06em;color:var(--white)}
@media (max-width:760px){.jp-photos{grid-template-columns:minmax(0,1fr)}.jp-photo:first-child{grid-row:auto;min-height:0;aspect-ratio:4/3}}

/* back to chapter I */
.jp-next{display:block;background:var(--royal);color:var(--white);text-decoration:none;transition:background-color .6s}
.jp-next:hover{background:#0C1F3E;color:var(--white)}
.jp-next-in{max-width:1440px;margin:0 auto;padding:clamp(56px,7vw,96px) clamp(20px,4vw,56px);display:flex;flex-wrap:wrap;align-items:center;gap:28px}
.jp-next small{display:flex;align-items:center;gap:12px;font-family:Jost,sans-serif;font-size:12px;font-weight:500;letter-spacing:.24em;text-transform:uppercase;color:var(--silver)}
.jp-next small::before{content:"";width:28px;height:2px;background:var(--orange)}
.jp-next strong{display:block;margin-top:12px;font-family:'Cormorant Garamond',serif;font-size:clamp(40px,5vw,72px);font-weight:600;line-height:1}
.jp-next .jp-arrow{flex-shrink:0;width:84px;height:84px;border-radius:999px;border:1px solid var(--silver);display:flex;align-items:center;justify-content:center;transition:transform .5s cubic-bezier(.2,.75,.1,1),background-color .5s,border-color .5s}
.jp-next:hover .jp-arrow{transform:translateX(-10px);background:var(--orange);border-color:var(--orange)}

@media (max-width:900px){
  .jp-eyebrow{letter-spacing:.18em}
  .jp-hero-panel{width:100%;top:auto;height:38%}
  .jp-hero-leaf{display:none}
  .jp-ch-side .jp-sticky{position:static}
  .jp-num{font-size:64px}
}
@media (prefers-reduced-motion:reduce){*,*::before,*::after{animation:none!important;transition:none!important}html{scroll-behavior:auto}}
</style>
</head>
<body>
<!-- <div class="jp-intro-screen" aria-hidden="true">
  <span class="jp-intro-mono">NJ</span>
  <span class="jp-intro-name"><span>NITU JOSHI</span></span>
  <span class="jp-intro-line"></span>
</div> -->
<div class="jp-progress" aria-hidden="true"></div>

<div style="background: #F5F7FA; color: #11223F; font-family: Jost, system-ui, sans-serif; font-weight: 300">

<?php $active = 'purpose'; include __DIR__ . '/partials/header.php'; ?>

<main>
  <!-- HERO -->
  <section class="jp-hero" aria-labelledby="jp-title">
    <div class="jp-hero-panel" aria-hidden="true"></div>
    <svg class="jp-hero-leaf jp-leaf" width="220" height="220" viewBox="0 0 120 120" fill="none" stroke="#173A70" stroke-width="1" stroke-linecap="round" aria-hidden="true"><path d="M60 118V40"/><path d="M60 70c-22-2-34-18-34-38 20 0 34 14 34 38z"/><path d="M60 56c18-2 30-16 30-34-18 0-30 12-30 34z"/></svg>
    <div class="jp-hero-in">
      <div class="jp-hero-text">
        <p class="jp-eyebrow jp-fade" style="animation-delay:.2s">Chapter II · My Journey of Purpose</p>
        <h1 id="jp-title">
          <span class="jp-mask"><span style="animation-delay:.3s">Values, compassion</span></span>
          <span class="jp-mask"><span style="animation-delay:.45s"><em>and meaningful change.</em></span></span>
        </h1>
        <div class="jp-line" style="width:120px;height:2px;background:var(--orange);animation-delay:.9s"></div>
        <p class="jp-hero-lead jp-fade" style="animation-delay:1s">The second journey carries the same entrepreneurial thinking into social responsibility — through MIAM Charitable Trust, established in 2022.</p>
      </div>
      <nav class="jp-index jp-fade" style="animation-delay:.7s" aria-label="Sections on this page">
        <p>In this chapter</p>
        <ol>
          <li><a href="#miam"><span>01</span>MIAM Charitable Trust</a></li>
          <li><a href="#values"><span>02</span>Core values</a></li>
          <li><a href="#academies"><span>03</span>Career Academies</a></li>
          <li><a href="#moments"><span>04</span>Meetings &amp; moments</a></li>
          <li><a href="#causes"><span>05</span>Causes</a></li>
          <li><a href="#impact"><span>06</span>Impact so far</a></li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- AT A GLANCE -->
  <div class="jp-facts">
    <div class="jp-facts-in jp-fade" style="animation-delay:1.2s" role="list" aria-label="At a glance">
      <div class="jp-fact" role="listitem"><b>2022</b><span>MIAM Charitable Trust founded</span></div>
      <div class="jp-fact" role="listitem"><b>2</b><span>Career Academies for rural &amp; tribal youth</span></div>
      <div class="jp-fact" role="listitem"><b>25</b><span>Schools at the Inter-Centre Sports Event, 2024</span></div>
      <div class="jp-fact" role="listitem"><b>900<i>+</i></b><span>Students received MIAM notebooks</span></div>
    </div>
  </div>

  <!-- SECTION BAR -->
  <nav class="jp-sub" aria-label="Jump to section">
    <div class="jp-sub-in">
      <a href="#miam"><b>01</b>MIAM Trust</a>
      <a href="#values"><b>02</b>Core values</a>
      <a href="#academies"><b>03</b>Academies</a>
      <a href="#moments"><b>04</b>Moments</a>
      <a href="#causes"><b>05</b>Causes</a>
      <a href="#impact"><b>06</b>Impact</a>
    </div>
  </nav>

  <div class="jp-wrap">

    <!-- 01 MIAM -->
    <section class="jp-ch" id="miam" aria-labelledby="h-miam">
      <div class="jp-ch-side"><div class="jp-sticky"><span class="jp-num jp-rv jp-rv--zoom" aria-hidden="true">01</span><h2 class="jp-split" id="h-miam">The Trust</h2></div></div>
      <div class="jp-ch-main">
        <article class="jp-miam jp-rv jp-rv--zoom">
          <div class="jp-miam-img"><img src="assets/archive/2024/11/miam.jpg" alt="MIAM Charitable Trust" loading="lazy"><span>Founder · Est. 2022</span></div>
          <div class="jp-miam-body">
            <small>Founded by Nitu Joshi</small>
            <h3>MIAM Charitable Trust</h3>
            <p>Founded by Nitu Joshi to tackle critical socio-cultural, environmental and socio-economic challenges.</p>
            <p class="jp-motto">“Dosro ke liye bhi jeena sikho”<span>Learning to live for others</span></p>
            <div class="jp-btns">
              <a href="https://miamcharitabletrust.com" class="jp-btn jp-btn-white">Visit MIAM Trust <span aria-hidden="true">↗</span></a>
              <a href="https://miamcharitabletrust.com/frontend/pages/donation/donation.html" class="jp-btn jp-btn-orange">Support a cause <span aria-hidden="true">→</span></a>
            </div>
          </div>
        </article>
      </div>
    </section>

    <!-- 02 VALUES -->
    <section class="jp-ch" id="values" aria-labelledby="h-values">
      <div class="jp-ch-side"><div class="jp-sticky"><span class="jp-num jp-rv jp-rv--zoom" aria-hidden="true">02</span><h2 class="jp-split" id="h-values">Core values</h2></div></div>
      <div class="jp-ch-main">
        <div class="jp-values">
          <article class="jp-value jp-rv"><b>Manavta</b><small>Humanity</small><p>Treating all sources with dignity and respect — human, animal or environment — with kindness and compassion towards all living beings.</p></article>
          <article class="jp-value jp-rv"><b>Sanskruti</b><small>Culture</small><p>Integrating ancient traditions with modern practices through cultural education, celebrations and traditional practices to ground the younger generation.</p></article>
          <article class="jp-value jp-rv"><b>Sanskar</b><small>Values</small><p>Guiding children toward sharing and caring — for family, friends, animals and the environment — to help build a safe and secure society.</p></article>
        </div>
        <p class="jp-mission jp-rv jp-rv--left"><small>Our mission</small>Our mission is to bridge the gap in education and basic necessities, ensuring no one is left behind due to poverty or lack of resources — providing support, education, food and care so people can live with dignity and hope. We also promote education in compassion, ethics and traditional Indian wisdom, especially among the youth, and work to ensure the welfare of destitute animals is never neglected.</p>
      </div>
    </section>

    <!-- 03 ACADEMIES -->
    <section class="jp-ch" id="academies" aria-labelledby="h-acad">
      <div class="jp-ch-side"><div class="jp-sticky"><span class="jp-num jp-rv jp-rv--zoom" aria-hidden="true">03</span><h2 class="jp-split" id="h-acad">Career Academies</h2></div></div>
      <div class="jp-ch-main">
        <p class="jp-intro jp-rv">Two Career Academies, opened to empower rural and tribal youth by helping them prepare for government job examinations — closing the gap between desire and opportunity.</p>
        <div class="jp-acad">
          <a href="https://miamcharitabletrust.com/frontend/pages/program/educationYouthDevelopment/careerAcademy/miamAcademy/miamAcademy.html" target="_blank" rel="noopener" class="jp-acad-card jp-rv jp-rv--left" aria-label="Waghera Village Career Academy — MIAM Charitable Trust (opens in a new tab)">
            <span class="jp-pin"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-11.5A7 7 0 0 1 19 9.5C19 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg></span>
            <div><h3>Waghera Village</h3><small>Nashik</small><p>35 km from Nashik, with limited access to higher education and skill development — a platform for students to prepare for tough government exams close to home.</p><span class="jp-acad-go" aria-hidden="true">Learn more ↗</span></div>
          </a>
          <a href="https://miamcharitabletrust.com/frontend/pages/program/educationYouthDevelopment/careerAcademy/miamAcademy/miamAcademy.html" target="_blank" rel="noopener" class="jp-acad-card jp-rv jp-rv--right" aria-label="Chintalpeth Village Career Academy — MIAM Charitable Trust (opens in a new tab)">
            <span class="jp-pin"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-11.5A7 7 0 0 1 19 9.5C19 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg></span>
            <div><h3>Chintalpeth Village</h3><small>Gadchiroli</small><p>Located in a tribal area, offering training programmes and study materials that encourage youth toward government service and community development.</p><span class="jp-acad-go" aria-hidden="true">Learn more ↗</span></div>
          </a>
        </div>
      </div>
    </section>

    <!-- 04 MOMENTS -->
    <section class="jp-ch" id="moments" aria-labelledby="h-moments">
      <div class="jp-ch-side"><div class="jp-sticky"><span class="jp-num jp-rv jp-rv--zoom" aria-hidden="true">04</span><h2 class="jp-split" id="h-moments">Notable meetings &amp; moments</h2></div></div>
      <div class="jp-ch-main">
        <article class="jp-event jp-rv jp-rv--zoom">
          <div class="jp-date" aria-hidden="true"><b>11</b><span>Dec 2024</span></div>
          <div class="jp-event-body">
            <small>Wadlapeth, Gadchiroli</small>
            <h3>Inter-Centre Sports Event</h3>
            <p>Inaugurated by Nitu Joshi on December 11, 2024. Organised by MIAM Charitable Trust with 25 schools participating — over 900 students received MIAM notebooks, and trophies were distributed to winners.</p>
          </div>
        </article>
        <div class="jp-meet">
          <article class="jp-meet-card jp-rv jp-rv--left">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><path d="M16 4.5a3.5 3.5 0 0 1 0 7M18 14.5a6.5 6.5 0 0 1 3.5 5.5"/></svg>
            <h3>Shri Suresh Bhageria</h3>
            <p>Mumbai Mahanagar Sanghchalak (RSS) and Chairman, Bhageria Group of Industries — exploring support initiatives for women in Adivasi areas through MIAM Charitable Trust.</p>
          </article>
          <article class="jp-meet-card jp-rv jp-rv--right">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><path d="M16 4.5a3.5 3.5 0 0 1 0 7M18 14.5a6.5 6.5 0 0 1 3.5 5.5"/></svg>
            <h3>Shri Sanjay Daine</h3>
            <p>District Collector of Gadchiroli — coordinating MIAM's on-ground work in the district.</p>
          </article>
          <article class="jp-meet-card jp-rv jp-rv--left">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><path d="M16 4.5a3.5 3.5 0 0 1 0 7M18 14.5a6.5 6.5 0 0 1 3.5 5.5"/></svg>
            <h3>Sri Sri Ravi Shankar</h3>
            <p>Meeting with the spiritual leader, in keeping with MIAM's grounding in culture and values.</p>
          </article>
          <article class="jp-meet-card jp-rv jp-rv--right">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><path d="M16 4.5a3.5 3.5 0 0 1 0 7M18 14.5a6.5 6.5 0 0 1 3.5 5.5"/></svg>
            <h3>Kareena Kapoor — GJEPC India</h3>
            <p>MIAM received a donation from Bollywood actress Kareena Kapoor at an event organised by GJEPC India.</p>
            <a href="gallery.php" class="jp-link">Watch in Gallery <span aria-hidden="true">→</span></a>
          </article>
        </div>
      </div>
    </section>

    <!-- 05 CAUSES -->
    <section class="jp-ch" id="causes" aria-labelledby="h-causes">
      <div class="jp-ch-side"><div class="jp-sticky"><span class="jp-num jp-rv jp-rv--zoom" aria-hidden="true">05</span><h2 class="jp-split" id="h-causes">Causes I stand behind</h2></div></div>
      <div class="jp-ch-main">
        <p class="jp-text jp-rv">Initiatives personally backed through MIAM Charitable Trust.</p>
        <div class="jp-causes">
          <a href="https://miamcharitabletrust.com/frontend/pages/program/educationYouthDevelopment/educationYouthDevelopment.html" target="_blank" rel="noopener" class="jp-cause jp-rv jp-rv--zoom" aria-label="Child Education — MIAM Charitable Trust (opens in a new tab)"><span class="jp-ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 8l10-5 10 5-10 5z"/><path d="M6 10v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"/></svg></span><h3>Child Education</h3><span class="jp-cause-go" aria-hidden="true">Learn more ↗</span></a>
          <a href="https://miamcharitabletrust.com/frontend/pages/program/environment/environment.html" target="_blank" rel="noopener" class="jp-cause jp-rv jp-rv--zoom" aria-label="Reforestation — MIAM Charitable Trust (opens in a new tab)"><span class="jp-ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22v-8"/><path d="M12 14c-4 0-7-3-7-7 0-1 .2-2 .6-2.8C7 6 9 6.5 12 6.5s5-.5 6.4-2.3c.4.8.6 1.8.6 2.8 0 4-3 7-7 7z"/></svg></span><h3>Reforestation</h3><span class="jp-cause-go" aria-hidden="true">Learn more ↗</span></a>
          <a href="https://miamcharitabletrust.com/frontend/pages/program/animalWelfare/animalWelfare.html" target="_blank" rel="noopener" class="jp-cause jp-rv jp-rv--zoom" aria-label="Animal Welfare — MIAM Charitable Trust (opens in a new tab)"><span class="jp-ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="5" cy="10" r="2"/><circle cx="9.5" cy="5.5" r="2"/><circle cx="14.5" cy="5.5" r="2"/><circle cx="19" cy="10" r="2"/><path d="M12 12c-3 0-6 4-6 7 0 1.5 1.5 2 3 2 1 0 2-.5 3-.5s2 .5 3 .5c1.5 0 3-.5 3-2 0-3-3-7-6-7z"/></svg></span><h3>Animal Welfare</h3><span class="jp-cause-go" aria-hidden="true">Learn more ↗</span></a>
          <a href="https://miamcharitabletrust.com/frontend/pages/program/community/community.html" target="_blank" rel="noopener" class="jp-cause jp-rv jp-rv--zoom" aria-label="Water Conservation — MIAM Charitable Trust (opens in a new tab)"><span class="jp-ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3s6 6.5 6 11a6 6 0 0 1-12 0c0-4.5 6-11 6-11z"/></svg></span><h3>Water Conservation</h3><span class="jp-cause-go" aria-hidden="true">Learn more ↗</span></a>
          <a href="https://miamcharitabletrust.com/frontend/pages/program/educationYouthDevelopment/careerAcademy/library/library.html" target="_blank" rel="noopener" class="jp-cause jp-rv jp-rv--zoom" aria-label="Library Revival — MIAM Charitable Trust (opens in a new tab)"><span class="jp-ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 5h6a3 3 0 0 1 3 3v12a2 2 0 0 0-2-2H3z"/><path d="M21 5h-6a3 3 0 0 0-3 3v12a2 2 0 0 1 2-2h7z"/></svg></span><h3>Library Revival</h3><span class="jp-cause-go" aria-hidden="true">Learn more ↗</span></a>
          <a href="https://miamcharitabletrust.com/frontend/pages/program/educationYouthDevelopment/sponsorship/sponsorship.html" target="_blank" rel="noopener" class="jp-cause jp-rv jp-rv--zoom" aria-label="Student Welfare — MIAM Charitable Trust (opens in a new tab)"><span class="jp-ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="7" r="3.5"/><path d="M5 21v-2a7 7 0 0 1 14 0v2"/></svg></span><h3>Student Welfare</h3><span class="jp-cause-go" aria-hidden="true">Learn more ↗</span></a>
          <a href="https://miamcharitabletrust.com/frontend/pages/program/womenEmpowermentAndLivelihood/womenEmpowermentAndLivelihood.html" target="_blank" rel="noopener" class="jp-cause jp-rv jp-rv--zoom" aria-label="Women Empowerment — MIAM Charitable Trust (opens in a new tab)"><span class="jp-ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="9" r="5"/><path d="M12 14v7M9 18h6"/></svg></span><h3>Women Empowerment</h3><span class="jp-cause-go" aria-hidden="true">Learn more ↗</span></a>
        </div>
      </div>
    </section>

    <!-- 06 IMPACT -->
    <section class="jp-ch" id="impact" aria-labelledby="h-impact">
      <div class="jp-ch-side"><div class="jp-sticky"><span class="jp-num jp-rv jp-rv--zoom" aria-hidden="true">06</span><h2 class="jp-split" id="h-impact">Impact so far</h2></div></div>
      <div class="jp-ch-main">
        <div class="jp-stats jp-rv" role="list" aria-label="Social impact">
          <div class="jp-stat" role="listitem"><b>900<i>+</i></b><span>MIAM notebooks given to students, Gadchiroli sports event</span></div>
          <div class="jp-stat" role="listitem"><b>25</b><span>Schools participating, Inter-Centre Sports Event 2024</span></div>
          <div class="jp-stat" role="listitem"><b>[N]</b><span>Libraries revived</span></div>
          <div class="jp-stat" role="listitem"><b>[N]</b><span>Animals cared for</span></div>
        </div>
        <div class="jp-photos">
          <figure class="jp-photo jp-rv jp-rv--left"><img src="assets/archive/2024/12/DSC04502.jpg" alt="Inter-Centre Sports Event, Gadchiroli" loading="lazy"><figcaption>Inter-Centre Sports Event, Gadchiroli</figcaption></figure>
          <figure class="jp-photo jp-rv jp-rv--right"><img src="assets/archive/2024/12/Notebook-1.jpg" alt="MIAM notebooks distributed" loading="lazy"><figcaption>MIAM notebooks distributed</figcaption></figure>
          <figure class="jp-photo jp-rv jp-rv--right"><img src="assets/archive/2024/12/DSC04749.jpg" alt="Inter-Centre Sports Event, Gadchiroli" loading="lazy"><figcaption>Inter-Centre Sports Event, Gadchiroli</figcaption></figure>
        </div>
      </div>
    </section>
  </div>
</main>

<a href="professional.php" class="jp-next">
  <span class="jp-next-in">
    <span class="jp-arrow jp-rv jp-rv--zoom" aria-hidden="true"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12H4M10 6l-6 6 6 6"/></svg></span>
    <span><small class="jp-rv">Back to Chapter I</small><strong class="jp-split">My Professional Journey</strong></span>
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
(function () {
  // menu (unchanged behaviour)
  var menu = document.getElementById('site-menu'), open = document.getElementById('menu-open'), close = document.getElementById('menu-close');
  if (menu && open && close) {
    var setMenu = function (on) {
      menu.hidden = !on; open.setAttribute('aria-expanded', on ? 'true' : 'false');
      document.body.style.overflow = on ? 'hidden' : '';
      (on ? close : open).focus();
    };
    open.addEventListener('click', function () { setMenu(true); });
    close.addEventListener('click', function () { setMenu(false); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && !menu.hidden) setMenu(false); });
  }
  // header shrink-on-scroll
  var header = document.querySelector('.ab-header');
  if (header) {
    var onHeaderScroll = function () { header.classList.toggle('is-scrolled', window.scrollY > 40); };
    window.addEventListener('scroll', onHeaderScroll, { passive: true });
    onHeaderScroll();
  }
  // keep the section bar right under the sticky header, and highlight the current section
  var bar = document.querySelector('.jp-sub');
  function place() { if (header && bar) bar.style.top = header.offsetHeight + 'px'; }
  place(); window.addEventListener('resize', place);
  if (header) header.addEventListener('transitionend', place);
  window.addEventListener('scroll', place, { passive: true });
  var links = Array.prototype.slice.call(document.querySelectorAll('.jp-sub a'));
  if (!('IntersectionObserver' in window) || !links.length) return;
  var byId = {};
  links.forEach(function (a) { byId[a.getAttribute('href').slice(1)] = a; });
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (!e.isIntersecting) return;
      links.forEach(function (a) { a.classList.remove('is-active'); a.removeAttribute('aria-current'); });
      var a = byId[e.target.id];
      if (a) { a.classList.add('is-active'); a.setAttribute('aria-current', 'true'); a.parentNode.scrollLeft = Math.max(0, a.offsetLeft - 20); }
    });
  }, { rootMargin: '-45% 0px -50% 0px' });
  Object.keys(byId).forEach(function (id) { var s = document.getElementById(id); if (s) io.observe(s); });
})();
</script>
<script>
(function () {
  if (!document.documentElement.classList.contains("js")) return; // reduced motion: page shows as is

  // headings: wrap each word so it can rise on its own
  document.querySelectorAll(".jp-split").forEach(function (el) {
    var words = el.textContent.trim().split(/\s+/);
    el.setAttribute("aria-label", words.join(" "));
    el.textContent = "";
    words.forEach(function (w, i) {
      var outer = document.createElement("span"), inner = document.createElement("span");
      outer.className = "jp-w"; outer.setAttribute("aria-hidden", "true");
      inner.textContent = w; inner.style.setProperty("--d", i * 0.08 + "s");
      outer.appendChild(inner); el.appendChild(outer);
      if (i < words.length - 1) el.appendChild(document.createTextNode(" "));
    });
  });

  // numbers count up from 0 (years like 2022 and [N] placeholders stay as they are)
  var counters = [];
  document.querySelectorAll(".jp-fact b, .jp-stat b").forEach(function (b) {
    var t = b.firstChild, n = t && parseInt(t.nodeValue, 10);
    if (!n || (n >= 1900 && n <= 2100)) return;
    counters.push({ node: t, to: n, el: b });
    t.nodeValue = "0";
  });
  function count(c) {
    var start = null, dur = 1800;
    function step(ts) {
      if (start === null) start = ts;
      var p = Math.min(1, (ts - start) / dur);
      c.node.nodeValue = String(Math.round(c.to * (1 - Math.pow(1 - p, 3))));
      if (p < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  var targets = document.querySelectorAll(".jp-rv, .jp-split, .jp-fact b, .jp-stat b");
  function reveal(el, delay) {
    if (el.classList.contains("is-in")) return;
    if (delay && !el.style.getPropertyValue("--d")) el.style.setProperty("--d", delay + "s");
    el.classList.add("is-in");
    counters.forEach(function (c) {
      if (c.el === el) setTimeout(function () { count(c); }, Math.max(300, 2300 - performance.now()));
    });
  }
  if (!("IntersectionObserver" in window)) {
    targets.forEach(function (el) { reveal(el, 0); });
  } else {
    var io = new IntersectionObserver(function (entries) {
      // things that appear together come in one after another
      entries.filter(function (e) { return e.isIntersecting; }).forEach(function (e, i) {
        reveal(e.target, Math.min(i * 0.09, 0.6));
        io.unobserve(e.target);
      });
    }, { rootMargin: "0px 0px -10% 0px", threshold: 0.12 });
    targets.forEach(function (el) { io.observe(el); });
  }

  // scroll progress line + gentle hero parallax
  var bar = document.querySelector(".jp-progress"), hero = document.querySelector(".jp-hero"),
    heroText = document.querySelector(".jp-hero-text"), index = document.querySelector(".jp-index"), ticking = false;
  function onScroll() {
    var y = window.scrollY, max = document.documentElement.scrollHeight - window.innerHeight;
    if (bar) bar.style.transform = "scaleX(" + (max > 0 ? y / max : 0) + ")";
    if (hero && y < hero.offsetHeight) {
      if (heroText) {
        heroText.style.translate = "0 " + y * 0.18 + "px";
        heroText.style.opacity = String(Math.max(0, 1 - y / (hero.offsetHeight * 0.9)));
      }
      if (index) index.style.translate = "0 " + y * -0.08 + "px";
    }
    ticking = false;
  }
  window.addEventListener("scroll", function () { if (!ticking) { ticking = true; requestAnimationFrame(onScroll); } }, { passive: true });
  onScroll();

  var intro = document.querySelector(".jp-intro-screen");
  if (intro) intro.addEventListener("animationend", function (e) { if (e.animationName === "introOut") intro.remove(); });
})();
</script>
</body>
</html>