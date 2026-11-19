<?php
// $active must be set by the including page to one of:
// home, about, professional, purpose, media, awards, gallery, contact
$active = isset($active) ? $active : '';
$links = [
  'home'         => ['index.php', 'Home', 'Home'],
  'about'        => ['about.php', 'About Me', 'About Me'],
  'professional' => ['professional.php', 'Professional Journey', 'My Professional Journey'],
  'purpose'      => ['purpose.php', 'Journey of Purpose', 'My Journey of Purpose'],
  'media'        => ['media.php', 'Media', 'Media'],
  'awards'       => ['awards.php', 'Awards', 'Awards'],
  'gallery'      => ['gallery.php', 'Gallery', 'Gallery'],
  'contact'      => ['contact.php', 'Contact', 'Contact'],
];
?>
<header class="ab-header">
  <div class="ab-header-in">
    <a href="index.php" class="ab-brand" aria-label="Nitu Joshi — Home"><span class="ab-mono">NJ</span><span class="ab-word">NITU JOSHI</span></a>
    <nav class="ab-nav" aria-label="Main">
<?php foreach ($links as $key => $l): ?>
      <a href="<?= $l[0] ?>"<?= $key === $active ? ' aria-current="page"' : '' ?>><?= $l[1] ?></a>
<?php endforeach; ?>
    </nav>
    <button type="button" class="ab-menubtn" id="menu-open" aria-expanded="false" aria-controls="site-menu">Menu <svg width="20" height="12" viewBox="0 0 20 12" aria-hidden="true"><path d="M0 1H20M6 6H20M12 11H20" stroke="currentColor" stroke-width="1.4"/></svg></button>
  </div>
</header>

<div class="ab-menu" id="site-menu" role="dialog" aria-modal="true" aria-label="Menu" hidden>
  <div style="display:flex;align-items:center;justify-content:space-between">
    <span class="ab-mono" aria-hidden="true">NJ</span>
    <button type="button" class="ab-menubtn" id="menu-close" style="display:flex">Close <svg width="14" height="14" viewBox="0 0 14 14" aria-hidden="true"><path d="M1 1L13 13M13 1L1 13" stroke="currentColor" stroke-width="1.4"/></svg></button>
  </div>
  <nav aria-label="Main">
<?php foreach ($links as $key => $l): ?>
    <a href="<?= $l[0] ?>"<?= $key === $active ? ' aria-current="page"' : '' ?>><?= $l[2] ?></a>
<?php endforeach; ?>
  </nav>
  <div style="display:flex;flex-wrap:wrap;justify-content:space-between;gap:12px 24px;padding-top:18px;border-top:1px solid rgba(191,199,209,.5);font-size:12px;letter-spacing:.2em;text-transform:uppercase">
    <span style="font-family:'Cormorant Garamond',serif;font-style:italic;font-size:20px;letter-spacing:0;text-transform:none;color:#BFC7D1">Two Journeys. One Purpose.</span>
    <span style="display:flex;flex-wrap:wrap;gap:22px"><a href="https://instagram.com/nitujoshiofficial" style="color:#FFFFFF">Instagram</a><a href="https://linkedin.com/in/nitu-joshi" style="color:#FFFFFF">LinkedIn</a><a href="https://facebook.com/nitu.joshi1" style="color:#FFFFFF">Facebook</a><a href="https://x.com/nitujoshi_india" style="color:#FFFFFF">X</a></span>
  </div>
</div>
