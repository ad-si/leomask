<?php
include('inc/common.inc.php');//fuer alle Dateien gleiche Informationen einbinden

$title = 'Contact';

$content .= "
<script src='http://widgets.twimg.com/j/2/widget.js'></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 6,
  interval: 6000,
  width: 'auto',
  height: 500,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#292929',
      links: '#006ac7'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    behavior: 'all'
  }
}).render().setUser('LeoMaskMusic').start();
</script>";

	


$template = new template($template_file);//Template parsen
$template->readtemplate();
$template->replace('TITLE', $title);
$template->replace('HEADER', $template_header);
$template->replace('MENU', $menu);
$template->replace('CONTENT', $content);
$template->replace('FOOTER', $footer);
$template->parse();

?>