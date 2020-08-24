<?php
/*
* In a string consisting of digits and other non-digit characters, 
* the digits form an embedded series of positive integers. 
* For instance, the string “123abc45def” contains the embedded integers 123 and 45, 
* which sum to 168.
* 
* Your task is to write a program that takes a string 
* and writes the sum of the integers embedded in the string.
*/

if (!empty($_POST['string'])) {
	// Retrieve the posted string
	$string = $_POST['string'];
	
	// Scan the string for integers and put them into an array
	preg_match_all('/\d+/', $string, $matches);

	$total = 0;

	// Loop through the matches and sum the integers
	foreach ($matches as $match) {
		foreach ($match as $integer) {
			$total += $integer;
		}
	}

	echo "<pre>";
	print_r($matches);
	echo "</pre>";

	echo "The sum of all integers in the string that you have entered is: ".$total;

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Summing strings</title>
</head>
<body>
	<p>
		Enter a string containing integers: 
	</p>
	<form action="SummingIntegersInString.php" method="POST">
		<input name="string">
		<button type="submit">Sum it!</button>
	</form>
</body>
</html>