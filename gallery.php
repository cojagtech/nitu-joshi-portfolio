<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nitu Joshi — Gallery</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&amp;family=Jost:wght@300;400;500;600&amp;display=swap">
<link rel="stylesheet" href="assets/header.css">
<style>

body{margin:0;background:#F5F7FA}
a{color:#173A70}a:hover{color:#C9792F}
@keyframes glRise{from{transform:translateY(108%)}to{transform:none}}
@keyframes glFade{from{opacity:0;transform:translateY(28px)}to{opacity:1;transform:none}}
.gl-mask{overflow:hidden;display:block}
.gl-mask>span{display:block;animation:glRise 1.2s cubic-bezier(.2,.75,.1,1) both}
.gl-fade{animation:glFade 1s cubic-bezier(.2,.75,.1,1) both}
@supports (animation-timeline: view()){
  .gl-rv{animation:glFade linear both;animation-timeline:view();animation-range:entry 0% cover 28%}
}
.gl-nav a{text-decoration:none;position:relative;padding:6px 0;color:#173A70}
.gl-nav a::after{content:"";position:absolute;left:0;right:0;bottom:0;height:1px;background:#C9792F;transform:scaleX(0);transform-origin:right;transition:transform .45s cubic-bezier(.2,.75,.1,1)}
.gl-nav a:hover::after{transform:scaleX(1);transform-origin:left}
.gl-tile{overflow:hidden;position:relative;display:block}
.gl-tile img,.gl-tile video{width:100%;height:100%;object-fit:cover;display:block;transition:transform .7s cubic-bezier(.2,.75,.1,1)}
.gl-tile:hover img,.gl-tile:hover video{transform:scale(1.06)}
@media (prefers-reduced-motion:reduce){*{animation:none!important;transition:none!important}}
</style>
</head>
<body>


<div style="background: #F5F7FA; color: #11223F; font-family: Jost, system-ui, sans-serif; font-weight: 300">

<?php $active = 'gallery'; include __DIR__ . '/partials/header.php'; ?>


  <main style="width: 100%; max-width: 1480px; margin: 0 auto; box-sizing: border-box; padding: 0 clamp(20px, 4vw, 56px)">

    <section style="padding: clamp(56px, 8vw, 120px) 0 clamp(48px, 6vw, 80px); display: flex; flex-direction: column; gap: 24px; max-width: 900px">
      <p class="gl-fade" style="margin: 0; font-size: 13px; font-weight: 500; letter-spacing: .18em; text-transform: uppercase; color: #C9792F">Photos &amp; Film</p>
      <h1 style="margin: 0; font-family: 'Cormorant Garamond', serif; font-weight: 600; font-size: clamp(44px, 5.6vw, 80px); line-height: .98; color: #173A70">
        <span class="gl-mask"><span style="animation-delay: .1s">Gallery</span></span>
      </h1>
    </section>

    <section style="padding: 0 0 clamp(56px, 7vw, 100px); display: flex; flex-direction: column; gap: 28px">
      <h2 id="ebina" class="gl-rv" style="margin: 0; font-family: 'Cormorant Garamond', serif; font-size: 28px; font-weight: 600; color: #173A70">Ebina Entertainment &amp; Dharamraobaba Atram</h2>
      <div class="gl-rv" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 12px">
        <a href="assets/archive/2023/02/Nitu-Joshi-Ebina-Entertainment-1.jpeg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2023/02/Nitu-Joshi-Ebina-Entertainment-1.jpeg" alt="Ebina Entertainment"></a>
        <a href="assets/archive/2023/02/Nitu-Joshi-Ebina-Entertainment-2.jpeg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2023/02/Nitu-Joshi-Ebina-Entertainment-2.jpeg" alt="Ebina Entertainment"></a>
        <a href="assets/archive/2023/02/Nitu-Joshi-Ebina-Entertainment-3.jpeg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2023/02/Nitu-Joshi-Ebina-Entertainment-3.jpeg" alt="Ebina Entertainment"></a>
        <a href="assets/archive/2023/02/Nitu-Joshi-Ebina-Entertainment-4.jpeg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2023/02/Nitu-Joshi-Ebina-Entertainment-4.jpeg" alt="Ebina Entertainment"></a>
        <a href="assets/archive/2024/12/BABA-HAND-POSTER-3-X-2-FINA.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2024/12/BABA-HAND-POSTER-3-X-2-FINA.jpg" alt="Dharamraobaba Atram poster"></a>
        <a href="assets/archive/2024/12/ABH06377.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2024/12/ABH06377.jpg" alt="Trailer launch event"></a>
        <a href="assets/archive/2024/11/Untitled-1280-x-850-px-4.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2024/11/Untitled-1280-x-850-px-4.jpg" alt="Trailer launch event"></a>
        <a href="assets/archive/2024/11/Untitled-1280-x-850-px-7.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2024/11/Untitled-1280-x-850-px-7.jpg" alt="Trailer launch event"></a>
      </div>
    </section>

    <section style="padding: 0 0 clamp(56px, 7vw, 100px); display: flex; flex-direction: column; gap: 28px">
      <h2 id="aayush" class="gl-rv" style="margin: 0; font-family: 'Cormorant Garamond', serif; font-size: 28px; font-weight: 600; color: #173A70">Apnapan — Aayush Telefilms</h2>
      <div class="gl-rv" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 12px">
        <a href="assets/archive/2023/01/apnapan-serial-working-stills-ofactors-1.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2023/01/apnapan-serial-working-stills-ofactors-1.jpg" alt="Apnapan working stills"></a>
        <a href="assets/archive/2023/01/apnapan-serial-working-stills-ofactors-2.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2023/01/apnapan-serial-working-stills-ofactors-2.jpg" alt="Apnapan working stills"></a>
        <a href="assets/archive/2023/01/apnapan-serial-working-stills-ofactors-3.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2023/01/apnapan-serial-working-stills-ofactors-3.jpg" alt="Apnapan working stills"></a>
        <a href="assets/archive/2023/01/apnapan-serial-working-stills-ofactors-4.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2023/01/apnapan-serial-working-stills-ofactors-4.jpg" alt="Apnapan working stills"></a>
        <a href="assets/archive/2023/01/Apnapan-Brocher-1.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2023/01/Apnapan-Brocher-1.jpg" alt="Apnapan brochure"></a>
        <a href="assets/archive/2023/01/Apnapan-Brocher-2.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2023/01/Apnapan-Brocher-2.jpg" alt="Apnapan brochure"></a>
      </div>
    </section>

    <section style="padding: 0 0 clamp(56px, 7vw, 100px); display: flex; flex-direction: column; gap: 28px">
      <h2 class="gl-rv" style="margin: 0; font-family: 'Cormorant Garamond', serif; font-size: 28px; font-weight: 600; color: #173A70">Awards &amp; Recognition</h2>
      <div class="gl-rv" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 12px">
        <a href="assets/archive/2023/11/Nitu-Joshi-Mittal-1.jpeg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2023/11/Nitu-Joshi-Mittal-1.jpeg" alt="Award ceremony"></a>
        <a href="assets/archive/2023/11/Nitu-Joshi-Mittal-2.jpeg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2023/11/Nitu-Joshi-Mittal-2.jpeg" alt="Award ceremony"></a>
        <a href="assets/archive/2023/11/Nitu-Joshi-Mittal-3.jpeg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2023/11/Nitu-Joshi-Mittal-3.jpeg" alt="Award ceremony"></a>
        <a href="assets/archive/2023/11/Nitu-Joshi-Mittal-4.jpeg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2023/11/Nitu-Joshi-Mittal-4.jpeg" alt="Award ceremony"></a>
        <div class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px; background:#0C1F3E"><video src="assets/archive/2023/11/Nitu-Joshi-Mittal-Award-1.mp4" controls preload="metadata"></video></div>
        <div class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px; background:#0C1F3E"><video src="assets/archive/2023/11/Nitu-Joshi-Mittal-Award-2.mp4" controls preload="metadata"></video></div>
      </div>
    </section>

    <section style="padding: 0 0 clamp(72px, 9vw, 120px); display: flex; flex-direction: column; gap: 28px">
      <h2 class="gl-rv" style="margin: 0; font-family: 'Cormorant Garamond', serif; font-size: 28px; font-weight: 600; color: #173A70">MIAM &amp; Social Work</h2>
      <div class="gl-rv" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 12px">
        <a href="assets/archive/2024/12/DSC04502.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2024/12/DSC04502.jpg" alt="Inter-Centre Sports Event, Gadchiroli"></a>
        <a href="assets/archive/2024/12/DSC04579.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2024/12/DSC04579.jpg" alt="Inter-Centre Sports Event, Gadchiroli"></a>
        <a href="assets/archive/2024/12/DSC04654.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2024/12/DSC04654.jpg" alt="Inter-Centre Sports Event, Gadchiroli"></a>
        <a href="assets/archive/2024/12/DSC04749.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2024/12/DSC04749.jpg" alt="Inter-Centre Sports Event, Gadchiroli"></a>
        <a href="assets/archive/2024/12/Notebook-1.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2024/12/Notebook-1.jpg" alt="MIAM notebooks distributed"></a>
        <a href="assets/archive/2024/11/miam.jpg" class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px"><img src="assets/archive/2024/11/miam.jpg" alt="MIAM Charitable Trust"></a>
        <div class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px; background:#0C1F3E"><video src="assets/archive/2024/12/KAREENA-Full-Video.mp4" controls preload="metadata"></video></div>
        <div class="gl-tile" style="aspect-ratio: 4/5; border-radius: 10px; background:#0C1F3E"><video src="assets/archive/2024/12/NDTV.mp4" controls preload="metadata"></video></div>
      </div>
      <p style="margin: 0; font-size: 13px; color: #5A6A82">Full archive of originals (press clippings, event stills, brochures) is kept in <code>assets/archive/</code> for future use.</p>
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
