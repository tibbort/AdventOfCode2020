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

// Loop
foreach($lines as $lineNo => $line) {
    if($lineNo === $y) {
        $trees += (int)($line[$x % strlen($line)] === '#');
        $x += $right;
        $y += $down;
    }
};

echo "Number of trees: " . $trees;
?>