<?php
header("Content-Type: image/svg+xml");

function create_circles(){

$cont = '
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
width="100%" height="100%" >
	
<defs>
	<linearGradient id="bubble" x1="0%"  y1="0%" x2="0%" y2="100%">
		<stop offset="0%" style="stop-color:rgb(80,80,80); stop-opacity:1"/>
		<stop offset="100%" style="stop-color:rgb(0,0,0); stop-opacity:1"/>
	</linearGradient>
</defs>

<rect x="0" y="0" width="1000" height="1" style="fill: black;"/>
<rect x="0" y="1" width="1000" height="1" style="fill: rgb(180,180,180);"/>

<rect x="0" y="0" width="1000" height="250" style="fill: url(#bubble);"/>
';
				
	$cont .= '</svg>';
    echo $cont;
}	

create_circles();	
	
?>