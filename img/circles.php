<?php

header("Content-Type: image/svg+xml");

function create_circles()
{
	
	$cont = '
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
width="100%" height="100%" >
	
<defs>
	<radialGradient id="bubble" cx="50%" cy="50%" r="50%" fx="50%" fy="50%">
		<stop offset="0%" style="stop-color:rgb('.rand(1,255).', '.rand(1,255).', 255); stop-opacity:0.4"/>
		<stop offset="100%" style="stop-color:rgb('.rand(1,255).', '.rand(1,255).', 255); stop-opacity:0.8"/>
	</radialGradient>
</defs>';
	
	for ($k = 1; $k <= 100; $k++){
		
  $x = rand(1,500);
  $y = rand(1,500);
			
			$cont .= '
			<circle cx="'.rand(1,1000).'" cy="'.rand(1,1000).'" r="'.rand(1,100).'"
				stroke="white" stroke-width="5" opacity="0.05" >
				
			<animateColor attributeName="fill" 
			from="rgb('.rand(1,255).', '.rand(1,255).', 255)"
			 to="rgb('.rand(1,255).', '.rand(1,255).', 255)" dur="'.rand(10,50).'s"
			 repeatCount="indefinite" />
			 
			 <animateMotion dur="'.rand(10,50).'s" 
			 values="'.$x.','.$y.'; '.rand(1,500).', '.rand(1,500).'; '.$x.','.$y.';"
			 repeatCount="indefinite" />
			 
			</circle>	
				
				';
		}						
	$cont .= '</svg>';
    echo $cont;
}	

create_circles();	
	
?>