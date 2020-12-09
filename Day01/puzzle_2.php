<?php
// Import expenses 
$file = file_get_contents('puzzle_input.txt');
$expenses = array_map('trim',explode("\n", $file));

$total = count($expenses)-1;

// Loop
for ($i=0; $i<=$total-2; $i++){	
	$num1 = $expenses[$i];
	
	for ($j=$i+1; $j<=$total-1; $j++){
		$num2 = $expenses[$j];
		
		for ($k=$j+1; $k<=$total; $k++){
			$num3 = $expenses[$k];
			
			$sum = $num1 + $num2 + $num3;
			
			if($sum == 2020){
				echo $num1. " + " . $num2 . " + " . $num3 . " = " . $sum;
				echo "<br>" . "Multiplying them together produces: " . ($num1 * $num2 * $num3);
			};
		};
	};
};
?>