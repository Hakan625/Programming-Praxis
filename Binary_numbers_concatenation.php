<?php

/*
* The concatenation of the first four integers, written in binary, is 11011100; 
* That is, 1 followed by 10 followed by 11 followed by 100. 
* That concatenated number resolves back to 220. 
* A similar process can convert the concatenation of the first n binary numbers to a normal decimal number.

* Your task is to compute the nth binary concatenation in the manner described above; 
* report the result modulo 10^9 + 7, because the result grows so quickly. 
*/

function concatenateBinaryNumbers($n){
	// Prepare an array with integers from 1 to n
	$m = 1;
	do {
		$array[] = $m;
		$m += 1;
	} while ($m <= $n); 

	// Prepare a string for concatenation
	$concatenated = '';

	// Loop through the array 
	foreach ($array as $number) {
		// Convert each integer to a binary string and concatenate it to the prepared string
		$concatenated .= decbin($number);
	}

	// Convert the concatenated string back to decimal format
	$number = bindec($concatenated);
	$number_modulated = $number % ((10 ** 9) + 7);

	echo $n.'. '.$number.' mod 10^9 + 7 = '.$number_modulated.'<br>'; 


}
 
for ($i=1; $i < 16; $i++) { 
	concatenateBinaryNumbers($i);
}


?>