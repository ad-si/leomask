<?php

include('inc/common.inc.php');

$title = '';

$content =
'<div id="home">';

// // Pumped Up Kicks
// $content .= '
// <iframe title="YouTube video player"
// src="https://www.youtube.com/embed/a5OFgMZz7Io?hd=1"
// frameborder="0">
// </iframe>';

// // Just Cant Get Enough
// $content .= '
// <iframe title="YouTube video player"
// src="https://www.youtube.com/embed/PN2r2X7QRkQ?hd=1"
// frameborder="0">
// </iframe>';

// // Grenade
// $content .= '
// <iframe title="YouTube video player"
// src="https://www.youtube.com/embed/RZlC5ivjUuA?hd=1"
// frameborder="0">
// </iframe>';

// // Lovely Day
// $content .= '
// <iframe title="YouTube video player"
// src="https://www.youtube.com/embed/zxzTMFt3MVU?hd=1"
// frameborder="0">
// </iframe>';

// // Never Mind
// $content .= '
// <iframe title="YouTube video player"
// src="https://www.youtube.com/embed/qtYc_pBiDk0?hd=1"
// frameborder="0">
// </iframe>';


$content .=
''.
'
  <a
    id="spotify"
    class="social"
    href="https://open.spotify.com/artist/0Zsk2aAXQR5sdsNXfKlUVO"
    title="Spotify"
  >
    <i class="fab fa-spotify"></i>
  </a>
'.
'
  <a
    id="apple-music"
    class="social"
    href="https://music.apple.com/de/artist/leo-mask/1527314230"
    title="Appple Music"
  >
    <i class="fab fa-apple"></i>
  </a>
'.
'
  <a
    id="amazon-music"
    class="social"
    href="https://music.amazon.de/artists/B08FT1ZSVN"
    title="Amazon Music"
  >
    <i class="fab fa-amazon"></i>
  </a>
'.
'
  <a
    id="deezer"
    class="social"
    href="https://www.deezer.com/us/artist/103699402"
    title="deezer"
  >
    <i class="fab fa-deezer"></i>
  </a>
'.
'
  <a
    id="youtube-music"
    class="social"
    href="https://music.youtube.com/playlist?list=OLAK5uy_nEK8oAOXNA2y4AD_-82K73OO-lJwCSR-Q"
    title="YouTube Music"
  >
    <i class="fab fa-youtube-square"></i>
  </a>
'.
'
  <a
    id="soundcloud"
    class="social"
    href="https://soundcloud.com/leomask"
    title="Soundcloud"
  >
    <i class="fab fa-soundcloud"></i>
  </a>
'.
'
  <a
    id="tidal"
    class="social"
    href="https://listen.tidal.com/artist/20868290"
    title="tidal"
  >
    <i class="fas fa-tenge"></i>
  </a>
'.
'<br>'.
'<br>'.
'<br>'.
'<br>'.
'<br>'.
'
  <a
    id="instagram"
    class="social"
    href="https://www.instagram.com/leomaskmusic"
    title="Instagram"
  >
    <i class="fab fa-instagram"></i>
  </a>
'.
'
  <a
    id="facebook"
    class="social"
    href="https://www.facebook.com/leomaskmusic"
    title="Facebook"
  >
    <i class="fab fa-facebook"></i>
  </a>
'.
'
  <a
    id="twitter"
    class="social"
    href="https://www.twitter.com/leomaskmusic"
    title="Twitter"
  >
    <i class="fab fa-twitter"></i>
  </a>
'.
'
  <a
    id="youtube"
    class="social"
    href="https://www.youtube.com/leomaskmusic"
    title="YouTube"
  >
    <i class="fab fa-youtube"></i>
  </a>
'.

'</div>'.
'';


$template = new template($template_file);
$template->readtemplate();
$template->replace('TITLE', $title);
$template->replace('HEADER', $template_header);
$template->replace('MENU', $menu);
$template->replace('CONTENT', $content);
$template->replace('FOOTER', $footer);
$template->parse();

?>
