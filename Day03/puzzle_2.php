<?php
// Import file 
$file = file_get_contents('puzzle_input.txt');
$lines = array_map('trim',explode("\n", $file));

$total = 1;

// Rules
$slope_x = [1,3,5,7,1];
$slope_y = [1,1,1,1,2];

// Loop
for ($i=0; $i<=count($slope_x)-1; $i++) {
	// starting data
	$x = 0;
	$y = 0;
	$trees = 0;

	// pair of coordinates
	$current_slope_x = $slope_x[$i];
    $current_slope_y = $slope_y[$i];
	
	// lines
	foreach($lines as $num => $line) {
		if($num === $y) {
			$trees += (int)($line[$x % strlen($line)] === '#');
			$x += $current_slope_x;
			$y += $current_slope_y;
		};
	};
	
	echo "Slope n." . $i . ": " . $trees . " trees" . "<br>";
	$total *= $trees;
};

echo "<br> Total number of trees: " . $total;
?>