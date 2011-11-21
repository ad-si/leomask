<?php

include('inc/common.inc.php'); //fuer alle Dateien gleiche Informationen einbinden

$title = '';

$content = 
'<div id="home">';

$content .= '
<iframe title="YouTube video player"
src="https://www.youtube.com/embed/a5OFgMZz7Io?hd=1"
frameborder="0">
</iframe>'; // PUmped Up Kicks

$content .= '
<iframe title="YouTube video player"
src="https://www.youtube.com/embed/PN2r2X7QRkQ?hd=1"
frameborder="0">
</iframe>'; // Just Cant Get Enough

$content .= ' 
<iframe title="YouTube video player"
src="https://www.youtube.com/embed/RZlC5ivjUuA?hd=1"
frameborder="0">
</iframe>'; //Grenade

$content .= '
<iframe title="YouTube video player"
src="https://www.youtube.com/embed/zxzTMFt3MVU?hd=1"
frameborder="0">
</iframe>'; //Lovely Day

$content .= '
<iframe title="YouTube video player"
src="https://www.youtube.com/embed/qtYc_pBiDk0?hd=1"
frameborder="0">
</iframe>'; //Never Mind

$content .= 
'</div>';	 
     


$template = new template($template_file);//Template parsen
$template->readtemplate();
$template->replace('TITLE', $title);
$template->replace('HEADER', $template_header);
$template->replace('MENU', $menu);
$template->replace('CONTENT', $content);
$template->replace('FOOTER', $footer);
$template->parse();

?>
