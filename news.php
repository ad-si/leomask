<?php
include('inc/common.inc.php');

$title = 'News';

$content = '';


$template = new template($template_file);
$template->readtemplate();
$template->replace('TITLE', $title);
$template->replace('HEADER', $template_header);
$template->replace('MENU', $menu);
$template->replace('CONTENT', $content);
$template->replace('FOOTER', $footer);
$template->parse();

?>
