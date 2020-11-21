<?php

	
	
function renderRandomRow(){
	$values  = ['red','blue','green','yellow','lime','magenta','black','gold','gray','tomato'];
	$colors = ['red','blue','green','yellow','lime','magenta','black','gold','gray','tomato'];
	for ($i = 0; $i < 5; $i++){
		$text = array_rand($values,1);
		do{
			$color = array_rand($colors,1);
		}while ($text == $color);
		echo "<a style= color:".$colors[$color].">" .$values[$text].' '."</a>";
	}
}

function test(){
	for ($u = 0; $u < 5; $u++){
		renderRandomRow();
		echo '</br>';			
	}
}
test();
?>