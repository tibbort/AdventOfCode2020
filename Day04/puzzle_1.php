<?php
// Import file 
$file = file_get_contents('puzzle_input.txt');

// Required fields
$required_with_cid = ["byr", "iyr", "eyr", "hgt", "hcl", "ecl", "pid", "cid"];
$required_without_cid = ["byr", "iyr", "eyr", "hgt", "hcl", "ecl", "pid"];
sort($required_with_cid);
sort($required_without_cid);

// create an array with every passports by removing double newline
$passports = explode("\r\n\r\n", $file);

foreach ($passports as $data) {
	// for every passport replace single newline with whitespace for a clean string
	$clean_data = trim(preg_replace('/\s+/', ' ', $data));
	
	// for every passport create an array with single data
	$single_data = explode(" ", $clean_data);

	// for every data, remove values after :
	$key_data = array();
	foreach ($single_data as $datanvalue) {
		$key_data[] = substr($datanvalue, 0, strpos($datanvalue, ":"));
	};

	sort($key_data);
	
	if($key_data == $required_with_cid || $key_data == $required_without_cid){
        $valid_passports++;
    };
};

echo "There are " . $valid_passports . " valid passports";
?>
