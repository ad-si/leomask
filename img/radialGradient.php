<?php
header("Content-Type: image/svg+xml");

function create_circles(){

$cont = '
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
width="100%" height="100%" >
	
<defs>
	<radialGradient id="bg_gradient" cx="25%" cy="5%" r="20%" fx="25%" fy="5%">
		<stop offset="0%" style="stop-color:rgb(255,255,255); stop-opacity:0"/>
		<stop offset="100%" style="stop-color:rgb(0,0,0); stop-opacity:0"/>
	</radialGradient>
</defs>

<rect x="0" y="0" width="100%" height="100%" style="fill: url(#bg_gradient);"/>';



$cont .= '
		<defs>
			<linearGradient id="bubble" x1="0%"  y1="0%" x2="0%" y2="100%">
				<stop offset="0%" style="stop-color:rgb(30,30,30); stop-opacity:1"/>
				<stop offset="4%" style="stop-color:rgb(60,60,60); stop-opacity:1"/>
				<stop offset="96%" style="stop-color:rgb(0,0,0); stop-opacity:1"/>
				<stop offset="100%" style="stop-color:rgb(70,70,70); stop-opacity:1"/>
			</linearGradient>
		</defs>
		
		<rect x="0" y="90" width="2000" height="230" style="fill: url(#bubble);"/>';
				
	$cont .= '</svg>';
    echo $cont;
}	

create_circles();	
	
?>