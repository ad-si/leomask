<?php
function error_handler($errno, $errstr, $errfile, $errline) {
    if (substr($_SERVER['REQUEST_URI'], 0, 5) == '/dev/')
        echo '<pre>'.(new ErrorException($errstr, 0, $errno, $errfile, $errline)).'</pre>';
    else
    mail('leomaskmusic@googlemail.com', 'Leo Mask Error', new ErrorException($errstr, 0, $errno, $errfile, $errline));
    if ($errno != E_WARNING && $errno != E_NOTICE)
        exit;
}
set_error_handler('error_handler');


include('config.inc.php');
include('classes/template.class.php');
include('functions.inc.php');


$content = '';

$menu =
	'<div id="preload">
		<img src="img/youtube_h.png" alt="youtube"/>
		<img src="img/facebook_h.png" alt="facebook"/>
		<img src="img/twitter.png" alt="twitter"/>
		<img src="img/itunes_h.png" alt="itunes"/>
	</div>'.
	'
	<h1>
		<a href="index.php">Leo Mask</a>
	</h1>
	'.
	'<iframe src="http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fleomaskmusic&amp;layout=button_count&amp;show_faces=false&amp;width=450&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=25" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:180px; height:25px;" allowTransparency="true">
	</iframe>'.
	'<a id="youtube" class="social" href="https://www.youtube.com/leomaskmusic" title="YouTube"></a>'.
	'<a id="facebook" class="social" href="https://www.facebook.com/leomaskmusic" title="Facebook"></a>'.
	'<a id="twitter" class="social" href="https://www.twitter.com/leomaskmusic" title="Twitter"></a>'.	
	'<a id="itunes" class="social" href="http://itunes.apple.com/de/artist/leo-mask/id421212373" title="iTunes"></a>'.
	
'<div id="menu_wrap">
	<a class="menu" href="music.php" >music</a>
	<a class="menu" href="bio.php">bio</a>
	<a class="menu" href="contact.php">contact</a>
</div>';
				
$footer ='';
