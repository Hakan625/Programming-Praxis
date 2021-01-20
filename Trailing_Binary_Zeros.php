<?php
/*
* Given a positive integer, count the number of trailing zero-bits in its binary representation. 
* 
* For instance, 
* 18 = 10010, so it has 1 trailing zero-bit, and 
* 48 = 110000, so it has 4 trailing zero-bits.
* 
* Your task is to write a program that counts the number of trailing zero-bits in the binary representation of a positive integer. 
*
*/
function checkTrailingZeros($n){
	// Take the number and convert to binary
	$binary = decbin($n);

	// Typecast the resulting number into a string
	$string = (string) $binary;

	// Determine length of the string
	$length = strlen($string);

	// Put the digits into an array
	for ($i=0; $i < $length; $i++) { 
		$array[] = $string[$i];
	}

	// Reverse the array
	$array = array_reverse($array);

	// Prepare a counter
	$counter = 0;

	// Loop through the array
	foreach ($array as $key => $digit) {
		// check whether the digit is zero
		if ($digit == 0) {
			// if so, increment the counter by one
			$counter += 1;
		} else {
			break;
		}
	}

	// Present the number and the counter
	echo $n.". has got ".$counter." trailing zeros in binary (".$string.")<br>";

}

// Determine for every integer between 1 and 10.000 how many trailing zeros it has in binary
for ($i=1; $i < 10000; $i++) { 
	checkTrailingZeros($i);
}


?>
