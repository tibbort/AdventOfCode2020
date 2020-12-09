<?php
// Import file 
$file = file_get_contents('puzzle_input.txt');
$rules = array_map('trim',explode("\n", $file));

// Loop
$counter = 0;

foreach ($rules as $row){
	preg_match ('/^(\d+)\-(\d+) ([a-z]): ([a-z]+)/m', $row, $matches);

	$min = $matches[1];
	$max = $matches[2];
	$letter = $matches[3];
	$password = $matches[4];
	
	if((substr_count($password, $letter)>=$min) && (substr_count($password, $letter)<=$max)){
		$counter++;
	};
};

echo "Total valid passwords: " . $counter;
?>