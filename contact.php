<?php
include('inc/common.inc.php');

$title = 'Contact';

$content .= '
<div id="contact">
<h2>HEY EVERYBODY!</h2>
<p>I\'m Leo Mask, a musician, singer-songwriter and producer from Germany!</p>
<br />
<p>
Please check out my youtube channel and feel free to subscribe!<br />
You can also find me on twitter, facebook and myspace!
</p>
</div>';


$template = new template($template_file);//Template parsen
$template->readtemplate();
$template->replace('TITLE', $title);
$template->replace('HEADER', $template_header);
$template->replace('MENU', $menu);
$template->replace('CONTENT', $content);
$template->replace('FOOTER', $footer);
$template->parse();

?>
