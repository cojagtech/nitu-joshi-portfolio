<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nitu Joshi — About Me</title>
    <meta
      name="description"
      content="About Nitu Joshi Mittal — business and social entrepreneur, fashion and jewellery designer, film producer and founder of MIAM Charitable Trust."
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&amp;family=Jost:wght@300;400;500;600&amp;display=swap"
    />
    <link rel="stylesheet" href="assets/header.css" />
    <style>
      /* ===== Royal Silver theme + orange accent =====
   Royal Blue #173A70 · deep #102A52 · Silver #BFC7D1 · Soft White #F5F7FA · White #FFFFFF
   Accent Orange #C9792F (hover #B2660F) — used for lines, numbers, borders, fills; not for small text. */
      :root {
        --royal: #173a70;
        --royal-deep: #102a52;
        --silver: #bfc7d1;
        --soft: #f5f7fa;
        --white: #ffffff;
        --ink: #11223f;
        --body: #3c4a61;
        --orange: #c9792f;
        --orange-dk: #b2660f;
        --hero-text: #dce3ec;
      }
      * {
        box-sizing: border-box;
      }
      html {
        scroll-behavior: smooth;
      }
      body {
        margin: 0;
        background: var(--soft);
        color: var(--ink);
        font-family: Jost, system-ui, sans-serif;
        font-weight: 300;
      }
      a {
        color: var(--royal);
      }
      a:focus-visible,
      button:focus-visible {
        outline: 2px solid var(--orange);
        outline-offset: 3px;
      }
      img {
        max-width: 100%;
        display: block;
      }

      /* ---------- animations ---------- */
      @keyframes abRise {
        from {
          transform: translateY(108%);
        }
        to {
          transform: none;
        }
      }
      @keyframes abFade {
        from {
          opacity: 0;
          transform: translateY(24px);
        }
        to {
          opacity: 1;
          transform: none;
        }
      }
      @keyframes abPanel {
        from {
          transform: translateX(100%);
        }
        to {
          transform: none;
        }
      }
      @keyframes abCurtain {
        from {
          transform: scaleY(1);
        }
        to {
          transform: scaleY(0);
        }
      }
      @keyframes abKen {
        from {
          transform: scale(1.12);
        }
        to {
          transform: scale(1);
        }
      }
      @keyframes abFrame {
        from {
          opacity: 0;
          transform: translate(-14px, -14px);
        }
        to {
          opacity: 1;
          transform: none;
        }
      }
      @keyframes abLine {
        from {
          transform: scaleX(0);
        }
        to {
          transform: scaleX(1);
        }
      }
      @keyframes abMenu {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      .ab-mask {
        display: block;
        overflow: hidden;
        padding-bottom: 0.18em;
        margin-bottom: -0.18em;
      }
      .ab-mask > span {
        display: block;
        animation: abRise 1.3s cubic-bezier(0.2, 0.7, 0.1, 1) both;
      }
      .ab-fade {
        animation: abFade 1.1s cubic-bezier(0.2, 0.7, 0.1, 1) both;
      }
      .ab-line {
        transform-origin: left;
        animation: abLine 1.4s cubic-bezier(0.7, 0, 0.2, 1) both;
      }
      @supports (animation-timeline: view()) {
        .ab-rv {
          animation: abFade linear both;
          animation-timeline: view();
          animation-range: entry 0% cover 26%;
        }
      }


      /* ---------- hero ---------- */
      .ab-hero {
        position: relative;
        overflow: hidden;
        background: var(--royal);
        color: var(--white);
      }
      .ab-hero-panel {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        width: 40%;
        background: var(--silver);
        animation: abPanel 1.3s cubic-bezier(0.7, 0, 0.2, 1) both;
      }
      .ab-hero-in {
        position: relative;
        max-width: 1360px;
        margin: 0 auto;
        padding: clamp(48px, 7vw, 104px) clamp(20px, 4vw, 56px)
          clamp(56px, 7vw, 104px);
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 48px clamp(40px, 6vw, 96px);
      }
      .ab-hero-text {
        flex: 999 1 520px;
        min-width: 0;
        display: flex;
        flex-direction: column;
        gap: 22px;
      }
      .ab-eyebrow {
        display: flex;
        align-items: center;
        gap: 14px;
        margin: 0;
        font-size: 12px;
        font-weight: 500;
        letter-spacing: 0.3em;
        text-transform: uppercase;
        color: var(--silver);
      }
      .ab-eyebrow::before {
        content: "";
        width: 36px;
        height: 2px;
        background: var(--orange);
      }
      .ab-hero h1 {
        margin: 0;
        font-family: "Cormorant Garamond", serif;
        font-weight: 700;
        font-size: clamp(52px, 7vw, 104px);
        line-height: 0.92;
        color: var(--white);
      }
      .ab-hero-lead {
        margin: 0;
        max-width: 600px;
        font-family: "Cormorant Garamond", serif;
        font-style: italic;
        font-weight: 500;
        font-size: clamp(24px, 2.4vw, 32px);
        line-height: 1.35;
        color: var(--hero-text);
      }
      .ab-roles {
        display: flex;
        flex-wrap: wrap;
        gap: 8px 10px;
        margin: 4px 0 0;
        padding: 0;
        list-style: none;
      }
      .ab-roles li {
        padding: 9px 16px;
        border: 1px solid rgba(191, 199, 209, 0.55);
        border-radius: 999px;
        font-size: 12px;
        font-weight: 500;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--white);
      }

      .ab-photo-col {
        flex: 1 1 380px;
        min-width: 0;
        max-width: 420px;
        margin: 0 auto;
      }
      .ab-photo {
        position: relative;
        aspect-ratio: 4/5;
      }
      .ab-photo-outline {
        position: absolute;
        inset: 16px -16px -16px 16px;
        border: 1px solid var(--orange);
        animation: abFrame 1.3s cubic-bezier(0.2, 0.7, 0.1, 1) 1.3s both;
      }
      .ab-photo-mat {
        position: relative;
        height: 100%;
        padding: 8px;
        background: var(--white);
        box-shadow: 0 30px 60px -30px rgba(16, 42, 82, 0.6);
      }
      .ab-photo-win {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
        background: var(--soft);
      }
      .ab-photo-win img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 15%;
        animation: abKen 9s cubic-bezier(0.2, 0.6, 0.2, 1) 1s both;
      }
      .ab-photo-curtain {
        position: absolute;
        inset: 0;
        background: var(--royal);
        transform-origin: top;
        animation: abCurtain 1.5s cubic-bezier(0.7, 0, 0.2, 1) 0.9s both;
      }

      /* facts strip */
      .ab-facts {
        position: relative;
        max-width: 1360px;
        margin: 0 auto;
        padding: 0 clamp(20px, 4vw, 56px);
      }
      .ab-facts-in {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        margin-top: -40px;
        background: var(--white);
        box-shadow: 0 30px 60px -40px rgba(16, 42, 82, 0.45);
        border-top: 3px solid var(--orange);
      }
      .ab-fact {
        padding: 26px 28px;
        border-right: 1px solid #e3e8ef;
      }
      .ab-fact:last-child {
        border-right: 0;
      }
      .ab-fact b {
        display: block;
        font-family: "Cormorant Garamond", serif;
        font-size: 48px;
        font-weight: 700;
        line-height: 1;
        color: var(--royal);
      }
      .ab-fact b span {
        color: var(--orange);
      }
      .ab-fact p {
        margin: 8px 0 0;
        font-size: 14px;
        line-height: 1.5;
        color: var(--body);
      }

      /* ---------- sections ---------- */
      .ab-wrap {
        max-width: 1360px;
        margin: 0 auto;
        padding: 0 clamp(20px, 4vw, 56px);
      }
      .ab-sec {
        padding: clamp(64px, 8vw, 112px) 0;
      }
      .ab-label {
        display: flex;
        align-items: center;
        gap: 12px;
        margin: 0 0 14px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.28em;
        text-transform: uppercase;
        color: var(--royal);
      }
      .ab-label::before {
        content: "";
        width: 28px;
        height: 2px;
        background: var(--orange);
      }
      .ab-h2 {
        margin: 0;
        font-family: "Cormorant Garamond", serif;
        font-size: clamp(36px, 4vw, 56px);
        font-weight: 600;
        line-height: 1.05;
        color: var(--royal);
      }

      .ab-story {
        display: flex;
        flex-wrap: wrap;
        gap: 32px clamp(40px, 6vw, 96px);
      }
      .ab-story-side {
        flex: 1 1 260px;
        min-width: 0;
      }
      .ab-story-side .ab-sticky {
        position: sticky;
        top: 110px;
      }
      .ab-story-body {
        flex: 999 1 540px;
        min-width: 0;
        display: flex;
        flex-direction: column;
        gap: 22px;
        max-width: 780px;
      }
      .ab-story-body p {
        margin: 0;
        font-size: 18px;
        line-height: 1.85;
        color: var(--body);
      }
      .ab-story-body p.ab-lead {
        font-family: "Cormorant Garamond", serif;
        font-size: clamp(24px, 2.3vw, 30px);
        font-weight: 500;
        line-height: 1.45;
        color: var(--ink);
      }
      .ab-story-body p.ab-lead::first-letter {
        float: left;
        font-size: 3.1em;
        line-height: 0.86;
        padding: 6px 10px 0 0;
        font-weight: 700;
        color: var(--orange);
      }

      .ab-names {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 6px;
      }
      .ab-name {
        padding: 11px 18px;
        border: 1px solid var(--silver);
        background: var(--white);
        font-size: 15px;
        font-weight: 500;
        color: var(--royal);
        transition:
          border-color 0.4s,
          transform 0.4s cubic-bezier(0.2, 0.75, 0.1, 1);
      }
      .ab-name:hover {
        border-color: var(--orange);
        transform: translateY(-3px);
      }

      /* two journeys */
      .ab-journeys {
        background: var(--silver);
      }
      .ab-jgrid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 22px;
        margin-top: 36px;
      }
      .ab-jcard {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 16px;
        padding: clamp(28px, 3vw, 40px);
        background: var(--white);
        color: var(--ink);
        text-decoration: none;
        overflow: hidden;
        transition:
          transform 0.6s cubic-bezier(0.2, 0.75, 0.1, 1),
          box-shadow 0.6s;
      }
      .ab-jcard::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: var(--orange);
        transform: scaleY(0.25);
        transform-origin: top;
        transition: transform 0.6s cubic-bezier(0.2, 0.75, 0.1, 1);
      }
      .ab-jcard:hover {
        transform: translateY(-6px);
        box-shadow: 0 30px 60px -36px rgba(16, 42, 82, 0.55);
      }
      .ab-jcard:hover::before {
        transform: scaleY(1);
      }
      .ab-jnum {
        font-family: "Cormorant Garamond", serif;
        font-size: 56px;
        font-weight: 700;
        line-height: 1;
        color: var(--orange);
      }
      .ab-jcard h3 {
        margin: 0;
        font-family: "Cormorant Garamond", serif;
        font-size: clamp(30px, 2.8vw, 38px);
        font-weight: 600;
        line-height: 1.05;
        color: var(--royal);
      }
      .ab-jcard p {
        margin: 0;
        font-size: 16px;
        line-height: 1.7;
        color: var(--body);
      }
      .ab-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin: 0;
        padding: 0;
        list-style: none;
      }
      .ab-tags li {
        padding: 7px 12px;
        background: var(--soft);
        border: 1px solid #dce2ea;
        font-size: 13px;
        font-weight: 500;
        color: var(--royal);
      }
      .ab-more {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-top: auto;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--royal);
      }
      .ab-more span {
        transition: transform 0.5s cubic-bezier(0.2, 0.75, 0.1, 1);
      }
      .ab-jcard:hover .ab-more span {
        transform: translateX(8px);
      }

      /* ventures */
      .ab-vgrid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 16px;
        margin-top: 36px;
      }
      @media (max-width: 900px) {
        .ab-vgrid {
          grid-template-columns: repeat(2, minmax(0, 1fr));
        }
      }
      @media (max-width: 560px) {
        .ab-vgrid {
          grid-template-columns: minmax(0, 1fr);
        }
      }
      .ab-venture {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 28px;
        min-height: 170px;
        padding: 26px;
        background: var(--white);
        border: 1px solid #dce2ea;
        color: var(--royal);
        text-decoration: none;
        background-image: linear-gradient(var(--orange), var(--orange));
        background-repeat: no-repeat;
        background-position: 0 100%;
        background-size: 100% 0%;
        transition:
          background-size 0.7s cubic-bezier(0.7, 0, 0.2, 1),
          color 0.45s,
          border-color 0.45s;
      }
      .ab-venture:hover {
        background-size: 100% 100%;
        color: var(--white);
        border-color: var(--orange);
      }
      .ab-vtop {
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-family: "Cormorant Garamond", serif;
        font-size: 22px;
        font-weight: 700;
        color: var(--orange);
        transition: color 0.45s;
      }
      .ab-venture:hover .ab-vtop {
        color: var(--white);
      }
      .ab-vtop svg {
        opacity: 0.7;
      }
      .ab-venture h3 {
        margin: 0;
        font-family: "Cormorant Garamond", serif;
        font-size: 28px;
        font-weight: 600;
        line-height: 1.1;
      }
      .ab-venture small {
        display: block;
        margin-top: 6px;
        font-size: 13px;
        font-weight: 500;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: var(--body);
        transition: color 0.45s;
      }
      .ab-venture:hover small {
        color: var(--white);
      }

      /* next */
      .ab-next {
        background: var(--royal);
        color: var(--white);
      }
      .ab-next-in {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 28px;
        padding: clamp(56px, 7vw, 96px) 0;
      }
      .ab-next h2 {
        margin: 0;
        font-family: "Cormorant Garamond", serif;
        font-style: italic;
        font-weight: 500;
        font-size: clamp(34px, 4vw, 54px);
        line-height: 1.05;
      }
      .ab-btns {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
      }
      .ab-btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        min-height: 52px;
        padding: 0 24px;
        font-size: 13px;
        font-weight: 500;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        text-decoration: none;
        transition:
          background-color 0.4s,
          color 0.4s,
          border-color 0.4s,
          transform 0.4s cubic-bezier(0.2, 0.75, 0.1, 1);
      }
      .ab-btn span {
        transition: transform 0.4s cubic-bezier(0.2, 0.75, 0.1, 1);
      }
      .ab-btn:hover {
        transform: translateY(-3px);
      }
      .ab-btn:hover span {
        transform: translateX(6px);
      }
      .ab-btn-solid {
        background: var(--orange);
        color: var(--white);
        font-weight: 600;
      }
      .ab-btn-solid:hover {
        background: var(--orange-dk);
      }
      .ab-btn-line {
        border: 1px solid var(--silver);
        color: var(--white);
      }
      .ab-btn-line:hover {
        background: var(--white);
        color: var(--royal);
        border-color: var(--white);
      }

      /* footer */
      .ab-footer {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 12px 24px;
        padding: 24px clamp(20px, 4vw, 56px);
        background: var(--royal-deep);
        color: var(--hero-text);
        font-size: 12px;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        border-top: 1px solid var(--silver);
      }
      .ab-footer a {
        color: var(--hero-text);
      }
      .ab-footer a:hover {
        color: var(--white);
      }

      @media (max-width: 900px) {
        .ab-hero-panel {
          width: 100%;
          top: auto;
          height: 44%;
        }
        .ab-photo-col {
          max-width: 380px;
        }
        .ab-facts-in {
          margin-top: -24px;
        }
        .ab-fact {
          border-right: 0;
          border-bottom: 1px solid #e3e8ef;
        }
        .ab-fact:last-child {
          border-bottom: 0;
        }
        .ab-story-side .ab-sticky {
          position: static;
        }
      }
      @media (prefers-reduced-motion: reduce) {
        *,
        *::before,
        *::after {
          animation: none !important;
          transition: none !important;
        }
      }
    </style>
  </head>
  <body>
    <?php $active = 'about'; include __DIR__ . '/partials/header.php'; ?>

    <main>
      <!-- HERO -->
      <section class="ab-hero" aria-labelledby="about-title">
        <div class="ab-hero-panel" aria-hidden="true"></div>
        <div class="ab-hero-in">
          <div class="ab-hero-text">
            <p class="ab-eyebrow ab-fade" style="animation-delay: 0.3s">
              About Me
            </p>
            <h1 id="about-title">
              <span class="ab-mask"
                ><span style="animation-delay: 0.45s"
                  >Nitu Joshi Mittal</span
                ></span
              >
            </h1>
            <div
              class="ab-line"
              style="
                width: 120px;
                height: 2px;
                background: var(--orange);
                animation-delay: 1s;
              "
            ></div>
            <p class="ab-hero-lead ab-fade" style="animation-delay: 1.1s">
              A distinguished Business and Social Entrepreneur, boasting a
              remarkable career spanning over 25 years in business,
              entertainment and socio-cultural entrepreneurship.
            </p>
            <ul
              class="ab-roles ab-fade"
              style="animation-delay: 1.3s"
              aria-label="Roles"
            >
              <li>Creative Professional</li>
              <li>Entrepreneur</li>
              <li>Film Producer</li>
              <li>Social Entrepreneur</li>
            </ul>
          </div>
          <div class="ab-photo-col ab-fade" style="animation-delay: 0.6s">
            <div class="ab-photo">
              <div class="ab-photo-outline" aria-hidden="true"></div>
              <div class="ab-photo-mat">
                <div class="ab-photo-win">
                  <img
                    src="assets/nitu-portrait.png"
                    alt="Portrait of Nitu Joshi Mittal"
                    width="1080"
                    height="1350"
                  />
                  <div class="ab-photo-curtain" aria-hidden="true"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- AT A GLANCE -->
      <div class="ab-facts">
        <div
          class="ab-facts-in ab-fade"
          style="animation-delay: 1.5s"
          role="list"
          aria-label="At a glance"
        >
          <div class="ab-fact" role="listitem">
            <b>25<span>+</span></b>
            <p>
              Years across business, entertainment &amp; socio-cultural
              entrepreneurship
            </p>
          </div>
          <div class="ab-fact" role="listitem">
            <b>20<span>+</span></b>
            <p>Years in film, media &amp; entertainment production</p>
          </div>
          <div class="ab-fact" role="listitem">
            <b>6</b>
            <p>Ventures &amp; initiatives, including MIAM Charitable Trust</p>
          </div>
        </div>
      </div>

      <!-- STORY -->
      <section class="ab-wrap ab-sec" aria-labelledby="story-title">
        <div class="ab-story">
          <div class="ab-story-side">
            <div class="ab-sticky ab-rv">
              <p class="ab-label">Her Story</p>
              <h2 class="ab-h2" id="story-title">
                Creativity, enterprise &amp; purpose.
              </h2>
            </div>
          </div>
          <div class="ab-story-body">
            <p class="ab-lead ab-rv">
              With over two decades of experience in film, media and
              entertainment production, Nitu Joshi has earned recognition as a
              leading fashion and jewellery designer for prominent film,
              television and social personalities.
            </p>
            <p class="ab-rv">
              Her artistic prowess extends to fashion, costume and contemporary
              jewellery design, and she has collaborated with renowned figures
              such as choreographer Geeta Kapur, superstar Sanjay Dutt, Namrata
              Shirodkar, Jackie Shroff, Bhagyashree and numerous others.
            </p>
            <div class="ab-rv">
              <p class="ab-label" style="margin-top: 6px">
                Has collaborated with
              </p>
              <div class="ab-names">
                <span class="ab-name">Geeta Kapur</span
                ><span class="ab-name">Sanjay Dutt</span
                ><span class="ab-name">Namrata Shirodkar</span
                ><span class="ab-name">Jackie Shroff</span
                ><span class="ab-name">Bhagyashree</span>
              </div>
            </div>
            <p class="ab-rv">
              In addition to her business activities, Nitu Joshi has taken an
              active role in tackling environmental and social concerns. As part
              of her dedication to social entrepreneurship, she established the
              MIAM Charitable Trust, through which she has personally taken up
              initiatives including child education sponsorship, reforestation,
              animal welfare, water conservation, library revival and student
              welfare.
            </p>
          </div>
        </div>
      </section>

      <!-- TWO JOURNEYS -->
      <section class="ab-journeys" aria-labelledby="journeys-title">
        <div class="ab-wrap ab-sec">
          <p class="ab-label ab-rv">Two Journeys. One Purpose.</p>
          <h2 class="ab-h2 ab-rv" id="journeys-title">Where her work leads</h2>
          <div class="ab-jgrid">
            <a href="professional.php" class="ab-jcard ab-rv">
              <span class="ab-jnum" aria-hidden="true">01</span>
              <h3>My Professional Journey</h3>
              <p>
                Fashion, costume and jewellery design, film and media
                production, and the ventures built along the way.
              </p>
              <ul class="ab-tags" aria-label="Areas">
                <li>Fashion &amp; costume design</li>
                <li>Jewellery design</li>
                <li>Film &amp; media production</li>
              </ul>
              <span class="ab-more"
                >Explore <span aria-hidden="true">→</span></span
              >
            </a>
            <a href="purpose.php" class="ab-jcard ab-rv">
              <span class="ab-jnum" aria-hidden="true">02</span>
              <h3>My Journey of Purpose</h3>
              <p>
                MIAM Charitable Trust and the causes she has personally taken
                up.
              </p>
              <ul class="ab-tags" aria-label="Initiatives">
                <li>Child education sponsorship</li>
                <li>Reforestation</li>
                <li>Animal welfare</li>
                <li>Water conservation</li>
                <li>Library revival</li>
                <li>Student welfare</li>
              </ul>
              <span class="ab-more"
                >Explore <span aria-hidden="true">→</span></span
              >
            </a>
          </div>
        </div>
      </section>

      <!-- VENTURES -->
      <section class="ab-wrap ab-sec" aria-labelledby="ventures-title">
        <p class="ab-label ab-rv">Ventures</p>
        <h2 class="ab-h2 ab-rv" id="ventures-title">Built over the years</h2>
        <div class="ab-vgrid">
          <div class="ab-venture ab-rv">
            <div class="ab-vtop"><span>01</span></div>
            <div>
              <h3>Ebina Entertainment</h3>
              <small>Entertainment</small>
            </div>
          </div>
          <div class="ab-venture ab-rv">
            <div class="ab-vtop"><span>02</span></div>
            <div>
              <h3>Vedansh Entertainment</h3>
              <small>Entertainment</small>
            </div>
          </div>
          <div class="ab-venture ab-rv">
            <div class="ab-vtop"><span>03</span></div>
            <div>
              <h3>Aayush Telefilms</h3>
              <small>Television &amp; films</small>
            </div>
          </div>
          <div class="ab-venture ab-rv">
            <div class="ab-vtop"><span>04</span></div>
            <div>
              <h3>Ebina Jewel</h3>
              <small>Jewellery</small>
            </div>
          </div>
          <div class="ab-venture ab-rv">
            <div class="ab-vtop"><span>05</span></div>
            <div>
              <h3>Ebina Hotel</h3>
              <small>Hospitality</small>
            </div>
          </div>
          <a href="purpose.php" class="ab-venture ab-rv"
            ><div class="ab-vtop">
              <span>06</span
              ><svg
                width="22"
                height="22"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path d="M7 17L17 7M9 7h8v8" />
              </svg>
            </div>
            <div>
              <h3>MIAM Charitable Trust</h3>
              <small>Social impact</small>
            </div></a
          >
        </div>
      </section>

      <!-- NEXT -->
      <section class="ab-next" aria-label="Continue">
        <div class="ab-wrap">
          <div class="ab-next-in">
            <h2 class="ab-rv">Continue the story.</h2>
            <div class="ab-btns ab-rv">
              <a href="professional.php" class="ab-btn ab-btn-solid"
                >My Professional Journey <span aria-hidden="true">→</span></a
              >
              <a href="purpose.php" class="ab-btn ab-btn-line"
                >My Journey of Purpose <span aria-hidden="true">→</span></a
              >
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="ab-footer">
      <span>© Nitu Joshi · Official website</span>
      <span style="display: flex; flex-wrap: wrap; gap: 20px">
        <a href="https://instagram.com/nitujoshiofficial">Instagram</a>
        <a href="https://linkedin.com/in/nitu-joshi">LinkedIn</a>
        <a href="https://facebook.com/nitu.joshi1">Facebook</a>
        <a href="https://x.com/nitujoshi_india">X</a>
      </span>
    </footer>

    <script src="assets/nav.js"></script>
  </body>
</html>
