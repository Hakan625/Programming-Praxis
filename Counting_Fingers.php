<?php
/*
* A little girl counts on her fingers in a curious way. She counts 
* 1 on her thumb, 
* 2 on her index finger, 
* 3 on her middle finger, 
* 4 on her ring finger, and 
* 5 on her pinky finger, 
* 
* then she works back, counting 
* 6 on her ring finger, 
* 7 on her middle finger, 
* 8 on her index finger, and 
* 9 on her thumb, 
* 
* She turns back around again, counting 
* 10 on her index finger, 
* 11 on her middle finger, and so on.
* 
* Your task is to write a program that determines which finger the little girl will be on when she finishes counting to 1000.

*/


// Put your fingers in the array
$fingers = [
	'thumb',
	'index',
	'middle',
	'ring',
	'pinky',
];

// loop through integers between 1 and 1000
for ($i = 1; $i <= 1000; $i++) { 
	// Declare both the count and finger with each iteration
	echo $i.". ".current($fingers)."<br>";

	// Move the array pointer up one element
	next($fingers);

	// If the array pointer is at either the pinky or the thumb,
	if (current($fingers) == 'pinky' || current($fingers) == 'thumb') {
		// reverse the order of the elements in the array
		$fingers = array_reverse($fingers);
	}
}

?>

