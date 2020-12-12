<?php
// Import file 
$file = file_get_contents('puzzle_input.txt');
$lines = array_map('trim',explode("\n", $file));

// Rules
$right = 3;
$down = 1;

// Starting datas
$x = 0;
$y = 0;
$trees = 0;

// Loop with for
for ($y=0; $y<=count($lines)-1; $y++){
	$currentline = $lines[$y];
	// Check the element in a specific position of $currentline and return 1 or 0
	$trees += (int)($currentline[$x % strlen($currentline)] === '#');
	$x += $right;
};

/* Loop with foreach 
foreach($lines as $num => $line) {
    if($num === $y) {
        $trees += (int)($line[$x % strlen($line)] === '#');
        $x += $right;
        $y += $down;
    }
};
*/

echo "Number of trees: " . $trees;
?>
