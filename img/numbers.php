<?php


$content .='
<svg  style="position: absolute; right: 0; top: 240px;" width="140" height="140"
xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">';

for($i=1; $i<=10; $i++){
	for($a=1; $a<=10; $a++){
	  
	  $random = rand(0,10);
	  
	  if($random >= 6){
		  $content .='<text x="'.($a * 10).'" y="'.($i * 20).'" fill="white" style="font:900 18px/18px Trebuchet MS, sans-serif;">
			&#'.(rand(48,57)).'; 
		  </text>';//&#'.(rand(2000,3000)).';
	  }
	}
} 

$content .='</svg>';
?>